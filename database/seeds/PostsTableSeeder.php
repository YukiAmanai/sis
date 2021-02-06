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
                'category_id' =>3,
                'user_id' => 1,
                'title'=>'converse',
                'body' => 'ID: 2 のユーザーの投稿です',
                'image'=>'jfierjgijoofkfokrjjrjtw',
            ],
            [
                'category_id' =>4,
                'user_id' => 1,
                'title'=>'ドクターマーチン',
                'body' => '自動でデータを入れました',
                'image'=>'vhhuhfwefiojijjgiruhfh',
            ],
            [
                'category_id' =>5,
                'user_id' => 1,
                'title'=>'ドクターマーチン',
                'body' => '自動でデータを入れました',
                'image'=>'vhhuhfwefiojijjgiruhfh',
            ],
            [
                'category_id' =>6,
                'user_id' => 1,
                'title'=>'ドクターマーチン',
                'body' => '自動でデータを入れました',
                'image'=>'vhhuhfwefiojijjgiruhfh',
            ],
            [
                'category_id' =>7,
                'user_id' => 1,
                'title'=>'ドクターマーチン',
                'body' => '自動でデータを入れました',
                'image'=>'vhhuhfwefiojijjgiruhfh',
            ],
            [
                'category_id' =>8,
                'user_id' => 1,
                'title'=>'ドクターマーチン',
                'body' => '自動でデータを入れました',
                'image'=>'vhhuhfwefiojijjgiruhfh',
            ],
            [
                'category_id' =>9,
                'user_id' => 2,
                'title'=>'ドクターマーチン',
                'body' => '自動でデータを入れました',
                'image'=>'vhhuhfwefiojijjgiruhfh',
            ],
            [
                'category_id' =>10,
                'user_id' => 2,
                'title'=>'ドクターマーチン',
                'body' => '自動でデータを入れました',
                'image'=>'vhhuhfwefiojijjgiruhfh',
            ],
            [
                'category_id' =>11,
                'user_id' => 2,
                'title'=>'ドクターマーチン',
                'body' => '自動でデータを入れました',
                'image'=>'vhhuhfwefiojijjgiruhfh',
            ],
            [
                'category_id' =>12,
                'user_id' => 2,
                'title'=>'ドクターマーチン',
                'body' => '自動でデータを入れました',
                'image'=>'vhhuhfwefiojijjgiruhfh',
            ],
            [
                'category_id' =>13,
                'user_id' => 2,
                'title'=>'ドクターマーチン',
                'body' => '自動でデータを入れました',
                'image'=>'vhhuhfwefiojijjgiruhfh',
            ],
            [
                'category_id' =>14,
                'user_id' => 2,
                'title'=>'ドクターマーチン',
                'body' => '自動でデータを入れました',
                'image'=>'vhhuhfwefiojijjgiruhfh',
            ],
            [
                'category_id' =>15,
                'user_id' => 2,
                'title'=>'ドクターマーチン',
                'body' => '自動でデータを入れました',
                'image'=>'vhhuhfwefiojijjgiruhfh',
            ],
            [
                'category_id' =>16,
                'user_id' => 2,
                'title'=>'ドクターマーチン',
                'body' => '自動でデータを入れました',
                'image'=>'vhhuhfwefiojijjgiruhfh',
            ],
        ];

        foreach ($dataSet as $data) {
            Post::create($data);
        }
    }
}
