<?php

namespace Database\Seeders;

use App\Models\Paste;
use App\Models\Pastelanguage;
use App\Models\User;
use Database\Factories\PasteFactory;
use Illuminate\Database\Seeder;

class PasteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paste::factory()->times(50)->create();

    }
}
