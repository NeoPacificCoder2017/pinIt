{!! Form::open(['route' => array('user.destroy', $user->id), 'method' => 'delete']) !!}
 {{!! dump($user) !!}}
 
 
 {!! Form::submit('delete') !!}
 

{!! Form::close() !!}
