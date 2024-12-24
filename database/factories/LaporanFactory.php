<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Desa;
use App\Models\Laporan;

class LaporanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Laporan::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'kode_laporan' => $this->faker->word(),
            'timestamp' => $this->faker->dateTime(),
            'isi_laporan' => $this->faker->word(),
            'photo_bukti' => $this->faker->word(),
            'status_laporan' => $this->faker->word(),
            'kode_user' => $this->faker->numberBetween(-10000, 10000),
            'kode_desa' => $this->faker->numberBetween(-10000, 10000),
            'desa_id' => Desa::factory(),
            'judul' => $this->faker->word(),
            'deskripsi' => $this->faker->word(),
            'tanggal' => $this->faker->dateTime(),
        ];
    }
}
