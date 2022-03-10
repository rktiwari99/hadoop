<?php

namespace Database\Factories;

use App\Models\cost_estimation;
use Illuminate\Database\Eloquent\Factories\Factory;

class CostestimationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = cost_estimation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name, 
            'mobile' => $this->faker->mobile, 
            'email' => $this->faker->email, 
            'catagory' => $this->faker->catagory, 
            'sub_catagory' => $this->faker->sub_catagory, 
            'details' => $this->faker->details, 
            'status' => $this->faker->status,
        ];
        $cost_estimation = cost_estimation::factory()->create();
    }

    
}
