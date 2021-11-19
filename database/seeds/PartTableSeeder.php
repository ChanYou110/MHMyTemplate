<?php

use Illuminate\Database\Seeder;
use App\Part;

class PartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $parts = ['頭','胴','腕','腰','脚'];
        // foreach($parts as $part)
        // {
        //     Part::create([
        //         'name'=>$part
        //     ]);
        // }
        DB::table('parts')->insert([
            [
                'id'=>'1',
                'name'=>'頭'
            ],
            [
                'id'=>'2',
                'name'=>'胴'
            ],
            [
                'id'=>'3',
                'name'=>'腕'
            ],
            [
                'id'=>'4',
                'name'=>'腰'
            ],
            [
                'id'=>'5',
                'name'=>'脚'
            ],
        ]);
    }
}
