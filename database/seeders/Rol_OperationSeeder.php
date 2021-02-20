<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Rol_OperationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rol_operation')->insert([
            [
                'rol_id' => 1,
                'operation_id' => 1
            ],[
                'rol_id' => 1,
                'operation_id' => 2
            ],[
                'rol_id' => 1,
                'operation_id' => 3
            ],[
                'rol_id' => 2,
                'operation_id' => 1
            ],[
                'rol_id' => 2,
                'operation_id' => 2
            ],[
                'rol_id' => 2,
                'operation_id' => 3
            ]
        ]);
    }
}
