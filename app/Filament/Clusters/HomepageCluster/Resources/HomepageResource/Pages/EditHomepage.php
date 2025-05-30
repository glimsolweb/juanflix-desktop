<?php

namespace App\Filament\Clusters\HomepageCluster\Resources\HomepageResource\Pages;

use App\Filament\Clusters\HomepageCluster\Resources\HomepageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomepage extends EditRecord
{
    protected static string $resource = HomepageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
