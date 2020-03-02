<?php

use Illuminate\Database\Seeder;
use App\Alumno;
class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('t_alumnos')->delete();

        Alumno::create([
            'nombre' => 'John',
            'ap_paterno' => 'Dow',
            'ap_materno' => 'Dow',
            'activo' => 1,
        ]);  
        factory(Alumno::class, 25)->create();
    }
}
