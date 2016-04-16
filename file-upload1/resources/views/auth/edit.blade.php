@extends('layouts.app')

@section('content')
<h1 class="well well-lg">Edit User</h1>

{!! Form::model($user,['method' => 'PUT','url'=>['auth/edit',$user->id]]) !!}

<div class="form-group">
    {!! Form::label('Name', 'Name:') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Email', 'Email:') !!}
    {!! Form::text('email',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}
@endsection