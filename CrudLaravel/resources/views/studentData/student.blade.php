<a href="{{route('grud.create')}} "><button>Add Student</button></a>
<table>
    <tr>
        <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
        <th>Action</th>
    </tr>

@foreach ($students as $student)
{{-- <li>{{$item -> id}}</li> --}}
<tr>
    <td>{{$student -> id}}</td>
    <td>{{$student -> Firstname}}</td>
    <td>{{$student -> Lastname}}</td>
    <td>{{$student -> Age}}</td>
    <td><a href="{{route('grud.edit',$student->id)}}"><button>Edit</button></a></td>
    <td>
        <form action="{{route('grud.destroy',$student->id)}}" method="POST">
            <button>Delete</button>
            @method('delete')
            @csrf
        </form>
    </td>
</tr>
@endforeach
</table>