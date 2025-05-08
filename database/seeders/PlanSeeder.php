<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $plans = [
            [
                'name' => 'STANDARD MONTHLY',
                'price' => '49.00',
                'features' => [
                    'Access' => 'Unlimited access to all premium films, except Pay-Per-View films',
                    'Devices your household can watch at the same time' => '1 device',
                    'Download devices' => '1 device',
                    'Profiles' => '1 profile'
                ],
                'enabled' => true,
                'duration' => 'MONTHLY'
            ],
            [
                'name' => 'STANDARD YEARLY',
                'price' => '249.00',
                'features' => [
                    'Access' => 'Unlimited access to all premium films, except Pay-Per-View films',
                    'Devices your household can watch at the same time' => '1 device',
                    'Download devices' => '1 device',
                    'Profiles' => '1 profile',
                ],
                'enabled' => true,
                'duration' => 'YEARLY'
            ],
            [
                'name' => 'FAMILY MONTHLY',
                'price' => '99.00',
                'features' => [
                    'Access' => 'Unlimited access to all premium films, except Pay-Per-View films, for multiple users',
                    'Devices your household can watch at the same time' => '2 device',
                    'Download devices' => '-',
                    'Profiles' => '2 profile'
                ],
                'enabled' => true,
                'duration' => 'MONTHLY'
            ],
            [
                'name' => 'FAMILY YEARLY',
                'price' => '499.00',
                'features' => [
                    'Access' => 'Unlimited access to all premium films, except Pay-Per-View films, for multiple users',
                    'Devices your household can watch at the same time' => '5 device',
                    'Download devices' => '-',
                    'Profiles' => '5 profile'
                ],
                'enabled' => true,
                'duration' => 'YEARLY'
            ],
        ];

        foreach ($plans as $key => $plan) {
            # code...
            Plan::create($plan);
        }
    }
}
