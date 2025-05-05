<?php

namespace App\Filament\Resources\Admin\CrewResource\Pages;

use App\Filament\Resources\Admin\CrewResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCrews extends ListRecords
{
    protected static string $resource = CrewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
