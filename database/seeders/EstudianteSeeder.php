<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estudiantes')->insert([
            ['rut'=>'21403996-6','nombre'=>'Bastian','apellido'=>'Rojas','email'=>'quierollorar@gmail.com','created_at'=>Carbon::now()],
            ['rut'=>'21125670-2','nombre'=>'Vania','apellido'=>'Castro','email'=>'quierollorar2@gmail.com','created_at'=>Carbon::now()],
            ['rut'=>'21471167-2','nombre'=>'Rodrigo','apellido'=>'Plaza','email'=>'quierollorar3@gmail.com','created_at'=>Carbon::now()]
        ]);
    }
}
