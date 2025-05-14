<?php

namespace App\Filament\Clusters\ProfileCluster\Resources\Admin\ProfileIconResource\Pages;

use App\Filament\Clusters\ProfileCluster\Resources\Admin\ProfileIconResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProfileIcon extends EditRecord
{
    protected static string $resource = ProfileIconResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
