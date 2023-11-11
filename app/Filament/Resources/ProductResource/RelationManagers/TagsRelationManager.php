<?php

namespace App\Filament\Resources\ProductResource\RelationManagers;

use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\BelongsToManyRelationManager;
use Filament\Resources\Table;
use Filament\Tables\Columns\TextColumn;

class TagsRelationManager extends BelongsToManyRelationManager
{
    protected static string $relationship = 'tags';

    // static olmayan bir metod
    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')
                ->required()
                ->label('Tag Name'),
                TextInput::make('slug')
                ->required()
                ->label('Slug for SEO'),
        ]);
    }


    // static bir metod
    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name')
                ->label('Name')
                ->searchable()
                ->sortable(),
            // ... diğer tablo sütunları
        ]);
    }
}
