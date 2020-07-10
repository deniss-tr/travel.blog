<?php

use Illuminate\Database\Seeder;

class LikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('likes')->insert([
            'user_id' => 1,
            'article_id' => 1,
			'created_at' => new DateTime,
        ]);
		DB::table('likes')->insert([
            'user_id' => 2,
            'article_id' => 1,
			'created_at' => new DateTime,
        ]);
        DB::table('likes')->insert([
            'user_id' => 1,
            'article_id' => 3,
			'created_at' => new DateTime,
        ]);		
		DB::table('likes')->insert([
            'user_id' => 1,
            'article_id' => 4,
			'created_at' => new DateTime,
        ]);
        DB::table('likes')->insert([
            'user_id' => 2,
            'article_id' => 4,
			'created_at' => new DateTime,
        ]);	
		DB::table('likes')->insert([
            'user_id' => 3,
            'article_id' => 4,
			'created_at' => new DateTime,
        ]);
        DB::table('likes')->insert([
            'user_id' => 1,
            'article_id' => 7,
			'created_at' => new DateTime,
        ]);	
		DB::table('likes')->insert([
            'user_id' => 2,
            'article_id' => 7,
			'created_at' => new DateTime,
        ]);
        DB::table('likes')->insert([
            'user_id' => 1,
            'article_id' => 8,
			'created_at' => new DateTime,
        ]);	
		DB::table('likes')->insert([
            'user_id' => 2,
            'article_id' => 8,
			'created_at' => new DateTime,
        ]);
        DB::table('likes')->insert([
            'user_id' => 3,
            'article_id' => 8,
			'created_at' => new DateTime,
        ]);	
		DB::table('likes')->insert([
            'user_id' => 1,
            'article_id' => 9,
			'created_at' => new DateTime,
        ]);
        DB::table('likes')->insert([
            'user_id' => 3,
            'article_id' => 9,
			'created_at' => new DateTime,
        ]);			
    }
}
