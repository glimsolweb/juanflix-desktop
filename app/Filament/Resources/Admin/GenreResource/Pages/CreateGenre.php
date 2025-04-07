<?php

namespace App\Filament\Resources\Admin\GenreResource\Pages;

use App\Filament\Resources\Admin\GenreResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGenre extends CreateRecord
{
    protected static string $resource = GenreResource::class;
}
