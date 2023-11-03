<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Setting;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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


       User::factory()->create([
            'name' => 'Abdurrahman Ekecik',
             'email' => 'info@abdurrahmanekecik.com',
            'password' => bcrypt('123456'),
         ]);

      Setting::factory()->create([
            'name' => 'Abdurrahman Ekecik',
            'description' => 'Abdurrahman Ekecik',
            'favicon' => 'test',
            'logo' => 'test',
            'server_link' => 'mail.abdurrahmanekecik.com',
            'user' => 'abdurrahmanekecik',
            'pass' => '123456',
            'port' => '465',
            'ssltls' => 'ssl',

        ]);
    }
}
