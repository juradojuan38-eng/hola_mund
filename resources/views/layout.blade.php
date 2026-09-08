<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Animales</title>
        <style>
            body {
                font-family: 'Segoe UI', Arial, sans-serif;
                margin: 0;
                padding: 40px;
                background: #eef1f5;
                color: #2c3e50;
            }

            h1 {
                color: #2c3e50;
                margin-bottom: 20px;
            }

            table {
                border-collapse: collapse;
                width: 100%;
                background: white;
                border-radius: 8px;
                overflow: hidden;
                box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            }

            th, td {
                padding: 14px 16px;
                text-align: left;
            }

            th {
                background: #2c3e50;
                color: white;
                text-transform: uppercase;
                font-size: 13px;
                letter-spacing: 0.5px;
            }

            tr:nth-child(even) {
                background: #f8f9fb;
            }

            tr:hover {
                background: #eaf0fb;
                transition: background 0.2s;
            }

            td {
                border-bottom: 1px solid #e5e8ec;
            }

            a.btn, button.btn {
                padding: 8px 14px;
                margin-right: 6px;
                text-decoration: none;
                border-radius: 6px;
                border: none;
                cursor: pointer;
                color: white;
                font-size: 14px;
                font-weight: 500;
                font-family: inherit;
                line-height: normal;
                box-sizing: border-box;
                vertical-align: middle;
                transition: opacity 0.2s;
                display: inline-block;
            }

            a.btn:hover, button.btn:hover {
                opacity: 0.85;
            }

            .btn-edit { background: #3b82f6; }
            .btn-delete { background: #ef4444; }
            .btn-new {
                background: #22c55e;
                margin-bottom: 20px;
            }

            form.inline { display: inline; }

            input[type=text] {
                padding: 10px;
                width: 100%;
                margin-bottom: 15px;
                box-sizing: border-box;
                border: 1px solid #cbd5e1;
                border-radius: 6px;
                font-size: 14px;
            }

            label {
                font-weight: 600;
                display: block;
                margin-bottom: 4px;
                color: #475569;
            }

            form.card {
                background: white;
                padding: 24px;
                border-radius: 8px;
                max-width: 400px;
                box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            }
    </style>
</head>
<body>
    <h1>@yield('titulo')</h1>
    @yield('contenido')
</body>
</html>