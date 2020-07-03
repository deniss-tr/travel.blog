<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title' => 'First article title',
            'category' => 'Local',
            'body' => 'Dad blizzard coffee unsave facepalm face feel like a sir tank mother aww yeah. Anonymous easter puking rainbows bear wodka simpson amnesia read cookie monster final week grey. Mom hammer creepy me gusta morbi eat le friend steve jobs cellphone clinton cereal guy. Good guy high school on okay a bacon homework in joke dog. Not Okay if you know what i mean nap monocle oh stop it, you pizza diablo 3 captain on weekend elephant. I Dont Get It drink ba dumm tss amet basic math female phone gentlemen strangers',
            'picture' => 'images/1.jpg',
            'picture_title' => 'Flight over the country - 2020',
            'user_id' => 1,
			'created_at' => new DateTime,
        ]);
		DB::table('articles')->insert([
            'title' => 'Second article title',
			'category' => 'Exotic',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dad blizzard coffee unsave facepalm face feel like a sir tank mother aww yeah. Anonymous easter puking rainbows bear wodka simpson amnesia read cookie monster final week grey. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dad blizzard coffee unsave facepalm face feel like a sir tank mother aww yeah. Anonymous easter puking rainbows bear wodka simpson amnesia read cookie monster final week grey. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'picture' => 'images/2.jpg',
            'picture_title' => 'Manhatten Skyline- 2014',
            'user_id' => 2,
			'created_at' => new DateTime,
        ]);
		DB::table('articles')->insert([
            'title' => 'First article title',
			'category' => 'Exotic',
            'body' => 'Test Text Hey Text Hey',
            'picture' => 'images/11.jpg',
            'picture_title' => 'img title test',
            'user_id' => 1,
			'created_at' => new DateTime,
        ]);
    }
}
