@extends('layouts.app')

@section('content')
<table>
    <caption>Liste des utilisateurs</caption>
    <a href="{{action('UserController@new')}}"><button type="button" class="btn btn-primary btn-sm">New</button></a>
    <thead>
        <tr>
            <th>id</th>
            <th>last_name</th>
            <th>first_name</th>
            <th>email</th>
            <th>password</th>
            <th>user_type_id</th>
            <th>remember_token</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>actions</th>
        </tr>
    </thead>
    <tbody id="usersList">
    {{--  @foreach($users as $user):
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->first_name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->user_type_id}}</td>
            <td>{{$user->remember_token}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
            <td>
                {!! Form::open(['action' => array('UserController@edit', $user->id), 'method' => 'get']) !!}            
                {!! Form::submit('Modifier') !!}                        
                {!! Form::close() !!}

                {!! Form::open(['action' => array('UserController@show', $user->id), 'method' => 'get']) !!}            
                {!! Form::submit('Voir') !!}                        
                {!! Form::close() !!}
                
                {!! Form::open(['action' => array('UserController@destroy', $user->id), 'method' => 'delete']) !!}
                {!! Form::submit('Supprimer') !!}                            
                {!! Form::close() !!}
                                    </td>
        </tr>
    @endforeach  --}}
    </tbody>
</table>

@endsection

@section('script')

<script>

$(document).ready(function() {
	$.ajax({
		url: "http://pinit.christopher.npc/api/users",
		type: "get",
		datatype: "json",
		success: function(datas) {
			datas.forEach(function(data) {
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
                            + "<td><a href='{{url('api/users')}}/" + data.id +"/show'><input type='submit' value='Voir' /></a></td>"
                            + "<td><a href='{{url('api/users')}}/" + data.id +"/edit'><input type='submit' value='Modifier' /></a></td>";
                $("#usersList").append(row);
			});
		}
	});
});

</script>

@endsection