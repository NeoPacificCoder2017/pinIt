@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lien à modifier: {{$link->title}}</div>

                <div class="panel-body">
                    <form id="formEdit" class="form-horizontal" method="POST" action="{{ route('link.update', $link) }}">
                    {{ csrf_field('') }}
                    {{ method_field('PUT') }}

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

                        <div class="form-group{{ $errors->has('picture') ? ' has-error' : '' }}">
                            <label for="picture" class="col-md-4 control-label">Picture</label>

                            <div class="col-md-6">
                                 <input id="picture" type="text" class="form-control" name="picture" value="{{$link->picture}}" required autofocus>

                                @if ($errors->has('picture'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('picture') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('listOfCategory') ? ' has-error' : '' }}">
                            <label for="listOfCategory" class="col-md-4 control-label">Categorie</label>

                            <div class="col-md-6">
                                 <select name='listOfCategory' class="form-control">
                                     @foreach($categories as $category)
                                        @if($category->id == $link->category_id)
                                            <option value="{{$category->id}}" id="{{$category->id}}" selected>{{$category->title}}</option>
                                        @else
                                            <option value="{{$category->id}}" id="{{$category->id}}">{{$category->title}}</option>
                                        @endif
                                    @endforeach
                                </select>

                                @if ($errors->has('listOfCategory'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('listOfCategory') }}</strong>
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

@section('script')
<script>

$(function(){

    /* $('#register').click(function() {
        $('#myModal').modal();
    }); */

    $(document).on('submit', '#formEdit', function(e) {  
        e.preventDefault();
         
        /* $('input+small').text('');
        $('input').parent().removeClass('has-error'); */
         
        $.ajax({
            method: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize(),
            dataType: "json",
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

})

</script>
@endsection