<?php

namespace Database\Seeders;

use App\Models\{Permission, Role, User};

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            ['name' => 'user', 'email'=>'user@gmail.com', 'password' => bcrypt('12345678')],
            ['name' => 'editor', 'email'=>'editor@gmail.com', 'password' => bcrypt('12345678')],
            ['name' => 'author', 'email'=>'author@gmail.com', 'password' => bcrypt('12345678')],
        ]);

        Role::insert([
            ['name' => 'Editor', 'slug' => 'editor'],
            ['name' => 'Author', 'slug' => 'author']
        ]);

        Permission::insert([
            ['name' => 'Add Post', 'slug' => 'add-post'],
            ['name' => 'Delete Post', 'slug' => 'delete-post']
        ]);
    }
}
