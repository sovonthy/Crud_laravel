<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
@extends('layouts.app')

@section('content')
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Edit User</div>
    
                    <div class="card-body">
                        <form action="{{route('editUser',$users->id)}}" method="post">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" placeholder="name" value="{{$users->name}}" name="name">
                            </div>
                           <div class="form-group">
                               <label for="email">Email Address</label>
                               <input type="text" class="form-control" placeholder="email"  value="{{$users->email}}" name="email">
                           </div>
                           <div class="form-group">
                               <label for="phone">Phone</label>
                               <input type="text" class="form-control" placeholder="phone" value="{{$users->Profile->phone}}" name="phone">
                           </div>
                           <div class="form-group">
                               <label for="address">Address</label>
                               <input type="text" class="form-control" placeholder="address" value="{{$users->Profile->address}}" name="address">
                           </div>
                        
                          <button class="btn btn-primary" type="submit">Update</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection

</html>


