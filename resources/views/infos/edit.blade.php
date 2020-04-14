@extends('layout.master')

@php
    $date= now();
@endphp

@section('body')
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
@endsection