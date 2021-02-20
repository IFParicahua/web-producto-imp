<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'longitud' => 12,
                'diametro' => 32,
                'cod_material' => 12356,
                'company_id' => 1,
            ],[
                'longitud' => 12,
                'diametro' => 16,
                'cod_material' => 12357,
                'company_id' => 1,
            ],[
                'longitud' => 12,
                'diametro' => 9.5,
                'cod_material' => 12358,
                'company_id' => 1,
            ],[
                'longitud' => 12,
                'diametro' => 6,
                'cod_material' => 12359,
                'company_id' => 1,
            ],[
                'longitud' => 12,
                'diametro' => 2,
                'cod_material' => 12350,
                'company_id' => 1,
            ]
        ]);
    }
}
