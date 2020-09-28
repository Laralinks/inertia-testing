<?php

namespace Database\Seeders;

use App\Models\Pastelanguage;
use Illuminate\Database\Seeder;

class PastelanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public $data = [
        'Php' => 'php',
        'Html' => 'html',
        'Css' => 'css',
        'Javascript' => 'javascript'
    ];

    public function run()
    {
        foreach($this->data as $name => $slug) {
            Pastelanguage::create(['name' => $name, 'slug' => $slug])->save();
        }

    }
}
