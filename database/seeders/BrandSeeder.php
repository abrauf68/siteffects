<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Grand City Faisalabad',
                'logo' => 'frontAssets/images/brands/client-logo-1.webp',
                'is_featured' => '1',
            ],
            [
                'name' => 'WAMS',
                'logo' => 'frontAssets/images/brands/client-logo-2.webp',
                'is_featured' => '1',
            ],
            [
                'name' => 'Youexcel Training Institute',
                'logo' => 'frontAssets/images/brands/client-logo-3.webp',
                'is_featured' => '1',
            ],
            [
                'name' => 'Amlux Travel Services',
                'logo' => 'frontAssets/images/brands/client-logo-4.webp',
                'is_featured' => '1',
            ],
            [
                'name' => 'Kifayat Publishers',
                'logo' => 'frontAssets/images/brands/client-logo-5.webp',
                'is_featured' => '1',
            ],
            [
                'name' => 'SANYA Motors',
                'logo' => 'frontAssets/images/brands/client-logo-6.webp',
                'is_featured' => '1',
            ],
            [
                'name' => 'Hikayat Perfumes',
                'logo' => 'frontAssets/images/brands/client-logo-7.webp',
                'is_featured' => '1',
            ],
        ];

        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}
