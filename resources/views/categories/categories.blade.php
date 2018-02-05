{!! Form::label('listOfCategory', 'Filtrer par categorie') !!}
<select name='listOfCategory' onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);" class="form-control">
    <option value="{{route('link.index')}}">Toutes les catégories</option>
    @foreach($categories as $category)
    <option value="{{route('link.getLinksByCategory', $category->id)}}" id="{{$category->id}}">{{$category->title}}</option>
    @endforeach
</select>

@section('listOfCategory')
<table>
        <caption>Liste des catégories</caption>
        <a href="{{action('CategoryController@new')}}"><button type="button" class="btn btn-primary btn-sm">New</button></a>
        <thead>
            <tr>
                <th>id</th>
                <th>user_id</th>
                <th>title</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categories as $category):
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->user_id}}</td>
                <td>{{$category->title}}</td>
                <td>{{$category->created_at}}</td>
                <td>{{$category->updated_at}}</td>
                <td><a href="{{action('CategoryController@edit', $category->id)}}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                    <a href="{{action('CategoryController@destroy', $category->id)}}"><button type="button" class="btn btn-primary btn-sm">Delete</button></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection  