<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Body</th>
        <th>Action</th>
    </tr>
    @foreach ($users->posts as $user)
    <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->title}}</td>
            <td>{{$user->body}}</td>
            <td>
                <a href="{{route('posts.edit', $user->id)}}">Edit</a>
            <form action="{{route('posts.destroy', $user->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" >Delete</button>
                </form>
            </td>
            </tr>
    @endforeach
    
</table>