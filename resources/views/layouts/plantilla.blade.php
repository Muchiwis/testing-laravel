<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>
<body>
    <h1>Aprendiendo con Laravel</h1>
    <main>
        @yield('contenido')
    </main>
    <div>
        @yield('title_profesor')
    </div>
    <div>
        @yield('formulario')
    </div>
    <div>
        @yield('form_actualizar')
    </div>
</body>
</html>