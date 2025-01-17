<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        footer {
            text-align: center;
            padding: 3px;
            background-color: #333;
            color: #04AA6D;
        }

        
        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>
    <div class="topnav">
        <a class="active" href="#Inicio">Inicio</a>
        <a href="#Productos">Productos</a>
        <a href="#Contacto">Contacto</a>
    </div>

    <div style="padding-left:16px">
        @yield('content')
    </div>

    <footer>
        <p>B3-22 - FRAMEWORK Y PROGRAMACIÓN WEB - IC207IECIREOL<br>
            <h2>Sección 50</h2>
        </p>
    </footer>

</body>

</html>