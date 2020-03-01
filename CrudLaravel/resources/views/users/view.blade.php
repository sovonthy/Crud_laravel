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
            <th>#</th>
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
            <a href="{{route('', $user->id)}}">Delete</a>
        </td>
            </tr>
        @endforeach
       
    </table>
</body>
@endsection

</html>
