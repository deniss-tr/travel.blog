<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            'title' => ' Moment led family',
            'category' => 'Local',
            'body' => 'Dad blizzard coffee unsave facepalm face feel like a sir tank mother aww yeah. Anonymous easter puking rainbows bear wodka simpson amnesia read cookie monster final week grey. Mom hammer creepy me gusta morbi eat le friend steve jobs cellphone clinton cereal guy. Good guy high school on okay a bacon homework in joke dog. Not Okay if you know what i mean nap monocle oh stop it, you pizza diablo 3 captain on weekend elephant. I Dont Get It drink ba dumm tss amet basic math female phone gentlemen strangers',
            'picture' => '1.jpeg',
            'picture_title' => 'Flight over - 2020',
            'user_id' => 1,
			'created_at' => Carbon::create(2020, 1, 10, 12)
        ]);
		DB::table('articles')->insert([
            'title' => 'So neither related',
			'category' => 'Exotic',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dad blizzard coffee unsave facepalm face feel like a sir tank mother aww yeah. Anonymous easter puking rainbows bear wodka simpson amnesia read cookie monster final week grey. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dad blizzard coffee unsave facepalm face feel like a sir tank mother aww yeah. Anonymous easter puking rainbows bear wodka simpson amnesia read cookie monster final week grey. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'picture' => '2.jpeg',
            'picture_title' => 'The sun - 2020',
            'user_id' => 2,
			'created_at' => Carbon::create(2020, 1, 15, 12)
        ]);
		DB::table('articles')->insert([
            'title' => 'Shutters but sir',
			'category' => 'Exotic',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dad blizzard coffee unsave facepalm face feel like a sir tank mother aww yeah. Anonymous easter puking rainbows bear wodka simpson amnesia read cookie monster final week grey. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dad blizzard coffee unsave facepalm face feel like a sir tank mother aww yeah. Anonymous easter puking rainbows bear wodka simpson amnesia read cookie monster final week grey. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat',
            'picture' => '3.jpeg',
            'picture_title' => 'img title',
            'user_id' => 1,
			'created_at' => Carbon::create(2020, 2, 21, 12)
        ]);
		DB::table('articles')->insert([
            'title' => 'Add you',
            'category' => 'Local',
            'body' => 'Add you viewing ten equally believe put. Separate families my on drawings do oh offended strictly elegance. Perceive jointure be mistress by jennings properly. An admiration at he discovered difficulty continuing. We in building removing possible suitable friendly on. Nay middleton him admitting consulted and behaviour son household. Recurred advanced he oh together entrance speedily suitable. Ready tried gay state fat could boy its among shall. ',
            'picture' => '4.jpeg',
            'picture_title' => 'beauty wishes',
            'user_id' => 3,
			'created_at' => Carbon::create(2020, 2, 22, 12)
        ]);
		DB::table('articles')->insert([
            'title' => 'Polite it',
            'category' => 'Luxery',
            'body' => '',
            'picture' => '5.jpeg',
            'picture_title' => 'Ready tried - 2020',
            'user_id' => 1,
			'created_at' => Carbon::create(2020, 2, 4, 12)
        ]);
		DB::table('articles')->insert([
            'title' => 'Led listening',
            'category' => 'Luxery',
            'body' => 'Oh he decisively impression attachment friendship so if everything. Whose her enjoy chief new young. Felicity if ye required likewise so doubtful. On so attention necessary at by provision otherwise existence direction. Unpleasing up announcing unpleasant themselves oh do on. Way advantage age led listening belonging supposing. ',
            'picture' => '6.jpeg',
            'picture_title' => 'Especially do',
            'user_id' => 1,
			'created_at' => Carbon::create(2020, 3, 10, 12)
        ]);
		DB::table('articles')->insert([
            'title' => 'Household shameless',
            'category' => 'Luxery',
            'body' => ' Household shameless incommode at no objection behaviour. Especially do at he possession insensible sympathize boisterous it. Songs he on an widen me event truth. Certain law age brother sending amongst why covered. ',
            'picture' => '7.jpeg',
            'picture_title' => 'Certain law - 2020',
            'user_id' => 2,
			'created_at' => Carbon::create(2020, 3, 10, 12)
        ]);
		DB::table('articles')->insert([
            'title' => 'We in building',
            'category' => 'Local',
            'body' => 'Kindness to he horrible reserved ye. Effect twenty indeed beyond for not had county. The use him without greatly can private. Increasing it unpleasant no of contrasted no continuing. Nothing colonel my no removed in weather. It dissimilar in up devonshire inhabiting. ',
            'picture' => '8.jpeg',
            'picture_title' => 'Feel and make',
            'user_id' => 3,
			'created_at' => Carbon::create(2020, 3, 10, 12)
        ]);
		DB::table('articles')->insert([
            'title' => 'Friendship',
            'category' => 'Local',
            'body' => 'Moment led family sooner cannot her window pulled any. Or raillery if improved landlord to speaking hastened differed he. Furniture discourse elsewhere yet her sir extensive defective unwilling get. Why resolution one motionless you him thoroughly. Noise is round to in it quick timed doors. Written address greatly get attacks inhabit pursuit our but. Lasted hunted enough an up seeing in lively letter. Had judgment out opinions property the supplied. ',
            'picture' => '9.jpeg',
            'picture_title' => 'Moment',
            'user_id' => 3,
			'created_at' => Carbon::create(2020, 3, 12, 12)
        ]);
		DB::table('articles')->insert([
            'title' => 'Consulted perpetual',
            'category' => 'Exotic',
            'body' => 'Tell size come hard mrs and four fond are. Of in commanded earnestly resources it. At quitting in strictly up wandered of relation answered felicity. Side need at in what dear ever upon if. Same down want joy neat ask pain help she. Alone three stuff use law walls fat asked. Near do that he help. ',
            'picture' => '10.jpeg',
            'picture_title' => 'Appetite',
            'user_id' => 1,
			'created_at' => Carbon::create(2020, 6, 15, 12)
        ]);
    }
}
