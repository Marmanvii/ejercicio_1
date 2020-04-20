@foreach ($infos as $info)
    -> <b>{{$info->title}}</b> <br>
    {{$info->author}} <br>
    {{$info->date}} <br>
    {{$info->body}} <br>
    <br>
    <br>
@endforeach