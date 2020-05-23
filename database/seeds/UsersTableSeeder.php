<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'Estudio Cristys',
                        'email' => 'estudiocristyprogra@gmail.com',
                        'email_verified_at' => '2020/05/22',
                        'avatar' => null,
                        'descripcion' => 'Estudio Cristy',
                        'password' => Hash::make('estudiocristy')]);
        factory(User::class, 20)->create();
    }
}
