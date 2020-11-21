<?php


namespace Database\Factories;

use App\Models\Link;
use Illuminate\Database\Eloquent\Factories\Factory;

class LinkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    // protected $model = Link::class;
    protected $model = \App\Models\Link::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $factory->define(Link::class, function (Faker $faker) {
            return [
                'title' => substr($this->faker->sentence(2), 0, -1),
                'url' => $this->faker->url,
                'description' => $this->faker->paragraph,
            ];
        // });
    }
}
