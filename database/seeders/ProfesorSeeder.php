<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profesores')->insert([
            ['email'=>'profe@gmail','nombre'=>'Profesor','apellido'=>'Prueba','created_at'=>Carbon::now()],
            ['email'=>'profe@gmail','nombre'=>'Profesor','apellido'=>'Prueba','created_at'=>Carbon::now()],
            ['email'=>'profe@gmail','nombre'=>'Profesor','apellido'=>'Prueba','created_at'=>Carbon::now()],
            ['email'=>'profe@gmail','nombre'=>'Profesor','apellido'=>'Prueba','created_at'=>Carbon::now()],
            ['email'=>'profe@gmail','nombre'=>'Profesor','apellido'=>'Prueba','created_at'=>Carbon::now()]
        ]);
    }
}
