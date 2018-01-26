@extends('layouts.app')

@section('content')
<div class="container">
<<<<<<< HEAD
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
=======
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
>>>>>>> 55e7bd583d1076e583f0a3d61e3a4e08e0ba55c8
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

<<<<<<< HEAD
                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 control-label">last_name</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
=======
                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-4 control-label">Last name</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
>>>>>>> 55e7bd583d1076e583f0a3d61e3a4e08e0ba55c8
                                    </span>
                                @endif
                            </div>
                        </div>

<<<<<<< HEAD
                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">first_name</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
=======

                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="firstname" class="col-md-4 control-label">First name</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
>>>>>>> 55e7bd583d1076e583f0a3d61e3a4e08e0ba55c8
                                    </span>
                                @endif
                            </div>
                        </div>

<<<<<<< HEAD
=======
                        <div class="form-group{{ $errors->has('user_type_id') ? ' has-error' : '' }}">
                            <label for="user_type_id" class="col-md-4 control-label">User type id</label>

                            <div class="col-md-6">
                                <input id="user_type_id" type="number" class="form-control" name="user_type_id" required>

                                @if ($errors->has('user_type_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_type_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
>>>>>>> 55e7bd583d1076e583f0a3d61e3a4e08e0ba55c8
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<<<<<<< HEAD
=======

>>>>>>> 55e7bd583d1076e583f0a3d61e3a4e08e0ba55c8
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 55e7bd583d1076e583f0a3d61e3a4e08e0ba55c8
