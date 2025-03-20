<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tenant>
 */
class TenantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Ambil hanya kamar yang statusnya 'Terisi'
        $room = Room::where('status', 'Terisi')->inRandomOrder()->first();

        return [
            'id' => $this->faker->unique()->numerify('T###'), // ID custom
            'room_id' => $room ? $room->id : null, // Jika tidak ada room, biarkan null
            'name' => $this->faker->name(),
            'handphone_number' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'nik' => $this->faker->numerify('################'),
            'profile_photo' => null,
            'ktp_image' => null,
            'check_in_date' => $this->faker->date(),
        ];
    }
}
