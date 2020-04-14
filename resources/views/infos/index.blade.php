@extends('layout.master')

@section('body')
    <div class="container mt-3">
        <h2 class="text-center">Información</h2>
        <div class="row">
            <div class="card-deck d-flex justify-content-between">
                {{-- @foreach se usa para recorrer una lista de clases, en este caso, un conjunto de noticias,
                    para esto, se dice que para el (foreach) conjunto (plural) como una clase (singular),
                    se usa entonces adentro el singular, de poseer atributos, se usa singular->atributo --}}
                @foreach ($infos as $info)
                <div class="card mb-4" style="min-width: 18rem; max-width: 18rem;">
                    <h1 class="card-header">{{$info->title}}</h1>
                    <div class="card-body">
                        {{-- Todo lo que esté entre {{}} es interpretado como codigo PHP,
                            o tambien como el valor que posea la variable/atributo, en este caso
                            en el tag <h3> ira el nombre del autor de la noticia unica en el ciclo --}}
                        <h3>{{$info->author}}</h3>
                        <h5>{{$info->date}}</h5>
                        {{$info->body}}
                        <br><br>
                        <div class="btn-group">
                            <form action="/infos/{{$info->id}}/edit" method="GET">
                                {{-- csrf_field() es una funcion que debe ir en todos los forms,
                                    esto debido a que es una medida de seguridad para evitar modificacion de
                                    este mismo. --}}
                                {{csrf_field()}}
                                <button class="text-center btn btn-primary" style="margin:5px;" type="submit">Editar</button>
                            </form>  
                            <form method="POST" action="/infos/{{$info->id}}">
                                {{ csrf_field() }}
                                {{-- method_field se usa en los casos que el metodo sea distinto a GET o a POST --}}
                                {{ method_field('DELETE') }}
                                <div class="form-group">
                                    <button type="submit" style="margin:5px;" class="text-center btn btn-primary">Eliminar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <a href="/infos/create" type="button" style="margin-left: 50%; margin-right:50%; margin-top:5%;" class="text-center btn btn-primary">Agregar Noticia</a>
@endsection
