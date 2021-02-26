<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class UsersTableSeeder extends Seeder
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
                'name' => '天内優希',
                'email' => 'yuuy15152525@outlook.jp',
                'gender'=> '男性',
                'password' => bcrypt('password'),
                
            ],
            [
                'name' => 'ジェリー',
                'email' => 'jerry@example.com',
                'gender'=> '女性',
                'password' => bcrypt('password'),
                
            ],
        ];
    
        foreach ($dataSet as $data) {
           User::create($data);
        }
    }
}

