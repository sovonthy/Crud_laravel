<form action=" {{route('comment.store')}} " method="POST">
    @csrf
    <input type="text" placeholder="comment" name="comment">
    <button type="submit">Save</button>
</form>