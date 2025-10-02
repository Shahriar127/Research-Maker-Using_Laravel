<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Use a combination of a word and a random number to ensure uniqueness and avoid overflow
        $word = $this->faker->word();
        $number = $this->faker->unique()->numberBetween(1, 1000000);
        return [
            'name' => $word . '-' . $number,
            'slug' => $this->faker->unique()->slug()
        ];
    }
}
