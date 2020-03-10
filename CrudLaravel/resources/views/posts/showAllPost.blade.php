<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User lists</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
@extends('layouts.app')

@section('content')
<body>
<table class="table table-bordered">
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
                <a class="btn btn-info" href="{{route('posts.edit', $user->id)}}">Edit</a>
            <form action="{{route('posts.destroy', $user->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" type="submit" >Delete</button>
                </form>
            </td>
            </tr>
    @endforeach
    
</table>
</body>
@endsection

</html>
