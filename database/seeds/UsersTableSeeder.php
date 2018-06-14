<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@yahoo.com',
            'password' => bcrypt('admin'),
        ]);

        factory(App\User::class, 10)->create()->each(function ($user) {
        $user->songs()->saveMany(factory(App\Song::class, 5)->make());
    });
    }
}
