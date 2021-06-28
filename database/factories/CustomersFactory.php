<?php

namespace Database\Factories;

use App\Models\Customers;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customers::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id' => $this->faker->regexify('[A-Z]{8}'),
            'company_name' => $this->faker->company,
            'contact_name' => $this->faker->name,
            'contact_title' => $this->faker->jobTitle,
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'postal_code' => $this->faker->regexify('[0-8]{7}'),
            'country' => $this->faker->country,
            'phone' => $this->faker->phoneNumber
        ];
    }
}
