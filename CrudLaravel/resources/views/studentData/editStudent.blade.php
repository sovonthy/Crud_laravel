<h1>hello edit form</h1>
@if ($errors->any())
    <ul>
        @foreach ($errors-> all() as $error)
    <li>{{$error}}</li>
        @endforeach
    </ul>
@endif
<form action="{{route('grud.update',$student ->id)}}" method="POST">
    @method('PUT')
    @csrf
<input type="text" value="{{$student ->Firstname}}" placeholder="firstname" name="firstname">
    <input type="text" value="{{$student ->Lastname}}" placeholder="lastname" name="lastname">
    <input type="text" value="{{$student ->Age}}" placeholder="age" name="age">
    <button type="submit">Save</button>
</form>
