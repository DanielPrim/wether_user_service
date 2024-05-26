<?php

namespace App\Domain\Users\Models\Tests\Factory;

use App\Domain\Users\Models\Users;
use Ensi\LaravelTestFactories\BaseModelFactory;

class UsersFactory extends BaseModelFactory
{
    protected $model = Users::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->title(),
            'email' => $this->faker->title(),
            'phone_number' => $this->faker->title(),
            'region' => $this->faker->title(),
        ];
    }
}