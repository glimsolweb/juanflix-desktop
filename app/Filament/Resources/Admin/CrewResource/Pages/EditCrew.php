<?php

namespace App\Filament\Resources\Admin\CrewResource\Pages;

use App\Filament\Resources\Admin\CrewResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCrew extends EditRecord
{
    protected static string $resource = CrewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
