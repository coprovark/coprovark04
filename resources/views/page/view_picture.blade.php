@extends('layouts.main')
@section('content')

@foreach($list as $show)
<center>
    <h3>{{$show->picture_OriginalName}}</h3><br>
    <img src="{{asset("$show->Gallery_name/".$show->picture_Path) }}" width="70%" height="70%">
</center>

<h3>
    ขนาดรูปภาพ {{$show->picture_Size}} KB
    <a href="/download/{{$show->picture_id}}" class="btn btn-default" target="new"><h4>Download</h4></a>
</h3>
@endforeach
@endsection