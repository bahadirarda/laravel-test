<?php

// app/Filament/Resources/TagResource.php
namespace App\Filament\Resources;

use App\Models\Tag;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\TagResource\Pages;

class TagResource extends Resource
{
    protected static ?string $model = Tag::class;

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')->required()->label('Tag Name'),
            // Diğer form alanları...
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name')->label('Tag Name')->searchable(),
            // Diğer tablo sütunları...
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTags::route('/'),
            'create' => Pages\CreateTag::route('/create'),
            'edit' => Pages\EditTag::route('/{record}/edit'),
        ];
    }

    // getPages ve getRelations metodları gerektiğinde ekleyebilirsiniz.
}