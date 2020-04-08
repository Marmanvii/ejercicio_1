<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        {{-- Boostrap --}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
        <title>Noticias</title>

    </head>
    <body>
        <div class="container mt-3">
            <h2 class="text-center">Información</h2>
            <div class="row">
                <div class="card-deck d-flex justify-content-between">
                    @foreach ($infos as $info)
                    <div class="card mb-4" style="min-width: 18rem; max-width: 18rem;">
                        <h1 class="card-header">{{$info->title}}</h1>
                        <div class="card-body">
                            <h3>{{$info->author}}</h3>
                            <h5>{{$info->date}}</h5>
                            {{$info->body}}
                            <br><br>
                            <div class="btn-group">
                                <button href="/infos/edit" type="button" style="margin:5px;" class="text-center btn btn-primary">Editar</button>
                                <form method="POST" action="/infos/{{$info->id}}">
                                    {{ csrf_field() }}
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
    </body>

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</html>
