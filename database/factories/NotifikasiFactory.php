<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Notifikasi;

class NotifikasiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Notifikasi::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'kode_notifikasi' => $this->faker->word(),
            'timestamp' => $this->faker->dateTime(),
            'detail_notifikasi' => $this->faker->word(),
            'kode_user' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
