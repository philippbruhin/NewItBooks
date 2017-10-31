<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_one = new User();
        $user_one->role_id= 1;
        $user_one->name='Philipp';
        $user_one->email='test@test.com';
        $user_one->password=bcrypt('123456');
        $user_one->save();
    }
}
