<?php

namespace App\Filament\Clusters\HomepageCluster\Resources\HomepageResource\Pages;

use App\Filament\Clusters\HomepageCluster\Resources\HomepageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomepages extends ListRecords
{
    protected static string $resource = HomepageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
