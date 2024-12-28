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
            'volume' => $this->faker->numberBetween(0, 10000),
            'satuan' => $this->faker->word(),
            'persentase' => $this->faker->numberBetween(-10000, 10000), # (Ketidaksesuaian/Jumlah bangunan) *100
            'nilai' => $this->faker->numberBetween(0, 5),               # 24.995<Persen<50.995 => 1, 50.995<persen<75.995 => 3, persen>=75.995 => 5 selainnya 0
            'versi' => $this->faker->word(),
            'kode_indikator' => $this->faker->numberBetween(-10000, 10000),
            'indikator_id' => Indikator::factory(),
            'timestamp' => $this->faker->dateTime(),
        ];
    }
}
