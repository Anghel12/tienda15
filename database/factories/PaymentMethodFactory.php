<?php

namespace Database\Factories;

use App\Models\PaymentMethod;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentMethodFactory extends Factory
{
    protected $model = PaymentMethod::class;

    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['BCP', 'PayPal', 'Stripe']),
            'slug' => $this->faker->randomElement(['BCP', 'PayPal', 'Stripe']),
            'description' => $this->faker->sentence(),
            'logo' => $this->faker->imageUrl(),
            'enabled' => $this->faker->boolean(),
        ];
    }
}
