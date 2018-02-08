@extends('layouts.app')

@section('content')

<table>
    <caption>Liste des type d'utilisateurs</caption>
    <a href="{{action('UserTypeController@new')}}"><button type="button" class="btn btn-primary btn-sm">New</button></a>
    <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>actions</th>
        </tr>
    </thead>
    <tbody id="typesList">
    {{--  @foreach($userTypes as $userType):
        <tr>
            <td>{{$userType->id}}</td>
            <td>{{$userType->title}}</td>
            <td>{{$userType->created_at}}</td>
            <td>{{$userType->updated_at}}</td>
            <td><a href="{{action('UserTypeController@edit', $userType->id)}}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                <a href="{{action('UserTypeController@show', $userType->id)}}"><button type="button" class="btn btn-primary btn-sm">show</button></a></td>
        </tr>
    @endforeach  --}}
    </tbody>
</table>

@endsection

@section('script')

<script>

$(document).ready(function() {
	$.ajax({
		url: "http://pinit.christopher.npc/api/userTypes",
		type: "get",
		datatype: "json",
		success: function(datas) {
			datas.forEach(function(data) {
                var row = "<tr>"
                            +"<td>" + data.id + "</td>"
                            + "<td>" + data.title + "</td>"   
                            + "<td>" + data.created_at + "</td>"   
                            + "<td>" + data.updated_at + "</td>"
                            + "<td><a href='{{url('api/userTypes')}}/" + data.id +"/edit'><input type='submit' value='Modifier' /></a></td>";
                $("#typesList").append(row);
			});
		}
	});
});

</script>

@endsection