<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PropuestasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('propuestas')->insert([
            ['fecha'=>Carbon::now(),'documento'=>'test.txt','estado'=>1,"estudiante_rut"=>'21403996-6'],
            ['fecha'=>Carbon::now(),'documento'=>'test.txt','estado'=>1,"estudiante_rut"=>'21125670-2'],
            ['fecha'=>Carbon::now(),'documento'=>'test.txt','estado'=>1,"estudiante_rut"=>'21125670-2'],
            ['fecha'=>Carbon::now(),'documento'=>'test.txt','estado'=>1,"estudiante_rut"=>'21471167-2'],
            ['fecha'=>Carbon::now(),'documento'=>'test.txt','estado'=>1,"estudiante_rut"=>'21471167-2']
        ]);
    }
}
