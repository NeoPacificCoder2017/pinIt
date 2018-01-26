{!! Form::open(['route' => array('category.destroy', $user->id), 'method' => 'delete']) !!}
 {{!! dump($category) !!}}
 
 
 {!! Form::submit('delete') !!}
 

{!! Form::close() !!}