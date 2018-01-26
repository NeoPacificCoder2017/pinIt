@extends('layouts.app')

@section('content')

{!! Form::open(['route' => array('category.update', $category->id), 'method' => 'put']) !!}

	<formcaption>formulaire de modification d'une catégorie</formcaption><br />
    Titre: <input type="text" name="title" value="{{$category->title}}" /><br />
    
    <input type="submit" value="valider" />

{!! Form::close() !!}

@endsection