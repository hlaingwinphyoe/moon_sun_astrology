<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = [
            'sex' => ['ကျား', 'မ'],
            'age' => ['ရက်', 'လ', 'နှစ်'],
            'payment-type' => ['Cash', 'Bank Transfer', 'KPay', 'CBPay', 'AYAPay', 'Wave Money'],
            'transaction' => ['ဝင်', 'ထွက်'],
            'status' => ['ဘွတ်ကင်ယူပြီး', 'စောင်းဆိုင်းဆဲ', 'ပြီးဆုံး'],
            'order' => ['အော်ဒါတင်ပြီး', 'အော်ဒါရရှိပြီး'],
            'payment' => ['မပေးချေရသေးပါ', 'ပေးပြီး'],
            'days' => ['တနင်္ဂနွေ', 'တနင်္လာ', 'အင်္ဂါ', 'ဗုဒ္ဓဟူး', 'ကြာသပတေး', 'သောကြာ', 'စနေ'],
        ];

        foreach ($names as $index => $name_ary) {
            foreach ($name_ary as $name) {
                $slug = Str::slug($name);
                $status = Status::create([
                    'slug' =>  $slug,
                    'name' => $name,
                    'type' => $index
                ]);
            }
        }
    }
}
