<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type='text/css' href=" {{ asset('assets/register/register.css') }} ">
    <title>Document</title>
</head>
<body>
    <div class='container'>
        <form action="/register" method='POST'>
            @csrf
            <h1>REGISTER</h1>
            <p>Gmail</p>
            <input type="email" name='email' value=''>
            <p>Username</p>
            <input type="text" name='name' value=''>
            <p>Password</p>
            <input type="password" name='password' value=''>
            <p>Repeat Password</p>
            <input type="password" name='password_confirmation' value=''>
            <div class='btnSpace'> 
                <button type='submit'>Submit</button>
            </div>
            <a href="/login">Login</a>
        </form>
    </div>
</body>
</html>