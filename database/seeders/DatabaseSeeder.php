<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Discount;
use App\Models\Mentor;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Course::factory(8)->create();

        Category::create([
            'namaCategory' => 'IT & Software',
            'slugCategory' => 'it-software',
        ]);

        Category::create([
            'namaCategory' => 'Finance & Accounting',
            'slugCategory' => 'finance-accounting',
        ]);

        Category::create([
            'namaCategory' => 'Business',
            'slugCategory' => 'business',
        ]);

        Category::create([
            'namaCategory' => 'Marketing',
            'slugCategory' => 'marketing',
        ]);

        Category::create([
            'namaCategory' => 'Music',
            'slugCategory' => 'music',
        ]);

        Mentor::create([
            'name' => 'Administrator',
            'username' => 'Administrator',
            'email' => 'administrator@monerocourse.com',
            'password' => bcrypt('password'),
            'deskripsiMentor' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            'isAdmin' => '1',
        ]);
        
        Mentor::factory(3)->create();

        Discount::factory(3)->create();
    }
}
