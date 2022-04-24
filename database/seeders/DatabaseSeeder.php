<?php

namespace Database\Seeders;

use App\Models\Administrator;
use App\Models\Event;
use App\Models\EventType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Administrator::create([
            'name' => 'Marcel',
            'email' => 'example@email.com',
            'password' => Hash::make('1234'),
        ]);

        EventType::create([
            'name' => 'Newcomer',
            'expects' => [
                ['profile_id', 'Profile'],
            ],
        ]);
        EventType::create([
            'name' => 'Cpmpetition',
            'expects' => [],
        ]);

        Event::create([
            'name' => 'Test',
            'slug' => 'test',
            'event_type_id' => 1,
            'description' => 'Short desc.',
            'content' => null,
            'data' => [
                'profile_id' => 1,
            ],
            'start_date' => now()->subYears(5),
            'visible' => 1,
        ]);

        Event::create([
            'name' => 'Test 2',
            'slug' => 'test-2',
            'event_type_id' => 1,
            'description' => 'Short desc 123.',
            'content' => null,
            'data' => [
                'profile_id' => 1,
            ],
            'start_date' => now()->subYear(),
            'visible' => 1,
        ]);
    }
}
