<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		$this->call('UsersTableSeeder');
		$this->call('ArticleTableSeeder');
		$this->call('CommentsTableSeeder');
        $this->call('LikesTableSeeder');

    }
}
