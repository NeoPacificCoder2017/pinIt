@section('test')
{!! Form::open(['route' => array('links.destroy', $link->id), 'method' => 'delete']) !!}
<table>
    <caption>Lien à modifier: {{$link->title}}</caption>
    
    <thead>
        <tr>
            <th>title</th>
            <th>picture</th>
            <th>category</th>
            <th colspan='2'>actions</th>
        </tr>
    </thead>
    <tbody>
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
        </tr>
    </tbody>
</table>

{!! Form::submit('delete') !!}
 
{!! Form::close() !!}

@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lien à modifier: {{$link->title}}</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('links.update', $link) }}">
                    {{ csrf_field('PUT') }}

                        <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                            <label for="url" class="col-md-4 control-label">Url</label>

                            <div class="col-md-6">
                                 <input id="url" type="url" class="form-control" name="url" value="{{$link->url}}" required autofocus>

                                @if ($errors->has('url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('url') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Titre</label>

                            <div class="col-md-6">
                                 <input id="title" type="text" class="form-control" name="title" value="{{$link->title}}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                            <label for="category_id" class="col-md-4 control-label">Categorie</label>

                            <div class="col-md-6">
                                 <input id="url" type="url" class="form-control" name="url" value="{{$link->category()->first()->title}}" required autofocus>

                                @if ($errors->has('url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('url') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Valider
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection