
@if ($errors->any())
    <ul>
        @foreach ($errors-> all() as $error)
    <li>{{$error}}</li>
        @endforeach
    </ul>
@endif
<form action="{{route('comment.update',$comment ->id)}}" method="POST">
    @method('PUT')
    @csrf
<input type="text" value="{{$comment ->comment}}" placeholder="comment" name="comment">
    
    <button type="submit">Save</button>
</form>
