<?php

namespace App\Filament\Resources\Menus\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\Page;

class MenuForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Menu')->schema([
                    TextInput::make('title')
                        ->label('Title')
                        ->required(),

                    Select::make('location')
                        ->label('Location')
                        ->options([
                            'header'   => 'Header',
                            'service' => 'Service',
                            'unsere_produkte' => 'Unsere Produkte',
                            'rechtliches' => 'Rechtliches',
                        ])
                        ->unique(ignoreRecord: true)
                        ->required(),
                ]),

                Section::make('Menu items')->schema([
                    Repeater::make('items')
                        ->relationship()
                        ->orderColumn('sort')
                        ->schema([
                            TextInput::make('title')
                                ->label('Title')
                                ->required(),

                            Select::make('page_id')
                                ->label('Page')
                                ->options(
                                    Page::query()->where('is_active', true)->pluck('title', 'id')
                                )
                                ->searchable()
                                ->nullable(),

                            TextInput::make('url')
                                ->label('Or custom URL')
                                ->url()
                                ->nullable(),

                            Select::make('target')
                                ->options([
                                    '_self'  => 'Same tab',
                                    '_blank' => 'New tab',
                                ])->default('_self'),

                            Select::make('parent_id')
                                ->label('Parent item')
                                ->options(fn (Get $get) => MenuItem::query()
                                    ->whereHas('menu', fn($q) => $q->where('location', 'header'))
                                    ->pluck('title', 'id'))
                                ->searchable()
                                ->nullable(),

                            Toggle::make('is_active')->default(true),
                        ])
                        ->itemLabel(fn (array $state): ?string => $state['title'] ?? 'New item')
                        ->reorderable('sort')
                        ->collapsible()
                        ->collapsed()
                        ->columnSpanFull()
                ])
            ]);
    }
}
