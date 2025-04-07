<?php

namespace App\Filament\Resources\Admin\FilmResource\Pages;

use App\Filament\Resources\Admin\FilmResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFilm extends CreateRecord
{
    protected static string $resource = FilmResource::class;
}
