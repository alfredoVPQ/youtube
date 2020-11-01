<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comentarios')->insert([
            'contenido' => 'la mejor pelicula nacional',
            'usuario_id' => 1,
            'video_id' => 1,
        ]);
        DB::table('comentarios')->insert([
            'contenido' => 'no supera a Mi socio',
            'usuario_id' => 2,
            'video_id' => 1,
        ]);
        
        DB::table('comentarios')->insert([
            'contenido' => 'esta en mi top 5 de peliculas nacionales favoritas',
            'usuario_id' => 3,
            'video_id' => 1,

        ]);
        
        DB::table('comentarios')->insert([
            'contenido' => 'es mejor leer los comics',
            'usuario_id' => 1,
            'video_id' => 2,
        ]);
        
        DB::table('comentarios')->insert([
            'contenido' => 'esta buena cuando salva a la ciudad de Bein',
            'usuario_id' => 1,
            'video_id' => 2,

        ]);
        
        DB::table('comentarios')->insert([
            'contenido' => 'nunca superaran a esta Pelicula',
            'usuario_id' => 3,
            'video_id' => 3,
        ]);
        
        DB::table('comentarios')->insert([
            'contenido' => 'que genial es ver a todos los vengadores juntos',
            'usuario_id' => 1,
            'video_id' => 3,
        ]);
        DB::table('comentarios')->insert([
            'contenido' => 'porque muere Tony Stark nooooo!!!',
            'usuario_id' => 5,
            'video_id' => 3,
        ]);
        
        DB::table('comentarios')->insert([
            'contenido' => 'la pelicula en dibujitos es mas graciosa',
            'usuario_id' => 1,
            'video_id' => 3,
        ]);

        DB::table('comentarios')->insert([
            'contenido' => 'esta pelicula le gusto a mi esposa',
            'usuario_id' => 4,
            'video_id' => 3,
        ]);
    }
}
