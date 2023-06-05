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
            ['email'=>'profe1@gmail','nombre'=>'Pedro','apellido'=>'Prueba','created_at'=>Carbon::now()],
            ['email'=>'profe2@gmail','nombre'=>'Juan','apellido'=>'Prueba','created_at'=>Carbon::now()],
            ['email'=>'profe3@gmail','nombre'=>'Diego','apellido'=>'Prueba','created_at'=>Carbon::now()]
        ]);
    }
}
