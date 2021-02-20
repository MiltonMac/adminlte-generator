<?php

namespace Database\Factories;

use App\Models\docentes;
use Illuminate\Database\Eloquent\Factories\Factory;

class docentesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = docentes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cedula' => $this->faker->word,
        'nombre' => $this->faker->word,
        'apellido' => $this->faker->word,
        'correo' => $this->faker->word,
        'celular' => $this->faker->word,
        'estado' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
