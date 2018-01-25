{!! Form::open(['route' => array('link.destroy', $link->id), 'method' => 'delete']) !!}
 {{!! dump($link) !!}}
 
 {!! Form::submit('delete') !!}
 

{!! Form::close() !!}