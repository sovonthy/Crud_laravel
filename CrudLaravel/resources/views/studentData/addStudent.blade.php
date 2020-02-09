<form action=" {{route('grud.store')}} " method="POST">
    @csrf
    <input type="text" placeholder="firstname" name="firstname">
    <input type="text" placeholder="lastname" name="lastname">
    <input type="text" placeholder="age" name="age">
    <button type="submit">Save</button>
</form>