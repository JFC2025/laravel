<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Facturas</title>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"> -->
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <h1>Listado de Facturas Emitidas</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Número</th>
                <th>Cliente</th>
                <th>Importe</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach($facturas as $factura)
                <tr class="{{ $factura['importe'] > 1000 ? 'destacado' : '' }}">
                    <td>{{ $factura['numero'] }}</td>
                    <td>{{ $factura['cliente'] }}</td>
                    <td>{{ number_format($factura['importe'], 2, ',', '.') }} €</td>
                    <td>{{ $factura['fecha'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>

