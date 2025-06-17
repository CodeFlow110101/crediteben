<?php

namespace App\Filament\Resources\BlogPageResource\Pages;

use App\Filament\Resources\BlogPageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBlogPages extends ListRecords
{
    protected static string $resource = BlogPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
