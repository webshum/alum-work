<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Str;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Tabs')
                    ->tabs([
                        Tab::make('General')
                            ->schema([
                                TextInput::make('title')
                                    ->label('Title')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function (Set $set, ?string $state) {
                                        $set('slug', Str::slug($state));
                                    }),

                                TextInput::make('slug')
                                    ->label('URL (slug)')
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->prefix('/'),

                                FileUpload::make('thumbnails')
                                    ->label('Image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('products')
                                    ->visibility('public')
                                    ->columnSpanFull()
                                    ->nullable(),

                                RichEditor::make('content')
                                    ->label('Product content')
                                    ->toolbarButtons([
                                        'bold', 'italic', 'underline',
                                        'bulletList', 'orderedList',
                                        'h2', 'h3',
                                        'link', 'blockquote',
                                    ])
                                    ->columnSpanFull()
                            ]),
                        Tab::make('Gallery')
                            ->schema([
                                // ...
                            ]),
                        Tab::make('Configurator')
                            ->schema([
                                // ...
                            ]),
                        Tab::make('SEO')
                            ->schema([
                                // ...
                            ]),
                    ])->columnSpanFull()
            ]);
    }
}
