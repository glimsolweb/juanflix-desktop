<?php

namespace App\Filament\Resources\Admin\FilmResource\Pages;

use App\Filament\Resources\Admin\FilmResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFilms extends ListRecords
{
    protected static string $resource = FilmResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
