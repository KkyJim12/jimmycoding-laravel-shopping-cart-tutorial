<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Jirakarn Nimmakulvirut';
        $user->email = 'piyakarn.nmk@gmail.com';
        $user->password = Hash::make('12345678');
        $user->admin = true;
        $user->save();
    }
}
