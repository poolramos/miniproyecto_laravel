<?php

namespace Database\Factories;

// database/factories/AsistenciaFactory.php

use Illuminate\Database\Eloquent\Factories\Factory;

class AsistenciaFactory extends Factory
{
    protected $model = App\Models\Asistencia::class;

    public function definition()
    {
        return [
            'alumno_id' => App\Models\Alumno::factory(),
            'fecha' => $this->faker->date,
            'asistencia' => $this->faker->randomElement(['A', 'T', 'F']),
        ];
    }
}

