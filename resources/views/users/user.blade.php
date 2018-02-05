@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Vos liens: {{$user->first_name}}</div>

                <div class="panel-body">
                    <table>                        
                        <thead>
                            <tr>
                                <th>title</th>
                                <th>picture</th>
                                <th>category</th>
                                <th colspan='3'>actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($links as $link):
                                <tr>
                                    <td>{{$link->title}}</td>
                                    <td>{{$link->picture}}</td>
                                    <td>{{$link->category()->first()->title}}</td>
                                    <td>{!! Form::open(['url' => '$link->url']) !!}
                                        {!! Form::submit('Visiter') !!}                            
                                        {!! Form::close() !!}</td>
                                    <td>{!! Form::open(['action' => array('LinkController@edit', $link->id), 'method' => 'get']) !!}
                                        {!! Form::submit('Modifier') !!}                            
                                        {!! Form::close() !!}</td>
                                    <td>{!! Form::open(['action' => array('LinkController@destroy', $link->id), 'method' => 'delete']) !!}
                                        {!! Form::submit('Supprimer') !!}                            
                                        {!! Form::close() !!}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection