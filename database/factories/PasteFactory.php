<?php

namespace Database\Factories;

use App\Models\Paste;
use App\Models\Pastelanguage;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Mockery\Mock;

class PasteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Paste::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'pastelanguage_id' => Pastelanguage::factory(),
            'title' => $this->faker->sentence,
            'description' => $this->faker->sentence(2),
            'code' => $this->faker->paragraph(2)
        ];
    }
}
