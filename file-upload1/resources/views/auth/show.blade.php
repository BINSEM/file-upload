@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.

                    <h1>User</h1>

                    <form class="form-horizontal">
                        <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" placeholder={{$user->name}} readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder={{$user->email}} readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <a href="{{url('auth/edit',$user->id)}}" class="btn btn-primary">Edit</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
