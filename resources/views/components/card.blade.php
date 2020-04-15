<div class="card mb-4" style="min-width: 18rem; max-width: 18rem;">
    <h1 class="card-header">{{$title}}</h1>
    <div class="card-body">
        {{-- Todo lo que esté entre {{}} es interpretado como codigo PHP,
            o tambien como el valor que posea la variable/atributo, en este caso
            en el tag <h3> ira el nombre del autor de la noticia unica en el ciclo --}}
        <h3>{{$author}}</h3>
        <h5>{{$date}}</h5>
        {{$body}}
        <br><br>
        <div class="btn-group">
            <form action="/infos/{{$id}}/edit" method="GET">
                {{-- csrf_field() es una funcion que debe ir en todos los forms,
                    esto debido a que es una medida de seguridad para evitar modificacion de
                    este mismo. --}}
                {{csrf_field()}}
                <button class="text-center btn btn-primary" style="margin:5px;" type="submit">Editar</button>
            </form>  
            <form method="POST" action="/infos/{{$id}}">
                {{ csrf_field() }}
                {{-- method_field se usa en los casos que el metodo sea distinto a GET o a POST --}}
                {{ method_field('DELETE') }}
                <div class="form-group">
                    <button type="submit" style="margin:5px;" class="text-center btn btn-danger">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
</div>