{!! Form::open(['route' => array('userType.destroy', $userType->id), 'method' => 'delete']) !!}
 {{!! dump($userType) !!}}
 
 
 {!! Form::submit('delete') !!}
 

{!! Form::close() !!}