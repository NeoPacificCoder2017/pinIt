@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ajouter un utilisateur</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('user.apiStore') }}">
                        {{ csrf_field() }}

                        {{--  <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">  --}}
                            <label for="last_name" class="col-md-4 control-label">Nom</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                {{--  @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif  --}}
                            </div>
                        {{--  </div>  --}}

                        {{--  <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">  --}}
                            <label for="first_name" class="col-md-4 control-label">Prénom</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                {{--  @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif  --}}
                            </div>
                        {{--  </div>  --}}

                        {{--  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">  --}}
                            <label for="email" class="col-md-4 control-label">Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                {{--  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif  --}}
                            </div>
                        {{--  </div>  --}}

                        {{--  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">  --}}
                            <label for="password" class="col-md-4 control-label">Mot de passe</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                {{--  @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif  --}}
                            </div>
                        {{--  </div>  --}}

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmer votre mot de passe</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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

@section('script')
<script>

$(function(){

    /* $('#register').click(function() {
        $('#myModal').modal();
    }); */

    $(document).on('submit', '#formRegister', function(e) {  
        e.preventDefault();
         
        /* $('input+small').text('');
        $('input').parent().removeClass('has-error'); */
         
        $.ajax({
            method: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize(),
            dataType: "json"
        });
        /* .done(function(data) {
            $('.alert-success').removeClass('hidden');
            $('#myModal').modal('hide');
        })
        .fail(function(data) {
            $.each(data.responseJSON, function (key, value) {
                var input = '#formRegister input[name=' + key + ']';
                $(input + '+small').text(value);
                $(input).parent().addClass('has-error');
            }); */
        });
    });


</script>
@endsection