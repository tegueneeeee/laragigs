<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Listing::factory(6)->create();
        
        // Listing::create([
        //     'title' => 'laragigs title1',
        //     'tags' => 'laragigs tags1',
        //     'company' => 'laragigs company1',
        //     'location' => 'laragigs location1',
        //     'email' => 'laragigs email1',
        //     'website' => 'laragigs website1',
        //     'description' => 'laragigs descriptions1'
        // ]);

        // Listing::create([
        //     'title' => 'laragigs title2',
        //     'tags' => 'laragigs tags2',
        //     'company' => 'laragigs company2',
        //     'location' => 'laragigs location2',
        //     'email' => 'laragigs email2',
        //     'website' => 'laragigs website2',
        //     'description' => 'laragigs descriptions2'
        // ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
