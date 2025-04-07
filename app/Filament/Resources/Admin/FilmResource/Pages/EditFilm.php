<?php

namespace App\Filament\Resources\Admin\FilmResource\Pages;

use App\Filament\Resources\Admin\FilmResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFilm extends EditRecord
{
    protected static string $resource = FilmResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
