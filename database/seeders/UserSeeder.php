<?php

namespace database\seeders;
use App\Models\User;

class UserSeeder
{
    public function run()
    {
        $user = new User();
        $user->insert([
            'name' => 'tarek',
            'email' => 'tarek@gmail.com',
            'contact' => '+8801256456253'
        ]);
        $user->insert([
            'name' => 'sharif',
            'email' => 'sharif@gmail.com',
            'contact' => '+8801256456253'
        ]);
        $user->insert([
            'name' => 'shefat',
            'email' => 'shefat@gmail.com',
            'contact' => '+8801256456253'
        ]);
    }
}
