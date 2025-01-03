<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Desa;
use App\Models\Indikator;

class IndikatorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Indikator::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'kode_indikator' => $this->faker->word(),
            'nama_indikator' => $this->faker->word(),
            'deskripsi' => $this->faker->text(),
            'persentase' => $this->faker->numberBetween(-10000, 10000), # IF(SUM(NilaiAllSub)>0,(SUMIF(NilaiAllSub,">0",PersenAllSub)/3),0)
            'tahun' => $this->faker->numberBetween(-10000, 10000),
            'kode_desa' => $this->faker->numberBetween(-10000, 10000),
            'desa_id' => Desa::factory(),
            'timestamp' => $this->faker->dateTime(),
        ];
    }
}
