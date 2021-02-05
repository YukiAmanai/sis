<?php

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataSet = [
            [ 
                'category_id' =>1,
                'user_id' => 1,
                'title'=>'converse',
                'body' => '初投稿です!',
                'image'=>'vhdfhfuhfjgijdfiogjgijg',
            ],
            [
                'category_id' =>2,
                'user_id' => 1,
                'title'=>'ドクターマーチン',
                'body' => '自動でデータを入れました',
                'image'=>'vhhuhfwefiojijjgiruhfh',
            ],
            [
                'category_id' =>9,
                'user_id' => 2,
                'title'=>'converse',
                'body' => 'ID: 2 のユーザーの投稿です',
                'image'=>'jfierjgijoofkfokrjjrjtw',
            ],
        ];

        foreach ($dataSet as $data) {
            Post::create($data);
        }
    }
}
