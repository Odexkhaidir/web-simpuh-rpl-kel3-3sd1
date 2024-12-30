<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Desa;
use App\Models\SaranPenanganan;

class SaranPenangananFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SaranPenanganan::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'kode_saran_penanganan' => $this->faker->word(),
            'saran_penanganan' => $this->faker->text(),
            'kode_desa' => $this->faker->string(-10000, 10000),
            'desa_id' => Desa::factory(),
        ];
    }
}
