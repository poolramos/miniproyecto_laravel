<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    
    protected $model = App\Models\Curso::class;

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word,
            'codigo' => $this->faker->unique()->word,
        ];
    }
}
