@extends('layouts.main')


<h1 class="well well-lg">Images</h1>
<div class="container">
    @if(isset($success))
    <div class="alert alert-success"> {{$success}} </div>
    @endif

    <div>
        <h3>{{ $images->title }}</h3>
        <p>{{ $images->description }}</p>
        <img src="{{ $images->image }}">
    </div>

    <div class="alert-warning">
        @foreach( $errors->all() as $error )
        <br> {{ $error }}
        @endforeach
    </div>
</div>

@section('content')


@endsection