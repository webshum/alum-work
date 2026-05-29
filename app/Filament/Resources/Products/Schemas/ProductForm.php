<?php

namespace App\Filament\Resources\Products\Schemas;

use App\Models\Category;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Components\Utilities\Get;
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

                                Select::make('category_id')
                                    ->label('Category')
                                    ->options(
                                        Category::active()->pluck('title', 'id')
                                    )
                                    ->nullable(),

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
                                    ->columnSpanFull(),

                                Section::make('Pricing')
                                    ->columns(3)
                                    ->schema([
                                        TextInput::make('price')
                                            ->label('Price (€)')
                                            ->numeric()
                                            ->prefix('€')
                                            ->required()
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(function (Get $get, Set $set, $state) {
                                                self::recalculateDiscount($get, $set);
                                            }),

                                        TextInput::make('old_price')
                                            ->label('Old price (€)')
                                            ->numeric()
                                            ->prefix('€')
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(function (Get $get, Set $set, $state) {
                                                self::recalculateDiscount($get, $set);
                                            }),

                                        TextInput::make('discount')
                                            ->label('Discount (%)')
                                            ->numeric()
                                            ->suffix('%')
                                            ->disabled()
                                            ->dehydrated(true),
                                    ]),

                                Section::make('Status')
                                    ->columns(2)
                                    ->schema([
                                        Toggle::make('is_active')
                                            ->label('Active')
                                            ->default(true),

                                        Toggle::make('recommended')
                                            ->label('Recommended')
                                            ->default(false),
                                    ])
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
                                TextInput::make('meta_title')
                                    ->label('Meta Title')
                                    ->maxLength(60)
                                    ->helperText('Up to 60 characters recommended'),

                                Textarea::make('meta_description')
                                    ->label('Meta Description')
                                    ->rows(2)
                                    ->maxLength(160)
                                    ->helperText('Up to 160 characters recommended')
                            ]),
                    ])->columnSpanFull()
            ]);
    }

    protected static function recalculateDiscount(Get $get, Set $set): void
    {
        $price    = floatval($get('price'));
        $oldPrice = floatval($get('old_price'));

        if ($oldPrice > 0 && $price > 0 && $oldPrice > $price) {
            $discount = round((($oldPrice - $price) / $oldPrice) * 100);
            $set('discount', $discount);
        } else {
            $set('discount', null);
        }
    }
}
