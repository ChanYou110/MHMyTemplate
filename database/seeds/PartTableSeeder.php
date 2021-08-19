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
        $parts = ['頭','胴','腕','腰','脚'];
        foreach($parts as $part)
        {
            Part::create([
                'name'=>$part
            ]);
        }
    }
}
