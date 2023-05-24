<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Board>
 */
class BoardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $date = $this->faker->dateTimeBetween('-1 years');
        return [
            'category' => $this->faker->randomNumber(1)       //카테고리 값을 지정하면 설정한 값만 계속해서 집어 넣게 된다. 
            ,'btitle' => $this->faker->realText(100)
            ,'bcontent' => $this->faker->realText(2000)
            ,'created_at' => $date
            ,'updated_at' => $date
        ];
    }
}
