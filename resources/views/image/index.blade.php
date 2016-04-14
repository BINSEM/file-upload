@extends('layouts.main')

<h1 class="well well-lg">Image list</h1>

@foreach( $images as $image )
<div class=""><a href="{!! '/images/'.$image->file_path !!}">{{$image->file_path . ' ' . $image->title}}</a></div>
<img src="{!! '/images/'.$image->file_path !!}">
@endforeach

@section('content')


@endsection