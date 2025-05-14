<?php

namespace App\Filament\Clusters\ProfileCluster\Resources\Admin\ProfileIconResource\Pages;

use App\Filament\Clusters\ProfileCluster\Resources\Admin\ProfileIconResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProfileIcons extends ListRecords
{
    protected static string $resource = ProfileIconResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
