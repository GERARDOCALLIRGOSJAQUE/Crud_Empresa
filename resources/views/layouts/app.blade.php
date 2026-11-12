<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos - Laravel</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 30px; background-color: #f8fafc; color: #1e293b; }
        .contenedor { max-width: 900px; margin: 0 auto; background: white; padding: 25px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        .alerta-exito { background: #dcfce7; color: #166534; padding: 12px; border-radius: 6px; margin-bottom: 20px; }
        .btn { display: inline-block; padding: 8px 14px; text-decoration: none; border-radius: 4px; font-weight: bold; border: none; cursor: pointer; }
        .btn-crear { background: #2563eb; color: white; }
        .btn-editar { background: #ca8a04; color: white; }
        .btn-eliminar { background: #dc2626; color: white; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { text-align: left; padding: 12px; border-bottom: 1px solid #e2e8f0; }
        th { background: #0f172a; color: white; }
        .campo { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: 600; }
        input[type="text"], input[type="number"] { width: 100%; padding: 8px; border: 1px solid #cbd5e1; border-radius: 4px; box-sizing: border-box; }
        .error { color: #dc2626; font-size: 13px; }
    </style>
</head>
<body>
    <div class="contenedor">
        @if(session('mensaje'))
            <div class="alerta-exito">{{ session('mensaje') }}</div>
        @endif

        @yield('contenido')
    </div>
</body>
</html>