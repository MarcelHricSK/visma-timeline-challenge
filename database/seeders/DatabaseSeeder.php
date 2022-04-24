<?php

namespace Database\Seeders;

use App\Models\Administrator;
use App\Models\Event;
use App\Models\EventType;
use App\Models\Profile;
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
            'name' => 'Admin',
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
            'name' => 'Competition/Tournament',
            'expects' => [],
        ]);
        EventType::create([
            'name' => 'Teambuilding',
            'expects' => [],
        ]);

        Event::create([
            'name' => 'New teammate: Pavel',
            'slug' => 'test',
            'event_type_id' => 1,
            'description' => 'He is a developer',
            'content' => '<h2><strong>Lorem ipsum dolor sit ame</strong></h2>
                            <p>consectetur adipiscing elit. Nullam efficitur pharetra nibh, at venenatis ligula consectetur commodo. Mauris laoreet augue eget nulla commodo vulputate. Ut accumsan varius pulvinar. Donec ut lorem nec ante tempus euismod quis ut erat. Praesent vulputate ligula eu felis molestie consectetur. Nunc et ultrices nisi. Nam vitae ante sit amet neque lacinia fringilla a et dolor.</p>
                            <p>&nbsp;</p>
                            <table style="border-collapse: collapse; width: 99.963%; height: 67.2px;" border="1"><colgroup><col style="width: 14.2329%;"><col style="width: 14.2329%;"><col style="width: 14.2329%;"><col style="width: 14.2329%;"><col style="width: 14.2329%;"><col style="width: 14.2329%;"><col style="width: 14.2329%;"></colgroup>
                            <thead>
                            <tr style="height: 22.4px;">
                            <td style="height: 22.4px;">&nbsp;</td>
                            <td style="height: 22.4px;">Team 1</td>
                            <td style="height: 22.4px;">Team 2</td>
                            <td style="height: 22.4px;">Team 3</td>
                            <td style="height: 22.4px;">Team 4</td>
                            <td style="height: 22.4px;">Team 5</td>
                            <td style="height: 22.4px;">Team 6</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr style="height: 22.4px;">
                            <td style="height: 22.4px;">1. round</td>
                            <td style="height: 22.4px;">&nbsp;</td>
                            <td style="height: 22.4px;">&nbsp;</td>
                            <td style="height: 22.4px;">&nbsp;</td>
                            <td style="height: 22.4px;">&nbsp;</td>
                            <td style="height: 22.4px;">&nbsp;</td>
                            <td style="height: 22.4px;">&nbsp;</td>
                            </tr>
                            <tr style="height: 22.4px;">
                            <td style="height: 22.4px;">2.round</td>
                            <td style="height: 22.4px;">&nbsp;</td>
                            <td style="height: 22.4px;">&nbsp;</td>
                            <td style="height: 22.4px;">&nbsp;</td>
                            <td style="height: 22.4px;">&nbsp;</td>
                            <td style="height: 22.4px;">&nbsp;</td>
                            <td style="height: 22.4px;">&nbsp;</td>
                            </tr>
                            </tbody>
                            </table>',
            'data' => [
                'profile_id' => 1,
            ],
            'start_date' => now()->subYears(3),
            'visible' => 1,
        ]);

        Event::create([
            'name' => 'Bowling tournament',
            'slug' => 'bowling',
            'event_type_id' => 2,
            'description' => 'Test',
            'content' => '<p>Bowling</p>',
            'data' => null,
            'start_date' => now()->subYear(),
            'visible' => 1,
        ]);

        Event::create([
            'name' => 'Teambuilding: Handlova',
            'slug' => 'teambuilding',
            'event_type_id' => 2,
            'description' => 'Great teambuilding with great people',
            'content' => null,
            'data' => null,
            'start_date' => now()->subYears(4),
            'visible' => 1,
            'location' => 'Handlová',
        ]);

        Event::create([
            'name' => 'Test 2',
            'slug' => 'test-4',
            'event_type_id' => 1,
            'description' => 'Short desc 123.',
            'content' => null,
            'data' => null,
            'start_date' => now()->subYear(),
            'visible' => 1,
        ]);

        Event::create([
            'name' => 'Test 2',
            'slug' => 'test-3',
            'event_type_id' => 1,
            'description' => 'Short desc 123.',
            'content' => null,
            'data' => null,
            'start_date' => now()->subYear(),
            'visible' => 1,
        ]);

        Profile::create([
            'first_name' => 'Pavel',
            'last_name' => 'Novák',
            'links' => [],
            'started_at' => now()->subYears(5),
        ]);
    }
}
