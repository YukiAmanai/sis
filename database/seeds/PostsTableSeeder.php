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
                'body' => '初投稿です！',
            ],
            [
                'category_id' =>2,
                'user_id' => 1,
                'body' => '自動でデータを入れました',
            ],
            [
                'category_id' =>9,
                'user_id' => 2,
                'body' => 'ID: 2 のユーザーの投稿です',
            ],
        ];

        foreach ($dataSet as $data) {
            Post::create($data);
        }
    }
}
