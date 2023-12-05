<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/solid.min.css">
</head>
<body bgcolor="pink">
    
<div class="container">

    <h1><u>Register Form</u></h1>
    <form action="{{url('/')}}/form" method="POST" class="form-group">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="{{old('name')}}">
        <span class="text-danger">
            @error('name')
                {{$message}}
            @enderror
        </span>
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" value="{{old('email')}}">
        <span class="text-danger">
            @error('email')
            {{$message}}
            @enderror
        </span>
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" value="{{old('password')}}">
        <span class="text-danger">
            @error('password')
            {{$message}}
            @enderror
        </span>
        <br><br>
        <input type="submit" name="submit" class="btn btn-success"  value="register">

    </form>
</div>


{{-- <div class="container"mt-5>
    <center>
    <h1>students records</h1>
</center>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($stddata as $value)
          <tr>
            <th scope="row">{{$value->id}}</th>
            <th scope="row">{{$value->name}}</th>
            <td>{{$value->email}}</td>
            <td>{{$value->password}}</td>
            <td><a href="{{url('/')}}/std/dlt/{{$value->id}}"><i class="fa-solid fa-xmark"></i></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>  --}}
</body>
</html>