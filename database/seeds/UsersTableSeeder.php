<?php

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
        DB::table('users')->insert([
            'login' => 'den',
            'email' => 'tarasevicsd@gmail.com',
            'password' => bcrypt('123'),
			'created_at' => new DateTime,
        ]);
		DB::table('users')->insert([
            'login' => 'kos',
            'email' => 'kosss7@inbox.lv',
            'password' => bcrypt('111'),
			'created_at' => new DateTime,
        ]);
    }
}
