{!! Form::open(['url' => '/users']) !!}

	<formcaption>formulaire de creation d'une catégorie</formcaption><br />
    Titre: <input type="text" name="title" value="{{$category->title}}" /><br />
    <input type="submit" value="valider" />
	
{!! Form::close() !!}