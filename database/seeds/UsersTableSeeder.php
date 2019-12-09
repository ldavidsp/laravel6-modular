<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use \App\User;

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        User::create([
            'name' => Str::random(5),
            'email' => Str::random(5) . '@gmail.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => Str::random(5),
            'email' => Str::random(5) . '@gmail.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => Str::random(5),
            'email' => Str::random(5) . '@gmail.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => Str::random(5),
            'email' => Str::random(5) . '@gmail.com',
            'password' => bcrypt('password'),
        ]);

        User::find(1)->syncRoles('admin');
        User::find(2)->syncRoles('gerencia');
        User::find(3)->syncRoles('promotor');
        User::find(4)->syncRoles('gestor');
    }

    private function JWTEncode() {
        $token = Str::random(60);
        return $token;
    }

}
