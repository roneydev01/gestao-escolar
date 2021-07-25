<?php

namespace Database\Factories;

use App\Models\Aluno;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlunoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Aluno::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome'            => $this->faker->name(),
            'telefone'        => $this->faker->bothify('##9########'),
            'email'           => $this->faker->unique()->safeEmail(),
            'data_nascimento' => $this->faker->date(),
            'genero'          => $this->faker->randomElements(['Masculino','Feminino'])[0]
        ];
    }
}
