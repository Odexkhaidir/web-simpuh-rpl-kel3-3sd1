<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Indikator;
use App\Models\ParameterIndikator;

class ParameterIndikatorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ParameterIndikator::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'kode_parameter_indikator' => $this->faker->word(),
            'nama_parameter_indikator' => $this->faker->word(),
            'nilai' => $this->faker->numberBetween(-10000, 10000),
            'satuan' => $this->faker->word(),
            'kode_indikator' => $this->faker->numberBetween(-10000, 10000),
            'indikator_id' => Indikator::factory(),
        ];
    }
}
