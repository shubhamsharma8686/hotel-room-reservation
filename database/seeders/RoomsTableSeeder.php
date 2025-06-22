<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        // Populate floors 1-9 (10 rooms each)
        for ($floor = 1; $floor <= 9; $floor++) {
            for ($room = 1; $room <= 10; $room++) {
                DB::table('rooms')->insert([
                    'floor' => $floor,
                    'room_number' => $floor * 100 + $room,
                    'status' => 'available',
                ]);
            }
        }

        // Populate floor 10 (7 rooms)
        for ($room = 1; $room <= 7; $room++) {
            DB::table('rooms')->insert([
                'floor' => 10,
                'room_number' => 1000 + $room,
                'status' => 'available',
            ]);
        }
    }
}
