@extends('layout.master')
@php
    /* Si queremos hacer uso de logica PHP, podemos usar @php, que es mas facil
       de memorizar que la llamada tradicional */
    $date= now();
@endphp


@section('body')
    <div align="center">
        <div class="card d-inline-flex align-items-center justify-content-center" style="margin: 0 auto;">
            <div class="card-body">
                {{-- En este caso, basandonos en la tabla de Routing con resources (ver comentario en web.php),
                    hacemos uso del metodo POST en /infos, tal como se muestra en las rutas disponibles, definidas
                    en nuestro Routing (web.php) --}}
                <form method="POST" action="/infos">
                    {{-- csrf_field() es una funcion que debe ir en todos los forms,
                        esto debido a que es una medida de seguridad para evitar modificacion de
                        este mismo. --}}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="author">Autor</label>
                        {{-- Para que nuestro controlador pueda saber que valor otorgar a los atributos, debemos designar
                            un nombre e id a cada input, el cual debe ser exactamente el mismo al definido en el controlador --}}
                        <input type="text" class="form-control" name="author" id="author" placeholder="Pedro Perez">
                        </div>
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Título de la Noticia">
                    </div>
                    <div class="form-row">
                        <label for="category">Categorías</label>
                        <select id="category" class="form-control" name="category" required>
                            <option value="" disabled selected>Seleccione una categoría</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="body">Cuerpo</label>
                        <textarea class="form-control" name="body" id="body"></textarea>
                    </div>
                    <input id="date" name="date" type="hidden" value="{{$date}}">
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </form>
            </div>
        </div> 
    </div>
@endsection