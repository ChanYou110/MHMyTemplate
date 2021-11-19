<?php

use Illuminate\Database\Seeder;
use App\WeaponType;

class WeaponTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $weapon_types = ['大剣', '太刀', '片手剣', '双剣', 'ハンマー', '狩猟笛', 'ランス', 'ガンランス',
        //             'スラッシュアックス', 'チャージアックス', '操虫棍', 'ライトボウガン', 'ヘビィボウガン', '弓'];
        // foreach($weapon_types as $weapon_type)
        // {
        //     WeaponType::create([
        //         'name'=>$weapon_type
        //     ]);
        // }
        DB::table('weapon_types')->insert([
            [
                'id'=>'1',
                'name'=>'大剣'
            ],
            [
                'id'=>'2',
                'name'=>'太刀'
            ],
            [
                'id'=>'3',
                'name'=>'片手剣'
            ],
            [
                'id'=>'4',
                'name'=>'双剣'
            ],
            [
                'id'=>'5',
                'name'=>'ハンマー'
            ],
            [
                'id'=>'6',
                'name'=>'狩猟笛'
            ],
            [
                'id'=>'7',
                'name'=>'ランス'
            ],
            [
                'id'=>'8',
                'name'=>'ガンランス'
            ],
            [
                'id'=>'9',
                'name'=>'スラッシュアックス'
            ],
            [
                'id'=>'10',
                'name'=>'チャージアックス'
            ],
            [
                'id'=>'11',
                'name'=>'操虫棍'
            ],
            [
                'id'=>'12',
                'name'=>'ライトボウガン'
            ],
            [
                'id'=>'13',
                'name'=>'ヘビーボウガン'
            ],
            [
                'id'=>'14',
                'name'=>'弓'
            ],
        ]);
    }
}
