<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Desa;
use App\Models\OutputKekumuhan;

class OutputKekumuhanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OutputKekumuhan::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'kode_output' => $this->faker->word(),
            'indeks_kumuh' => $this->faker->numberBetween(-10000, 10000),
            'status_kumuh' => $this->faker->word(),
            'kontribusi_penanganan' => $this->faker->randomFloat(0, 0, 9999999999.),
            'tahun' => $this->faker->numberBetween(-10000, 10000),
            'kode_desa' => $this->faker->numberBetween(-10000, 10000),
            'desa_id' => Desa::factory(),
        ];
    }
}
