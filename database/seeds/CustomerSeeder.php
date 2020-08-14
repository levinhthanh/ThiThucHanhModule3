<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'name' => 'Lê Vĩnh Thành',
            'email' => 'thanhle@gmail.com',
            'phone' => '0905200200',

        ]);

        DB::table('customers')->insert([
            'name' => 'Lê Thạnh',
            'email' => 'thanh@gmail.com',
            'phone' => '0905200211',
            'company_id' => 2,
            'active' => 'Đã xóa'

        ]);

    }
}
