<?php

namespace App\Filament\Resources\Actions\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ActionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->columnSpanFull(),

                Textarea::make('description')
                    ->label('Description')
                    ->rows(2)
                    ->columnSpanFull(),

                TextInput::make('url')
                    ->label('URL')
                    ->url()
                    ->nullable(),

                TextInput::make('sort')
                    ->label('Sort')
                    ->numeric()
                    ->default(0)
                    ->required(),

                FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->disk('public')
                    ->directory('actions')
                    ->visibility('public')
                    ->columnSpanFull()
                    ->nullable(),

                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true)
            ]);
    }
}
