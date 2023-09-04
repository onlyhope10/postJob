<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(5)->create();
         
         Listing::factory(6)->create();
         // Listing::create([
         //    'title' => 'Laravel Senior Developer',
         //    'tags' => 'Laravel, javascript',
         //    'company' => 'Acme Corp',
         //    'location' => 'Makati, PH',
         //    'email' => 'email@email.com',
         //    'website' => 'https://www.acme.com',
         //    'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam, pariatur corporis iste numquam aliquid neque?',
         // ]);
         // Listing::create([
         //    'title' => 'Full-Stack Developer',
         //    'tags' => 'Laravel, Backend, api',
         //    'company' => 'Stark Industries',
         //    'location' => 'Cebu, PH',
         //    'email' => 'email@email.com',
         //    'website' => 'https://www.StarkIndustries.com',
         //    'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam, pariatur corporis iste numquam aliquid neque?',
         // ]);
      }
}
