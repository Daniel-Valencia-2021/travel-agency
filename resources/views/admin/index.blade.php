<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>

<body>
    <header>
        <h1>Dashboard</h1>
        <p>Welcome to the admin dashboard</p>

    </header>
    <a href="{{route('admin_paquetes')}}">Paquetes</a>
    <a href="{{route('admin_profesores')}}">Profesores</a>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color-scheme: light dark;
        }

        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</body>

</html>
