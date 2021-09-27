<?php

namespace Database\Factories;

use App\Models\pegawai;
use Illuminate\Database\Eloquent\Factories\Factory;

class PegawaiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = pegawai::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'tanggal_lahir' => $this->faker->date(),
            'nomor_hp' => $this->faker->numberBetween(),
        ];
    }
}
