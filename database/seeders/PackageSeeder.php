<?php

namespace Database\Seeders;

use App\Models\Currency;
use App\Models\Package;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $packages = [
            [
                'name' => "Soulmate Connection",
                'price' => "6500",
                'astrologer_id' => User::astrologer()->get()->random()->id,
                'currency_id' => Currency::get()->random()->id
            ],
            [
                'name' => "Hidden Truth",
                'price' => "6500",
                'astrologer_id' => User::astrologer()->get()->random()->id,
                'currency_id' => Currency::get()->random()->id
            ],
            [
                'name' => "Zodiac Signs (1 year)",
                'price' => "8500",
                'astrologer_id' => User::astrologer()->get()->random()->id,
                'currency_id' => Currency::get()->random()->id
            ],
            [
                'name' => "Who has crush on me?",
                'price' => "7000",
                'astrologer_id' => User::astrologer()->get()->random()->id,
                'currency_id' => Currency::get()->random()->id
            ],
            [
                'name' => 'Your Love Challenge',
                'price' => "11000",
                'astrologer_id' => User::astrologer()->get()->random()->id,
                'currency_id' => Currency::get()->random()->id
            ],
            [
                'name' => "Third Party Package",
                'price' => "15000",
                'astrologer_id' => User::astrologer()->get()->random()->id,
                'currency_id' => Currency::get()->random()->id
            ]
        ];

        foreach ($packages as $package) {
            Package::firstOrCreate([
                'slug' => Str::slug($package['name'])
            ], [
                'slug' => Str::slug($package['name']),
                'name' => $package['name'],
                'price' => $package['price'],
                'astrologer_id' => $package['astrologer_id']
            ]);
        }
    }
}
