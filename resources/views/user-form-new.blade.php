{!! Form::open(['url' => '/users']) !!}

	<formcaption>formulaire de creation d'un utilisateur</formcaption><br />
    last_name : <input type="text" name="last_name"/><br />
    first_name : <input type="text" name="first_name"/><br />
    email : <input type="mail" name="email"/><br />
    password : <input type="password" name="password"/><br />
    user_type_id : <input type="number" name="user_type_id"/><br />
    remember_token : <input type="text" name="remember_token"/><br />
    <input type="submit" value="valider" />
	
{!! Form::close() !!}