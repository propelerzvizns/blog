<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // User::create([
        //     'name' => 'asdadasd',
        //     'email' => 'sadsadad',
        //     'password' => bcrypt('password')
        // ]);

        factory(App\User::class, 50)->create();
    }
}
