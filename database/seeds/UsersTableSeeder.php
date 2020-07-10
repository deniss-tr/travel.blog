<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            'name' => 'Den',
            'email' => 'd@d.lv',
            'password' => bcrypt('11111'),
			'created_at' => Carbon::create(2020, 1, 1, 12),
        ]);
		DB::table('users')->insert([
            'name' => 'Kos',
            'email' => 'k@k.lv',
            'password' => bcrypt('11111'),
			'created_at' => Carbon::create(2020, 1, 1, 12),
        ]);
		DB::table('users')->insert([
            'name' => 'Nana',
            'email' => 'n@n.lv',
            'password' => bcrypt('11111'),
			'created_at' => Carbon::create(2020, 1, 2, 12),
        ]);
    }
}
