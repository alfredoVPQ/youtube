<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;


class VideoController extends Controller
{
    public function formVideo(){
        return View("video.formVideo");
    }

    public function guardarVideo(Request $carga){
        $validar=$this->validate($carga, [
            'titulo'=>'required | min:5',
            'descripcion'=>'required',
            //'ruta_imagen'=>'mimes:mp4'
        ]);
        $usuario=\Auth::user();
        $video = new Video();
        $video->usuario_id=$usuario->id;
        $video->titulo=$carga->input('titulo');
        $video->descripcion=$carga->input('descripcion');
        $video->estatus='test_estado';
        $video->video_ruta='test_ruta';
        $cargaImagen=$carga->file('imagen');
        var_dump($video);
            // if($cargaImagen){
            //     $nombreRuta=$cargaImagen->getClientOriginalName();
            //     \Storage::disk('carpeta_imagen')->put($nombreRuta,\File::get($cargaImagen));
            //     $video->imagen=$nombreRuta;
            // } 

        //$video->save();
//        var_dump($carga);
        // return redirect()->route('home')->with(array(
        //     'message'=>'el video se ha guardado'
        // ));
    }
}
