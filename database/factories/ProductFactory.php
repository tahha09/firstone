<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition()
    {
        $categories = ['Electronics','Clothing','Books','Home','Sports','Beauty','Toys'];

        return [
            'name' => $this->faker->productName ?? $this->faker->words(3, true),
            'description' => $this->faker->paragraphs(2, true),
            'price' => $this->faker->randomFloat(2, 10, 999.99),
            'category' => $this->faker->randomElement($categories),
            // image: we can generate placeholder filenames (for seeder you may also copy sample images)
            'image' => null,
            'stock_quantity' => $this->faker->numberBetween(0, 100),
            'is_active' => $this->faker->boolean(80), // 80% true
        ];
    }
}
