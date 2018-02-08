@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Vos liens: <p id="userName"></p></div>

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
                        <tbody id="userData">
                            {{--  @foreach($links as $link):
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
                            @endforeach  --}}
                        </tbody>
                    </table>

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
		url: "http://pinit.christopher.npc/api/users/{{ $user->id }}",
		type: "get",
		datatype: "json",
		success: function(data) {
            var row = "<tr>"
                        +"<td>" + data.id + "</td>"
                        + "<td>" + data.last_name + "</td>"   
                        + "<td>" + data.first_name + "</td>"   
                        + "<td>" + data.email + "</td>"   
                        + "<td>" + data.password + "</td>"   
                        + "<td>" + data.user_type_id + "</td>"   
                        + "<td>" + data.remember_token + "</td>"   
                        + "<td>" + data.created_at + "</td>"   
                        + "<td>" + data.updated_at + "</td>"
                        + "</tr>"; 

            $("#userName").html("'" + data.first_name + "'");    
            $("#userData").append(row);
		}
	});
});

</script>

@endsection