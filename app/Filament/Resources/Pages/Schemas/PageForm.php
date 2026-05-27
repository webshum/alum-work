<?php

namespace App\Filament\Resources\Pages\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Str;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;

class PageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Main')->schema([
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
                        ->directory('pages')
                        ->columnSpanFull()
                        ->nullable(),

                    Toggle::make('is_active')
                        ->label('Active')
                        ->default(true)
                ])->columnSpanFull(),

                Section::make('Content')->schema([
                    RichEditor::make('content')
                        ->label('Page content')
                        ->toolbarButtons([
                            'bold', 'italic', 'underline',
                            'bulletList', 'orderedList',
                            'h2', 'h3',
                            'link', 'blockquote',
                        ])
                        ->columnSpanFull()
                ])->columnSpanFull(),

                Section::make('SEO')
                    ->collapsed()
                    ->schema([
                        TextInput::make('meta_title')
                            ->label('Meta Title')
                            ->maxLength(60)
                            ->helperText('Up to 60 characters recommended'),

                        Textarea::make('meta_description')
                            ->label('Meta Description')
                            ->rows(2)
                            ->maxLength(160)
                            ->helperText('Up to 160 characters recommended')
                    ])->columnSpanFull()
            ]);
    }
}
