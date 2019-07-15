<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admininsert = User::create([
            'first_name' => 'Admin',
            'last_name' => '123',
            'email' => 'admin@farazisoft.com',
            'username' => 'admin123',
            'password' => '$2y$10$qObI5nsZWr3ZY5HCx5raxOFlMu0Jyw0zd3OO5PBch/su/DSoFEZPe',
            'image' => '1480345486.png',
            'role' => 'Admin',
            'status' => 'Active'
        ]);

        $admin = Role::where('name', 'Admin')->first();
        $admininsert->attachRole($admin);
		
		 $userinsert = User::create([
            'first_name' => 'User',
            'last_name' => '123',
            'email' => 'user@farazisoft.com',
            'username' => 'user123',
            'password' => '$2y$10$qObI5nsZWr3ZY5HCx5raxOFlMu0Jyw0zd3OO5PBch/su/DSoFEZPe',
            'image' => '1482937747.png',
            'role' => 'User',
            'status' => 'Active'
        ]);

        $user = Role::where('name', 'User')->first();

        $userinsert->attachRole($user);
    }
}
