<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'title' => 'Công ty1',
            'address' => 'Huế, Việt Nam'
        ]);

        DB::table('companies')->insert([
            'title' => 'Công ty2',
            'address' => 'Hà Nội, Việt Nam'
        ]);

        DB::table('companies')->insert([
            'title' => 'Công ty3',
            'address' => 'Sài Gòn, Việt Nam'
        ]);
    }
}
