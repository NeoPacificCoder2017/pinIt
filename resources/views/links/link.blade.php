{!! Form::open(['route' => array('links.destroy', $link->id), 'method' => 'delete']) !!}
<table>
    <caption>Lien à modifier: {{$link->title}}</caption>
    
    <thead>
        <tr>
            <th>title</th>
            <th>picture</th>
            <th>category</th>
            <th colspan='2'>actions</th>
        </tr>
    </thead>
    <tbody>
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
        </tr>
    </tbody>
</table>

{!! Form::submit('delete') !!}
 
{!! Form::close() !!}