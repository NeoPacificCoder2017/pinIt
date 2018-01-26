{!! Form::open(['route' => array('userType.update', $userType->id), 'method' => 'put']) !!}

	<formcaption>formulaire de modification d'un type d'utilisateur</formcaption><br />
    
    {!! Form::label('title', 'Titre') !!}
    
    {!! Form::text('title', $userType->title) !!}
    
    
    <input type="submit" value="valider" />

{!! Form::close() !!}