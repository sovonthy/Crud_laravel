<link rel="stylesheet" href="../../js/bootstrap.js">
<link rel="stylesheet" href="../../../public/css/app.css">
<a class="btn btn-info" href="{{route('comment.create')}} "><button>Add Comment</button></a>
<table class="table table-dark">
    <tr>
        <th>ID</th>
        <th>Comment</th>
        <th>Action</th>
    </tr>

@foreach ($comments as $value)
{{-- <li>{{$item -> id}}</li> --}}
<tr>
    <td>{{$value -> id}}</td>
    <td>{{$value -> comment}}</td>
    <td><a href="{{route('comment.edit',$value->id)}}"><button>Edit</button></a></td>
    <td>
        <form action="{{route('comment.destroy',$value->id)}}" method="POST">
            <button>Delete</button>
            @method('delete')
            @csrf
        </form>
    </td>
</tr>
@endforeach
</table>