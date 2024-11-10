<?php

namespace Database\Factories;

use App\Models\Domain\Shared\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OrganizationFactory extends Factory
{
    protected $model = Organization::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $name = $this->faker->company,
            'slug' => Str::slug($name),
            'logo' => $this->faker->imageUrl(word: $name),
        ];
    }
}
