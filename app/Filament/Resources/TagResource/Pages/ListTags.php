<?php

namespace App\Filament\Resources\TagResource\Pages;

use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\TagResource;

class ListTags extends ListRecords
{
    protected static string $resource = TagResource::class;
}