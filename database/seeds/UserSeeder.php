<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
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
           'email' => 'admin@admin.com',
           'password' => Hash::make('123123123'),
           'isAdmin' => true,
        ]);

        DB::table('users')->insert([
            'name' => 'Gulpa',
            'email' => 'gull@a.cv',
            'password' => Hash::make('12qwe12qwe'),
            'isAdmin' => false,
         ]);

         DB::table('users')->insert([
            'name' => 'Adrian',
            'email' => 'anji@gmail.com',
            'password' => Hash::make('172172172'),
            'isAdmin' => false,
         ]);

         DB::table('users')->insert([
            'name' => 'Mike',
            'email' => 'mika88@mail.us',
            'password' => Hash::make('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),
            'isAdmin' => false,
         ]);

         DB::table('users')->insert([
            'name' => 'Lina de Mir',
            'email' => 'ldm@doi.mumu',
            'password' => Hash::make('0987654321'),
            'isAdmin' => false,
         ]);
    }
}
