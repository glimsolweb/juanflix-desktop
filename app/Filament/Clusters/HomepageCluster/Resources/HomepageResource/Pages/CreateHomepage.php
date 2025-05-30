<?php

namespace App\Filament\Clusters\HomepageCluster\Resources\HomepageResource\Pages;

use App\Filament\Clusters\HomepageCluster\Resources\HomepageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHomepage extends CreateRecord
{
    protected static string $resource = HomepageResource::class;
}
