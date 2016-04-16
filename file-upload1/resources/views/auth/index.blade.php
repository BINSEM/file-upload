@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Welcome</div>

				<div class="panel-body">
					Your Application's Landing Page.

					<h1>Users</h1>

					<hr>
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr class="bg-info">
								<th>Id</th>
								<th>Name</th>
								<th>Email</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($user as $user)
							<tr>
								<td>{{ $user->id }}</td>
								<td>{{ $user->name }}</td>
								<td>{{ $user->email }}</td>
								<td><a href="{{url('auth/show', $user->id)}}" class="btn btn-primary">View</a></td>
								<td>
									{!! Form::open(['method' => 'DELETE', 'url'=>['auth/destroy']]) !!}
									{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
									{!! Form::close() !!}
								</td>
								<td>
									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
											<a href="{{url('auth/edit',$user->id)}}" class="btn btn-primary">Edit</a>
										</div>
									</div>
								</td>
							</tr>
							@endforeach

						</tbody>

					</table>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection