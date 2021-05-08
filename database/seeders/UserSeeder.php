<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a Demo Administrator Login (password: 12345678)
        User::create([
            'name' => 'Demo Admin',
            'email' => 'admin@studenthub.co.uk',
            'password' => '$2y$10$Nqj0GI3ZZCtVnZcP1TUJ7.exr/J42deUyw952GWRd73Du1IlqwWua',
            'role_id' => '1',
        ]);
        // Create a Demo Student Login (password: 12345678)
        User::create([
            'name' => 'Demo Student',
            'email' => 'student@studenthub.co.uk',
            'password' => '$2y$10$Nqj0GI3ZZCtVnZcP1TUJ7.exr/J42deUyw952GWRd73Du1IlqwWua',
            'role_id' => '2',
            'student_address' => '27 Madeup Lane',
            'student_gender' => 'Male',
        ]);
        // Create a Demo Teacher Login (password: 12345678)
        User::create([
            'name' => 'Demo Teacher',
            'email' => 'teacher@studenthub.co.uk',
            'password' => '$2y$10$Nqj0GI3ZZCtVnZcP1TUJ7.exr/J42deUyw952GWRd73Du1IlqwWua',
            'role_id' => '3',
            'teacher_qualifications' => 'BSc Computing Technologies',
        ]);
    }
}
