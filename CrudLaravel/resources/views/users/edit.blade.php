<form action="{{route('editUser',$users->id)}}" method="post">
      @method('put')
      @csrf
<input type="text" placeholder="name" value="{{$users->name}}" name="name">
    <input type="text" placeholder="email"  value="{{$users->email}}" name="email">
    <input type="text" placeholder="phone" value="{{$users->Profile->phone}}" name="phone">
    <input type="text" placeholder="address" value="{{$users->Profile->address}}" name="address">
    <button type="submit">Submit</button>
</form>