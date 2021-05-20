<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'role_id'   => '1',
            'nama'      => 'Administrator',
            'nrp'       => '123456789',
            'foto'      => 'default.jpg',
            'password'  => Hash::make('123456789')
        ]);

        DB::table('users')->insert([
            'role_id'   => '2',
            'nama'      => 'Rohim',
            'nrp'       => '987654321',
            'foto'      => 'default.jpg',
            'password'  => Hash::make('rohim12')
        ]);

        DB::table('users')->insert([
            'role_id'   => '2',
            'nama'      => 'Rahmat',
            'nrp'       => '112233445',
            'foto'      => 'default.jpg',
            'password'  => Hash::make('rahmat12')
        ]);

        DB::table('users')->insert([
            'role_id'   => '2',
            'nama'      => 'Asep',
            'nrp'       => '111111111',
            'foto'      => 'default.jpg',
            'password'  => Hash::make('asep12')
        ]);
    }
}
