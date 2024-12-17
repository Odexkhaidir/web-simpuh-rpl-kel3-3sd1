<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Desa;
use App\Models\Kecamatan;

class DesaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Desa::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'kode_desa' => $this->faker->word(),
            'nama_desa' => $this->faker->word(),
            'kode_kecamatan' => $this->faker->numberBetween(-10000, 10000),
            'kecamatan_id' => Kecamatan::factory(),
        ];
    }
}
