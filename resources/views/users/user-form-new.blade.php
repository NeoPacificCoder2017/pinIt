@extends('layouts.app')

@section('content')

{!! Form::open(['url' => '/users']) !!}

	<formcaption>formulaire de creation d'un utilisateur</formcaption><br />

    
    {!! Form::label('last_name', 'last_name') !!}<br />    
    {!! Form::text('last_name') !!}
  
    first_name : <input type="text" name="first_name"/><br />
    email : <input type="mail" name="email"/><br />
    password : <input type="password" name="password"/><br />
    user_type_id : <input type="number" name="user_type_id"/><br />
    remember_token : <input type="text" name="remember_token"/><br />
    <input type="submit" value="valider" />
	
{!! Form::close() !!}

@endsection