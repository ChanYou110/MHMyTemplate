<?php

use Illuminate\Database\Seeder;
use App\Skill;

class SkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            //あ行
            [
                'name'=>'アイテム使用強化',
                'level_limit'=>'3',
            ],
            [
                'name'=>'泡沫の舞',
                'level_limit'=>'3',
            ],
            [
                'name'=>'炎鱗の恩恵',
                'level_limit'=>'4',
            ],
            [
                'name'=>'鬼火纏',
                'level_limit'=>'4',
            ],       
            //か行
            [
                'name'=>'会心撃【属性】',
                'level_limit'=>'3',
            ],            
            [
                'name'=>'回避距離UP',
                'level_limit'=>'3',
            ],
            [
                'name'=>'回避性能',
                'level_limit'=>'5',
            ],
            [
                'name'=>'回復速度',
                'level_limit'=>'3',
            ],
            [
                'name'=>'翔蟲使い',
                'level_limit'=>'3',
            ],
            [
                'name'=>'火事場力',
                'level_limit'=>'5',
            ],
            [
                'name'=>'霞皮の恩恵',
                'level_limit'=>'4',
            ],
            [
                'name'=>'滑走強化',
                'level_limit'=>'1',
            ],
            [
                'name'=>'雷属性攻撃強化',
                'level_limit'=>'5',
            ],
            [
                'name'=>'雷耐性',
                'level_limit'=>'3',
            ],
            [
                'name'=>'貫通弾・貫通矢強化',
                'level_limit'=>'3',
            ],
            [
                'name'=>'ガード強化',
                'level_limit'=>'3',
            ],
            [
                'name'=>'ガード性能',
                'level_limit'=>'5',
            ],
            [
                'name'=>'気絶耐性',
                'level_limit'=>'3',
            ],
            [
                'name'=>'キノコ大好き',
                'level_limit'=>'3',
            ],
            [
                'name'=>'強化持続',
                'level_limit'=>'3',
            ],
            [
                'name'=>'逆襲',
                'level_limit'=>'3',
            ],
            [
                'name'=>'広域化',
                'level_limit'=>'5',
            ],
            [
                'name'=>'幸運',
                'level_limit'=>'3',
            ],
            [
                'name'=>'攻撃',
                'level_limit'=>'7',
            ],
            [
                'name'=>'高速変形',
                'level_limit'=>'3',
            ],
            [
                'name'=>'氷属性攻撃強化',
                'level_limit'=>'5',
            ],
            [
                'name'=>'氷耐性',
                'level_limit'=>'3',
            ],
            [
                'name'=>'渾身',
                'level_limit'=>'3',
            ],
            [
                'name'=>'剛刃研磨',
                'level_limit'=>'3',
            ],
            //さ行
            [
                'name'=>'逆恨み',
                'level_limit'=>'5',
            ],
            [
                'name'=>'散弾・拡散矢強化',
                'level_limit'=>'3',
            ],
            [
                'name'=>'死中に活',
                'level_limit'=>'3',
            ],
            [
                'name'=>'集中',
                'level_limit'=>'3',
            ],
            [
                'name'=>'植生学',
                'level_limit'=>'4',
            ],
            [
                'name'=>'心眼',
                'level_limit'=>'3',
            ],
            [
                'name'=>'弱点特効',
                'level_limit'=>'3',
            ],
            [
                'name'=>'ジャンプ鉄人',
                'level_limit'=>'1',
            ],
            [
                'name'=>'睡眠属性強化',
                'level_limit'=>'3',
            ],
            [
                'name'=>'睡眠耐性',
                'level_limit'=>'3',
            ],
            [
                'name'=>'スタミナ急速回復',
                'level_limit'=>'3',
            ],
            [
                'name'=>'スタミナ奪取',
                'level_limit'=>'3',
            ],
            [
                'name'=>'精霊の加護',
                'level_limit'=>'3',
            ],
            [
                'name'=>'攻めの守勢',
                'level_limit'=>'3'
            ],
            [
                'name'=>'装填拡張',
                'level_limit'=>'3',
            ],
            [
                'name'=>'装填速度',
                'level_limit'=>'3',
            ],
            [
                'name'=>'速射強化',
                'level_limit'=>'3',
            ],
            [
                'name'=>'属性やられ耐性',
                'level_limit'=>'3',
            ],
            //た行
            [
                'name'=>'耐震',
                'level_limit'=>'3',
            ],
            [
                'name'=>'体術',
                'level_limit'=>'5',
            ],
            [
                'name'=>'体力回復量UP',
                'level_limit'=>'3',
            ],
            [
                'name'=>'匠',
                'level_limit'=>'5',
            ],
            [
                'name'=>'達人芸',
                'level_limit'=>'3',
            ],
            [
                'name'=>'弾丸節約',
                'level_limit'=>'3',
            ],
            [
                'name'=>'弾導強化',
                'level_limit'=>'3',
            ],
            [
                'name'=>'力の解放',
                'level_limit'=>'5',
            ],
            [
                'name'=>'地質学',
                'level_limit'=>'3',
            ],
            [
                'name'=>'超会心',
                'level_limit'=>'3',
            ],
            [
                'name'=>'挑戦者',
                'level_limit'=>'5',
            ],
            [
                'name'=>'通常弾・連射矢強化',
                'level_limit'=>'3',
            ],
            [
                'name'=>'砥石使用高速化',
                'level_limit'=>'3',
            ],
            [
                'name'=>'特殊射撃強化',
                'level_limit'=>'2',
            ],
            [
                'name'=>'飛び込み',
                'level_limit'=>'1',
            ],
            [
                'name'=>'毒属性強化',
                'level_limit'=>'3',
            ],
            [
                'name'=>'毒耐性',
                'level_limit'=>'3',
            ],
            [
                'name'=>'泥雪耐性',
                'level_limit'=>'2',
            ],
            [
                'name'=>'鈍器使い',
                'level_limit'=>'3',
            ],
            //な行
            [
                'name'=>'納刀術',
                'level_limit'=>'3',
            ],
            [
                'name'=>'乗り名人',
                'level_limit'=>'1',
            ],
            // は行
            [
                'name'=>'破壊王',
                'level_limit'=>'3',
            ],
            [
                'name'=>'銅殻の恩恵',
                'level_limit'=>'4',
            ],
            [
                'name'=>'剥ぎ取り鉄人',
                'level_limit'=>'1',
            ],
            [
                'name'=>'剥ぎ取り名人',
                'level_limit'=>'1',
            ],
            [
                'name'=>'早食い',
                'level_limit'=>'3',
            ],
            [
                'name'=>'腹減り耐性',
                'level_limit'=>'3',
            ],
            [
                'name'=>'反動軽減',
                'level_limit'=>'3',
            ],
            [
                'name'=>'爆破属性強化',
                'level_limit'=>'3',
            ],
            [
                'name'=>'爆破やられ耐性',
                'level_limit'=>'3',
            ],
            [
                'name'=>'抜刀術【力】',
                'level_limit'=>'3',
            ],
            [
                'name'=>'抜刀術【技】',
                'level_limit'=>'3',
            ],
            [
                'name'=>'火属性攻撃強化',
                'level_limit'=>'5',
            ],
            [
                'name'=>'火耐性',
                'level_limit'=>'3',
            ],
            [
                'name'=>'ひるみ軽減',
                'level_limit'=>'3',
            ],
            [
                'name'=>'風圧耐性',
                'level_limit'=>'3',
            ],
            [
                'name'=>'風紋の一致',
                'level_limit'=>'5',
            ],
            [
                'name'=>'風雷合一',
                'level_limit'=>'5',
            ],
            [
                'name'=>'笛吹き名人',
                'level_limit'=>'1',
            ],
            [
                'name'=>'不屈',
                'level_limit'=>'1',
            ],
            [
                'name'=>'フルチャージ',
                'level_limit'=>'3',
            ],
            [
                'name'=>'ブレ抑制',
                'level_limit'=>'2',
            ],
            [
                'name'=>'壁面移動',
                'level_limit'=>'3',
            ],
            [
                'name'=>'砲術',
                'level_limit'=>'3',
            ],
            [
                'name'=>'砲弾装填',
                'level_limit'=>'2',
            ],
            [
                'name'=>'捕獲名人',
                'level_limit'=>'1',
            ],
            [
                'name'=>'防御',
                'level_limit'=>'7',
            ],
            [
                'name'=>'ボマー',
                'level_limit'=>'3',
            ],
            //ま行
            [
                'name'=>'麻痺属性強化',
                'level_limit'=>'3',
            ],
            [
                'name'=>'麻痺耐性',
                'level_limit'=>'3',
            ],
            [
                'name'=>'満足感',
                'level_limit'=>'3',
            ],
            [
                'name'=>'見切り',
                'level_limit'=>'7',
            ],
            [
                'name'=>'水属性攻撃強化',
                'level_limit'=>'5',
            ],
            [
                'name'=>'水耐性',
                'level_limit'=>'3',
            ],
            [
                'name'=>'耳栓',
                'level_limit'=>'5',
            ],
            // //や行
            [
                'name'=>'弓溜め段階解放',
                'level_limit'=>'1',
            ],
            [
                'name'=>'陽動',
                'level_limit'=>'1',
            ],
            // //ら行
            [
                'name'=>'雷紋の一致',
                'level_limit'=>'5',
            ],
            [
                'name'=>'ランナー',
                'level_limit'=>'3',
            ],
            [
                'name'=>'龍気活性',
                'level_limit'=>'5',
            ],
            [
                'name'=>'龍属性攻撃強化',
                'level_limit'=>'5',
            ],
            [
                'name'=>'龍耐性',
                'level_limit'=>'3',
            ],
            // //わ行
            [
                'name'=>'業物',
                'level_limit'=>'3',
            ],
            // //その他
            [
                'name'=>'KO術',
                'level_limit'=>'3',
            ],
            //
            //---------------以下未使用----------------
            //
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            //[
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
            // [
            //     'name'=>'',
            //     'level_limit'=>'',
            // ],
        ]);
    }
}
