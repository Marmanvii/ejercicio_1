@php
    $date= now();
@endphp
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
        <div class="card d-inline-flex align-items-center justify-content-center" style="margin: 0 auto;">
            <div class="card-body">
                <form method="POST" action="/infos/{{$info->id}}">
                @method('PUT')
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="author">Autor</label>
                        <input type="text" class="form-control" name="author" id="author" value="{{ $info->author }}" >
                        </div>
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ $info->title }}">
                    </div>
                    <div class="form-group">
                        <label for="body">Cuerpo</label>
                        <textarea class="form-control" name="body" id="body">{{ $info->body }}</textarea>
                    </div>
                    <input id="date" name="date" type="hidden" value="{{$date}}">
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </form>
            </div>
        </div> 
    </body>

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</html>