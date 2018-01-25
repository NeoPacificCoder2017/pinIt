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
    <tbody>
    @foreach($users as $user):
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
            <td><a href="{{action('UserController@edit', $user->id)}}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                <a href="{{action('UserController@show', $user->id)}}"><button type="button" class="btn btn-primary btn-sm">show</button></a></td>
        </tr>
    @endforeach
    </tbody>
</table>