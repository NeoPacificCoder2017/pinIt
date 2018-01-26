@extends('layouts.app')

@section('content')
{!! Form::open(['route' => array('user.update', $user->id), 'method' => 'put']) !!}

	<formcaption>formulaire de modification d'un utilisateur</formcaption><br />
    last_name : <input type="text" name="last_name" value="{{$user->last_name}}" /><br />
    first_name : <input type="text" name="first_name" value="{{$user->first_name}}" /><br />
    email : <input type="mail" name="email" value="{{$user->email}}" /><br />
    password : <input type="password" name="password" value="{{$user->password}}" /><br />
    user_type_id : <input type="number" name="user_type_id" value="{{$user->user_type_id}}" /><br />
    remember_token : <input type="text" name="remember_token" value="{{$user->remember_token}}" /><br />
    <input type="submit" value="valider" />

{!! Form::close() !!}

@endsection