@extends('layouts.app')

@section('content')
{!! Form::open(['url' => '/categories']) !!}

    <formcaption>formulaire de creation d'une catégorie</formcaption><br />
    
    User Id: <input type="number" name="user_id"/><br />
    Titre: <input type="text" name="title"/><br />
    <input type="submit" value="valider" />
	
{!! Form::close() !!}
@endsection