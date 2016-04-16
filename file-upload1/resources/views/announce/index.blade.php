@extends('layouts.main')

@section('content')

<h1>Announces</h1>
<a href="{{url('/announce/create')}}" class="btn btn-success">Create Announce</a>
<hr>
<table class="table table-striped table-bordered table-hover">
	<thead>
		<tr class="bg-info">
			<th>Id</th>
			<th>Title</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($announce as $announce)
		<tr>
			<td>{{ $announce->id }}</td>
			<td>{{ $announce->title }}</td>
			<td>{{ $announce->description }}</td>
			<td><a href="{{url('announce/show',$announce->id)}}" class="btn btn-primary">View</a></td>
			<td>
				{!! Form::open(['method' => 'DELETE', 'url'=>['announce/destroy/{id}']]) !!}
				{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
				{!! Form::close() !!}
			</td>
		</tr>
		@endforeach

	</tbody>

</table>

@endsection