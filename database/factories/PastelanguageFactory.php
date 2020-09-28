<?php

namespace Database\Factories;

use App\Models\Pastelanguage;
use Illuminate\Database\Eloquent\Factories\Factory;

class PastelanguageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pastelanguage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(10),
            'slug' => $this->faker->slug
        ];
    }
}
