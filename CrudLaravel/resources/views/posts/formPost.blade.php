<form action="{{route('posts.store')}}" method="post">
    @csrf
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="body" placeholder="Body">
    <button type="submit">Add</button>
</form>