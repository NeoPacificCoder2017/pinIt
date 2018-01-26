@extends('layouts.app')

@section('content')<table>
    <caption>Liste des utilisateurs</caption>
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
    <tbody>
    @foreach($userTypes as $userType):
        <tr>
            <td>{{$userType->id}}</td>
            <td>{{$userType->title}}</td>
            <td>{{$userType->created_at}}</td>
            <td>{{$userType->updated_at}}</td>
            <td><a href="{{action('UserTypeController@edit', $userType->id)}}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                <a href="{{action('UserTypeController@show', $userType->id)}}"><button type="button" class="btn btn-primary btn-sm">show</button></a></td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection