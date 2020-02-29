<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Action</th>
    </tr>
    @foreach ($users as $user)
    <tr>
    <td>{{$user->id}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->Profile->phone}}</td>
    <td>{{$user->Profile->address}}</td>
    <td>
        <a href="{{route('showFormEdit', $user->id)}}">Edit</a>
        <a href="">Delete</a>
    </td>
        </tr>
    @endforeach
   
</table>