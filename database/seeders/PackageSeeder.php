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
        $th_currency = Currency::where('slug', 'thb')->first();
        $mm_currency = Currency::where('slug', 'mmk')->first();
        $packages = [
            [
                'name' => "Soulmate Connection",
                'price' => "12000",
                'th_price' => '110',
                'astrologer_id' => User::astrologer()->get()->random()->id,
                'currency_id' => $mm_currency->id,
                'th_currency_id' => $th_currency->id
            ],
            [
                'name' => "Hidden Truth",
                'price' => "10000",
                'th_price' => '100',
                'astrologer_id' => User::astrologer()->get()->random()->id,
                'currency_id' => $mm_currency->id,
                'th_currency_id' => $th_currency->id
            ],
            [
                'name' => "Zodiac Signs (1 year)",
                'price' => "10000",
                'th_price' => '100',
                'astrologer_id' => User::astrologer()->get()->random()->id,
                'currency_id' => $mm_currency->id,
                'th_currency_id' => $th_currency->id
            ],
            [
                'name' => "Who has crush on me?",
                'price' => "14000",
                'th_price' => "120",
                'astrologer_id' => User::astrologer()->get()->random()->id,
                'currency_id' => $mm_currency->id,
                'th_currency_id' => $th_currency->id
            ],
            [
                'name' => 'Your Love Challenge',
                'price' => "11000",
                'th_price' => "100",
                'astrologer_id' => User::astrologer()->get()->random()->id,
                'currency_id' => $mm_currency->id,
                'th_currency_id' => $th_currency->id
            ],
            [
                'name' => "Third Party Package",
                'price' => "12000",
                'th_price' => "120",
                'astrologer_id' => User::astrologer()->get()->random()->id,
                'currency_id' => $mm_currency->id,
                'th_currency_id' => $th_currency->id
            ]
        ];

        foreach ($packages as $package) {
            Package::firstOrCreate([
                'slug' => Str::slug($package['name'])
            ], [
                'slug' => Str::slug($package['name']),
                'name' => $package['name'],
                'price' => $package['price'],
                'th_price' => $package['th_price'],
                'currency_id' => $package['currency_id'],
                'th_currency_id' => $package['th_currency_id'],
                'astrologer_id' => $package['astrologer_id']
            ]);
        }
    }
}
