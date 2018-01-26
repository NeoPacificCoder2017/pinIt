{!! Form::open(['url' => '/categories']) !!}

	<formcaption>formulaire de creation d'une catégorie</formcaption><br />
    Titre: <input type="text" name="title"/><br />
    <input type="submit" value="valider" />
	
{!! Form::close() !!}