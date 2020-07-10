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
            'body' => 'Among going manor',
            'user_id' => 1,
            'article_id' => 1,
			'created_at' => new DateTime,
        ]);
        DB::table('comments')->insert([
            'body' => 'May ecstatic did',
            'user_id' => 2,
            'article_id' => 1,
			'created_at' => new DateTime,
        ]);
        DB::table('comments')->insert([
            'body' => 'ladies houses',
            'user_id' => 3,
            'article_id' => 5,
			'created_at' => new DateTime,
        ]);
        DB::table('comments')->insert([
            'body' => 'Instantly immediate',
            'user_id' => 1,
            'article_id' => 5,
			'created_at' => new DateTime,
        ]);
        DB::table('comments')->insert([
            'body' => 'Diverted endeavor',
            'user_id' => 1,
            'article_id' => 8,
			'created_at' => new DateTime,
        ]);
        DB::table('comments')->insert([
            'body' => 'Partiality diminution',
            'user_id' => 2,
            'article_id' => 8,
			'created_at' => new DateTime,
        ]);
        DB::table('comments')->insert([
            'body' => 'Unknown ye',
            'user_id' => 1,
            'article_id' => 9,
			'created_at' => new DateTime,
        ]);
        DB::table('comments')->insert([
            'body' => 'Journey promise',
            'user_id' => 3,
            'article_id' => 9,
			'created_at' => new DateTime,
        ]);
        DB::table('comments')->insert([
            'body' => 'May ecstatic',
            'user_id' => 2,
            'article_id' => 9,
			'created_at' => new DateTime,
        ]);		
    }
}
