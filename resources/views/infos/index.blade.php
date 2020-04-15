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
                    <x-card 
                        :title="$info->title" 
                        :author="$info->author" 
                        :date="$info->date" 
                        :body="$info->body"
                        :id="$info->id"
                    />
                @endforeach
            </div>
        </div>
    </div>
    <a href="/infos/create" type="button" style="margin-left: 50%; margin-right:50%; margin-top:5%;" class="btn btn-primary">Agregar Noticia</a>
@endsection
