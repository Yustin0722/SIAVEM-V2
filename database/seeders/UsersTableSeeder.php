<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->where('email', 'da598298@gmail.com')->delete();

        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'da598298@gmail.com',
            'password' => bcrypt('12345678'),
            'rol' => 'superAdmin',
        ]);
        DB::table('users')->insert([
            'name' => 'Usuario',
            'email' => 'usuario@gmail.com',
            'password' => bcrypt('12345678'),
            'rol' => 'usuario',
        ]);

        DB::table('users')->insert([
            'name' => 'Departamento',
            'email' => 'departamento@gmail.com',
            'password' => bcrypt('12345678'),
            'rol' => 'departamento',
        ]);
    }
}