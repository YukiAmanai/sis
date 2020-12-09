<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
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
                'name'=>'スニーカー',
                'gender'=>'男性',
            ],
            [
                'name'=>'サンダル',
                'gender'=>'男性',
            ],
            [
                'name'=>'革靴',
                'gender'=>'男性',
            ],
            [
                'name'=>'スリッポン',
                'gender'=>'男性',
            ],
            [
                'name'=>'ローファー',
                'gender'=>'男性',
            ],
            [
                'name'=>'デッキシューズ',
                'gender'=>'男性',
            ],
            [
                'name'=>'ブーツ',
                'gender'=>'男性',
            ],
            [
                'name'=>'その他',
                'gender'=>'男性',
            ],
                [
                    'name'=>'スニーカー',
                    'gender'=>'女性',
                ],
                [
                    'name'=>'サンダル',
                    'gender'=>'女性',
                ],
                [
                    'name'=>'パンプス',
                    'gender'=>'女性',
                ],
                [
                    'name'=>'スリッポン',
                    'gender'=>'女性',
                ],
                [
                    'name'=>'ローファー',
                    'gender'=>'女性',
                ],
                [
                    'name'=>'Tストラップ',
                    'gender'=>'女性',
                ],
                [
                    'name'=>'ブーツ',
                    'gender'=>'女性',
                ],
                [
                    'name'=>'その他',
                    'gender'=>'女性',
                ],
            ];
            foreach ($dataSet as $data) {
                Category::create($data);
            }
    }
}
