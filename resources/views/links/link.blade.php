{{--  @extends('layouts.app')

@section('content')  --}}

{!! Form::open(['route' => array('link.destroy', $link->id), 'method' => 'delete']) !!}
 {{!! dump($link) !!}}
 
 
 {!! Form::submit('delete') !!}
 

{!! Form::close() !!}

{{--  @endsection  --}}