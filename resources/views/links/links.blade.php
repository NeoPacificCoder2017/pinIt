<table>
        <caption>Liste des liens</caption>
        <button type="submit">
        <thead>
            <tr>
                <th>id</th>
                <th>url</th>
                <th>title</th>
                <th>user_id</th>
                <th>picture</th>
                <th>category_id</th>
                <th>created_at</th>
                <th>updated_at</th>
            </tr>
        </thead>
        <tbody>
        @foreach($links as $link):
            <tr>
                <td>{{$link->id}}</td>
                <td>{{$link->url}}</td>
                <td>{{$link->title}}</td>
                <td>{{$link->user_id}}</td>
                <td>{{$link->picture}}</td>
                <td>{{$link->category_id}}</td>
                <td>{{$link->created_at}}</td>
                <td>{{$link->updated_at}}</td>
                <td><a href="{{action('LinkController@edit', $link->id)}}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                    <a href="{{action('LinkController@show', $link->id)}}"><button type="button" class="btn btn-primary btn-sm">show</button></a></td>
            </tr>
        @endforeach
        </tbody>
     </table>