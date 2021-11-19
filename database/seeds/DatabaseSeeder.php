<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(WeaponTypeTableSeeder::class);
        $this->call(OrnamentTableSeeder::class);
        $this->call(PartTableSeeder::class);
        $this->call(WeaponTableSeeder::class);
        $this->call(EquipmentTableSeeder::class);
        $this->call(SkillTableSeeder::class);
    }
}
