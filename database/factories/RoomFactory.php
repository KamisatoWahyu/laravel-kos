<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Room::class;

    public function definition()
    {
        $count = Room::count() + 1;
        $id = 'A' . str_pad($count, 3, '0', STR_PAD_LEFT);

        return [
            'id' => $id,
            'room_number' => $this->faker->unique()->numberBetween(100, 999),
            'room_type' => $this->faker->randomElement(['Kosongan', 'Furniture']),
            'room_facility' => $this->faker->sentence(3),
            'price' => $this->faker->randomFloat(2, 100000, 5000000),
            'status' => $this->faker->randomElement(['Ada', 'Terisi', 'Perbaikan']),
        ];
    }
}
