<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory
 */
class AgentFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $code = implode('', ['BDO-000', fake()->unique()->numberBetween(1, 5)]);
        return [
            'code' => $code,
            'password' => static::$password ??= Hash::make('password'),
            'name' => fake()->company(),
            'owner_name' => implode(' ', [fake()->firstName(), fake()->lastName()]),
            'email' => fake()->unique()->safeEmail(),
            'phone_number' => preg_replace('/[^0-9]/', '', fake()->phoneNumber()),
            'route' => implode('', ['RUTE-A', fake()->numberBetween(1, 3)]),
            'address' => fake()->address(),
            'description' => fake()->realText(),
            'avatar_url' => fake()->imageUrl(400, 400, '400x400', false),
            'remember_token' => Str::random(10)
        ];
    }

    /**
     * Define custom factory configuration.
     *
     * @return Factory
     */
    public function configure(): Factory
    {
        return $this->sequence(
            ['code' => 'BDO-0001'],
            ['code' => 'BDO-0002'],
            ['code' => 'BDO-0003'],
            ['code' => 'BDO-0004'],
            ['code' => 'BDO-0005']
        );
    }
}
