<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Shop;
class ShopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shop::factory()->times(20)->create();
    }
}
