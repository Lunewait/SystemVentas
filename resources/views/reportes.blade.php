<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Reportes</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Generar Reportes</h1>
        <div class="row">
            <div class="col-md-6 mb-3">
                <a href="{{ route('reporte.ventas') }}" class="btn btn-primary btn-block">Generar Reporte de Ventas</a>
            </div>
            <div class="col-md-6 mb-3">
                <a href="{{ route('reporte.compras') }}" class="btn btn-primary btn-block">Generar Reporte de Compras</a>
            </div>
            <div class="col-md-6 mb-3">
                <a href="{{ route('reporte.clientes') }}" class="btn btn-primary btn-block">Generar Reporte de Clientes</a>
            </div>
            <div class="col-md-6 mb-3">
                <a href="{{ route('reporte.proveedores') }}" class="btn btn-primary btn-block">Generar Reporte de Proveedores</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>