<table>
    <caption>Liste des utilisateurs</caption>
    
    <thead>
        <tr>
            <th>id</th>
            <th>last_name</th>
            <th>first_name</th>
            <th>email</th>
            <th>password</th>
            <th>user_type_id</th>
            <th>created_at</th>
            <th>updated_at</th>
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
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
        </tr>
    @endforeach
    </tbody>
</table>