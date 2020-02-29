<form action="{{route('posts.update', $post->id)}}" method="post">
@method('patch')
@csrf
<input type="text" name="title" value="{{$post->title}}" placeholder="title">
<input type="text" name="body" value="{{$post->body}}" placeholder="body">
<button type="submit">Submit</button>
</form>