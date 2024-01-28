<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "Nitesh Hamal",
            'email' => "nitesh0hamal@gmail.com",
            'password' => Hash::make('password'),
            'email_verified_at'=>Carbon::today(),
            'role'=>'admin',
            'phone'=>'9813371345'
        ]);
    }
}