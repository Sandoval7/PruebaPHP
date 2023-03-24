<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type='text/css' href="">
    <title>Login</title>
</head>
<body>
@extends('layouts.auth-master')

@section('content')
        <form action="/login" method='POST'>
            @csrf
            <h1>Login</h1>
            @include('layouts.partials.messages')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username / Email address</label>
                <input type="text" name='name' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name='password' class="form-control" id="exampleInputPassword1">
            </div>
            <div class='mb-3'>
                <a href="/register">Create account</a>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

@endsection

</body>
</html>