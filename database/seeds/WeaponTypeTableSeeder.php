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
        $weapon_types = ['大剣', '太刀', '片手剣', '双剣', 'ハンマー', '狩猟笛', 'ランス', 'ガンランス',
                    'スラッシュアックス', 'チャージアックス', '操虫棍', 'ライトボウガン', 'ヘビィボウガン', '弓'];
        foreach($weapon_types as $weapon_type)
        {
            WeaponType::create([
                'name'=>$weapon_type
            ]);
        }
    }
}
