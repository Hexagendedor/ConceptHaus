<?php

use Illuminate\Database\Seeder;
use App\Materia;
class MateriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('t_materias')->delete();

        Materia::create([
            'nombre' => 'matematicas',
            'activo' => 1,
        ]);  
        
        Materia::create([
            'nombre' => 'programacion I',
            'activo' => 1,
        ]);  
        factory(Materia::class, 13)->create();

    }
}
