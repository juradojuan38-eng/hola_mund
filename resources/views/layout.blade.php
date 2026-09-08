<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Animales</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f4f4f4; }
        table { border-collapse: collapse; width: 100%; background: white; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background: #333; color: white; }
        a.btn, button.btn { padding: 6px 12px; margin-right: 5px; text-decoration: none; border-radius: 4px; border: none; cursor: pointer; color: white; }
        .btn-edit { background: #2196F3; }
        .btn-delete { background: #f44336; }
        .btn-new { background: #4CAF50; display: inline-block; margin-bottom: 15px; }
        form.inline { display: inline; }
        input[type=text] { padding: 8px; width: 100%; margin-bottom: 10px; box-sizing: border-box; }
    </style>
</head>
<body>
    <h1>@yield('titulo')</h1>
    @yield('contenido')
</body>
</html>