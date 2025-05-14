<?php

namespace App\Filament\Clusters;

use Filament\Clusters\Cluster;

class ProfileCluster extends Cluster
{
    protected static ?string $navigationIcon = 'heroicon-o-user-circle';
    protected static ?string $navigationLabel = 'Profile Settings';
}
