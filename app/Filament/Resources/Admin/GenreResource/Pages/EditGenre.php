<?php

namespace App\Filament\Resources\Admin\GenreResource\Pages;

use App\Filament\Resources\Admin\GenreResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGenre extends EditRecord
{
    protected static string $resource = GenreResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
