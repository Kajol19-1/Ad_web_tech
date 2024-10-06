<table border="1">
        <tr>
             <th>Id</th>
            <th>Name</th>
            <th>Image</th>
           
            {{@csrf_field()}}
        </tr>
        @foreach($stds as $s)
            <tr>
            <td><a href="{{route('details',['id'=>$s->id])}}">{{$s->id}}</a></td>
                
                <td>{{$s->name}}</td>
                <td>{{$s->image}}</td>
            </tr>
        @endforeach
    </table>
    