<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type='text/css' href="">
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>
    @auth
        <p>Bienvenido {{ auth()->user()->name }} esta auntenticado</p>
    @endauth

    @guest
    
    @endguest
</body>
</html>