<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'body' => 'My first comment',
            'user_id' => 1,
            'article_id' => 1,
			'created_at' => new DateTime,
        ]);
        DB::table('comments')->insert([
            'body' => 'Hop Hey lallay',
            'user_id' => 2,
            'article_id' => 1,
			'created_at' => new DateTime,
        ]);
        DB::table('comments')->insert([
            'body' => 'Yeah working',
            'user_id' => 1,
            'article_id' => 1,
			'created_at' => new DateTime,
        ]);		
    }
}
