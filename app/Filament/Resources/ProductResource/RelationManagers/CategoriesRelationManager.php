<?php

namespace App\Filament\Resources\ProductResource\RelationManagers;

use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\BelongsToManyRelationManager;
use Filament\Resources\Table;
use Filament\Tables\Columns\TextColumn;

class CategoriesRelationManager extends BelongsToManyRelationManager
{
    protected static string $relationship = 'categories';

    // form metodunu static olarak tanımla
    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')
                ->required()
                ->label('Category Name'),
                TextInput::make('slug')
                ->required()
                ->label('Slug for SEO'),
        ]);
    }

    // table metodunu static olarak tanımla
    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name')
                ->label('Name')
                ->searchable()
                ->sortable(),
            // Diğer tablo sütunları...
        ]);
    }
}
