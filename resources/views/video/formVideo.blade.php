@extends ('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <form action="{{url('/guardar-video')}}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!} 
                <h1>
                    Formulario Subir Video
                </h1>
                <hr>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $errorAlfred)
                                <li>
                                    {{
                                        $errorAlfred
                                    }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <label for="title">titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo"/>
                </div>
                <div class="form-group">
                    <label for="title">descripcion</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion"/>
                </div>
                <div class="form-group">
                    <label for="title">imagen</label>
                    <input type="file" class="form-control" id="imagen" name="imagen"/>
                </div>
                <div class="form-group">
                    <label for="title">direccion del video</label>
                    <input type="file" class="form-control" id="ruta_imagen" name="ruta_imagen"/>
                </div>

                <button type="submit" class="btn btn-success">Guardar</button>
            </form>
        </div>
    </div>
@endsection