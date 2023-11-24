<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Setor;
use App\Models\leituraSensor;

class LeituraSensorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LeituraSensor::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'cod_sensor' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'valor' => $this->faker->randomFloat(0, 0, 9999999999.),
            'setor_id' => Setor::factory(),
            'grandeza' => $this->faker->regexify('[A-Za-z0-9]{10}'),
        ];
    }
}
