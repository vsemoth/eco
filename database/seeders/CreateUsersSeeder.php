<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin User',
               'email'=>'admin@buildablog.com',
               'type'=>1,
               'email_verified_at' => now(),
               'password'=> bcrypt('password'),
               'remember_token' => Str::random(10),
            ],
            [                
               'name' => fake()->name(),
               'email'=>'manager@buildablog.com',
               'type'=> 2,
               'email_verified_at' => now(),
               'password'=> bcrypt('12345678'),
               'remember_token' => Str::random(10),
            ],
            [
               'name' => fake()->name(),
               'email'=>'user@buildablog.com',
               'type'=>0,
               'email_verified_at' => now(),
               'password'=> bcrypt('12345678'),
               'remember_token' => Str::random(10),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}