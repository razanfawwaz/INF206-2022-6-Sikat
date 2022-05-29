<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users') ->insert([
            [
                'name'=>'admin',
                'email'=>'admin@mail.com',
                'noHp'=>'08123456789',
                'is_admin'=>'1',
                'admin_unit'=>'admin',
                'password'=> Hash::make('123456'),
            ]
        ]);
    }
}
