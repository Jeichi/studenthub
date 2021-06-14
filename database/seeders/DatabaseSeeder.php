<?php

namespace Database\Seeders;

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
        // Creates the user roles in the fresh database (1 - Administrator / 2 - Student / 3 - Teacher)
        $this->call(RoleSeeder::class);
        // Creates a demo user for each other the roles. (see the UserSeeder for login details)
        $this->call(UserSeeder::class);
        // Creates courses a few courses.
        $this->call(CourseSeeder::class);
    }
}
