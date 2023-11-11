<?php

// app/Filament/Resources/CategoryResource.php
namespace App\Filament\Resources;

use App\Models\Category;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\CategoryResource\Pages;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')->required()->label('Category Name'),
            // Diğer form alanları...
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name')->label('Category Name')->searchable(),
            // Diğer tablo sütunları...
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }


    // getPages ve getRelations metodları gerektiğinde ekleyebilirsiniz.
}