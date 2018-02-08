@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modifier un type d'utilisateur</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('userType.apiUpdate', $userType) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        {{--  <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">  --}}
                            <label for="title" class="col-md-4 control-label">Titre</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                                {{--  @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif  --}}
                            </div>
                        {{--  </div>  --}}

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Valider
                                </button>
                            </div>
                        </div>
                    </form>

                    
                    {!! Form::open(['action' => array('UserTypeController@apiDestroy', $userType), 'method' => 'delete']) !!}
                    {!! Form::submit('Supprimer') !!}                    
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

<script>

$(document).ready(function() {
	$.ajax({
		url: "http://pinit.christopher.npc/api/userTypes/{{ $userType->id }}",
		type: "get",
		datatype: "json",
		success: function(data) {
            $("#title").attr('value', data.title);
		}
	});
});

</script>

@endsection