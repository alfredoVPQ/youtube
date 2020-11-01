<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            DB::table('videos')->insert([
                'titulo' => 'Quien mato a la llamita blanca',
                'descripcion' => 'Pelicula Boliviana, sobre dos ladrones picaros',
                'estatus' => 'disponible',
                'imagen' => 'http://google.com',
                'video_ruta' => 'http://google.com',
                'usuario_id' => 1
            ]);
            DB::table('videos')->insert([
                'titulo' => 'Batman Asciende',
                'descripcion' => 'Pelicula DC',
                'estatus' => 'disponible',
                'imagen' => 'http://google.com',
                'video_ruta' => 'http://google.com',
                'usuario_id' => 2
            ]);DB::table('videos')->insert([
                'titulo' => 'Vengadores End Game',
                'descripcion' => 'Pelicula super heroes_: Marvel',
                'estatus' => 'disponible',
                'imagen' => 'http://google.com',
                'video_ruta' => 'http://google.com',
                'usuario_id' => 3
            ]);DB::table('videos')->insert([
                'titulo' => 'Alicia en el Pais de las Maravillas',
                'descripcion' => 'Pelicula sobre una niña soñando un mundo irreal',
                'estatus' => 'disponible',
                'imagen' => 'http://google.com',
                'video_ruta' => 'http://google.com',
                'usuario_id' => 4
            ]);DB::table('videos')->insert([
                'titulo' => 'Equalizer',
                'descripcion' => 'Justiciero Callejero',
                'estatus' => 'disponible',
                'imagen' => 'http://google.com',
                'video_ruta' => 'http://google.com',
                'usuario_id' => 5
            ]);
        
    }
}
