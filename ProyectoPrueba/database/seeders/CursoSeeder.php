<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curso::factory(50)->create(); 
        User::factory(20)->create();   
        // $curso= new Curso();
        // $curso->name='laravel';
        // $curso->description='??';
        // $curso->category='c1';
        // $curso->save();

        // $curso2= new Curso();
        // $curso2->name='laravel';
        // $curso2->description='??';
        // $curso2->category='c2';
        // $curso2->save();

        // $curso3= new Curso();
        // $curso3->name='laravel';
        // $curso3->description='??';
        // $curso3->category='c3';
        // $curso3->save();
    }
}
