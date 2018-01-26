@extends('layouts.app')

@section('content')

{!! Form::open(['url' => '/userTypes']) !!}

	<formcaption>formulaire de creation d'un type d'utilisateur</formcaption><br />

    {!! Form::label('title', 'Titre') !!}
    
    {!! Form::text('title') !!}

    {!! Form::submit('Valider') !!}
    
{!! Form::close() !!}
@endsection