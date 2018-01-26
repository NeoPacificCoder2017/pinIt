{!! Form::open(['route' => array('link.update', $link->id), 'method' => 'put']) !!}

	<formcaption>formulaire de modification d'un lien</formcaption><br />
    
    {!! Form::label('url', 'Url') !!}
    {!! Form::text('url', $link->url) !!}

    {!! Form::label('title', 'Titre') !!}
    {!! Form::text('title', $link->title) !!}

    {!! Form::label('picture', 'Nom image') !!}
    {!! Form::text('picture', $link->picture) !!}

    {!! Form::label('category_id', 'Nom de la catégorie') !!}
    {!! Form::text('category_id', $link->category_id) !!}
    
    
    <input type="submit" value="valider" />

{!! Form::close() !!}