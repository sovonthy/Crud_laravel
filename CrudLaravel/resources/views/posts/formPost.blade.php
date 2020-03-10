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


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Edit Post</div>

                <div class="card-body">
                    <form action="{{route('posts.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input class="form-control" type="text" name="title" placeholder="Title">
                        </div>
                      <div class="form-group">
                          <label for="body">Body</label>
                          <input class="form-control" type="text" name="body" placeholder="Body">
                      </div>
                       
                        <button class="btn btn-info" type="submit">Add</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection

</html>