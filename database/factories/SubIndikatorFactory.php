<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Indikator;
use App\Models\SubIndikator;

class SubIndikatorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SubIndikator::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'kode_sub_indikator' => $this->faker->word(),
            'nama_sub_indikator' => $this->faker->word(),
            'nilai' => $this->faker->numberBetween(-10000, 10000),
            'satuan' => $this->faker->word(),
            'persentase' => $this->faker->numberBetween(-10000, 10000),
            'versi' => $this->faker->word(),
            'kode_indikator' => $this->faker->numberBetween(-10000, 10000),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
            'indikator_id' => Indikator::factory(),
        ];
    }
}
