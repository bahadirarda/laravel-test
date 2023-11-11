<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProductResource\RelationManagers\CategoriesRelationManager;
use App\Filament\Resources\ProductResource\RelationManagers\TagsRelationManager;
use Filament\Forms\Components\BelongsToManyCheckboxList;
use Filament\Forms\Components\BelongsToManyMultiSelect;



class ProductResource extends Resource
{


    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                Textarea::make('description'),
                TextInput::make('price')->numeric()->required(),
                // FileUpload::make('image')
                //     ->image()
                //     ->disk('public')
                //     ->directory('images/products'),

                // Kategorileri seçmek için bir bileşen
                BelongsToManyMultiSelect::make('categories')
                    ->relationship('categories', 'name'),
                // 'name' kategori isimlerini gösterir

                // Etiketleri seçmek için bir bileşen
                BelongsToManyMultiSelect::make('tags')
                    ->relationship('tags', 'name'),
                // 'name' etiket isimlerini gösterir
            ]);




    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable(),
                TextColumn::make('description')->limit(50),
                TextColumn::make('price')->money('try'),
                //ImageColumn::make('image')->disk('public')->sortable(),
            ])
            ->filters([
                // Filters can be added here
            ])
            ->actions([
                EditAction::make(),
                ViewAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
                // Burası düzeltildi
            ]);
    }

    // public static function getRelations(): array
    // {

    //     return [
    //         CategoriesRelationManager::class,
    //         TagsRelationManager::class,
    //     ];
    // }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
