<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $res = Http::get('https://countriesnow.space/api/v0.1/countries/capital');
        $countries = json_decode($res->body());
        foreach ($countries->data as $solomon => $blessing) {
            Country::create([
                'name' => $blessing->name
            ]);
        }
    }
}
