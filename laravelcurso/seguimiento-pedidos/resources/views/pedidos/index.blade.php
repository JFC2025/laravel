<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Seguimiento de Pedidos</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Listado de Pedidos</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Producto</th>
                <th>Fecha</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pedidos as $pedido)
                <tr class="{{ strtolower($pedido['estado']) }}">
                    <td>{{ $pedido['id'] }}</td>
                    <td>{{ $pedido['cliente'] }}</td>
                    <td>{{ $pedido['producto'] }}</td>
                    <td>{{ $pedido['fecha'] }}</td>
                    <td>
                        @if($pedido['estado'] === 'Pendiente')
                            ⏳ Pendiente
                        @elseif($pedido['estado'] === 'Enviado')
                            📦 Enviado
                        @elseif($pedido['estado'] === 'Entregado')
                            ✅ Entregado
                            
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
