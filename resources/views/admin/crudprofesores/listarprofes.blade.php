<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD-PORFESORES</title>
</head>
<body>
<header>
    <h1>LISTADO DE PROFESORES</h1>

    <a href="{{route('dashboard')}}">Volver</a>
</header>
    <a href="##">CREAR NUEVO PROFESOR</a>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>FOTO</td>
            <td>NOMBRE</td>
            <td>EXPERIENCIA</td>
        </tr>
        @foreach ($profes as $profesor)
            <tr>
                <td>{{ $profesor->id }}</td>
                <td>
                    <img src="$profesor->foto" alt="{{$profesor->nombre}}">
                </td>
                <td>{{ $profesor->nombre }}</td>
                <td>{{ $profesor->experiencia }} AÑOS</td>
                <td>
                    <a href="##">EDITAR</a>
                    <form action="#" method="POST">
                        <button type="submit">ELIMINAR</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        header{
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem;
        }
        a{
            display: block;
            width: 100px;
            margin: 1rem auto;
            text-align: center;
            text-decoration: none;
            background-color: #333;
            color: white;
            padding: .5rem;
        }
        table{
            width: 80%;
            margin: 1rem auto;
            border-collapse: collapse;
        }
        td, th{
            padding: .5rem;
            text-align: center;
        }
        tr:nth-child(odd){
            background-color: #f2f2f2;
        }
        tr:nth-child(even){
            background-color: #ddd;
        }
        button{
            background-color: red;
            color: white;
            padding: .5rem;
            border: none;
            cursor: pointer;
        }

        img{
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
    </style>
</body>
</html>