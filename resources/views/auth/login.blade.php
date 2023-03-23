<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type='text/css' href=" {{ asset('assets/login/login.css') }} ">
    <title>Document</title>
</head>
<body>
    <div class='container'>
        <form action="/login" method='post'>
            @csrf
            <h1>LOGIN</h1>
            <p>Username</p>
            <input type="text" name='name'>
            <p>Password</p>
            <input type="password" name='password'>
            <div class='btnSpace'> 
                <button type='submit'>Submit</button>
            </div>
            <a href="/register">Register</a>
        </form>
    </div>
</body>
</html>