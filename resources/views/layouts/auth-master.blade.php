<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type='text/css' href="{{ url('/assets/bootstrap/bootstrap.min.css')}}">
    <title>Login</title>
    <style>
        body{
            width: 100%;
            height: 100vh;
            
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .container{
           width: 500px;

        }
    </style>
</head>
<body>
<main class='container'>
    @yield('content')
</main>

<script src="{{ url('assets/bootstrapJS/bootstrap.bundle.min.js') }}"></script>

</body>
</html>