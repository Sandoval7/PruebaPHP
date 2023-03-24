<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type='text/css' href="">
    <title>Register</title>
</head>
<body>
@extends('layouts.auth-master')
@section('content')
    <form action="/register" method='POST'>
            @csrf
            <h1>Create account</h1>
            @include('layouts.partials.messages')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Username</label>
                <input type="text" name='name' class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name='password' class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                <input type="password" name='password_confirmation' class="form-control" id="exampleInputPassword1">
            </div>
            <div class='mb-3'>
                <a href="/login">Yo have account?</a>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@endsection

</body>
</html>