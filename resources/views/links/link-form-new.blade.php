{!! Form::open(['url' => '/links']) !!}

	<formcaption>formulaire de creation d'un liens</formcaption><br />

    {!! Form::label('url', 'Url') !!}
    
    {!! Form::text('url') !!}

    {!! Form::label('title', 'Titre') !!}
    
    {!! Form::text('title') !!}

    {!! Form::label('picture', 'Nom image') !!}
    
    {!! Form::text('picture') !!}

    {!! Form::label('categroy_id', 'Catégorie Id') !!}
    
    {!! Form::text('category_id') !!}

    {!! Form::submit('Valider') !!}
    
{!! Form::close() !!}