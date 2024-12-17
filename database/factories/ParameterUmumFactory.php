<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Desa;
use App\Models\ParameterUmum;

class ParameterUmumFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ParameterUmum::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'kode_parameter_umum' => $this->faker->word(),
            'nama_parameter_umum' => $this->faker->word(),
            'nilai' => $this->faker->numberBetween(-10000, 10000),
            'satuan' => $this->faker->word(),
            'tahun' => $this->faker->numberBetween(-10000, 10000),
            'kode_desa' => $this->faker->numberBetween(-10000, 10000),
            'desa_id' => Desa::factory(),
        ];
    }
}
