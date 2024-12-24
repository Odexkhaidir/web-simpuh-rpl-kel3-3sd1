<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Desa;
use App\Models\PendataanRumahTangga;

class PendataanRumahTanggaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PendataanRumahTangga::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nama_desa' => $this->faker->word(),
            'nama_kecamatan' => $this->faker->word(),
            'desa_id' => Desa::factory(),
            'timestamp' => $this->faker->dateTime(),
            'kode_rt' => $this->faker->word(),
            'alamat' => $this->faker->word(),
            'kepala_keluarga' => $this->faker->word(),
            'jumlah_keluarga' => $this->faker->numberBetween(0, 100),
        ];
    }
}
