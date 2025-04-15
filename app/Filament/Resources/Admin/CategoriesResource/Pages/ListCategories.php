<?php

namespace App\Filament\Resources\Admin\CategoriesResource\Pages;

use App\Filament\Resources\Admin\CategoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategories extends ListRecords
{
    protected static string $resource = CategoriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
