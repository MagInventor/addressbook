<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AddressBookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $faker->name(),
            'email' => $faker->email,
            'phone' => $faker->el64PhoneNumber,
            'address' => $faker->address,
            'created_at'=> $faker->dateTime(),
            'update_at'=> $faker->dateTime(),
        ];
    }
}
