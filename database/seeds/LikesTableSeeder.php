<?php

use App\Models\Like;
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
        $dataSet = [
            [
                'user_id' => 2,
                'post_id' => 1,
                
            ],
            [
                'user_id' => 1,
                'post_id' => 1,
                
            ],
            [
                'user_id' => 1,
                'post_id' => 3,
            ],
        ];

        foreach ($dataSet as $data) {
            Like::create($data);
        }
    }
}
