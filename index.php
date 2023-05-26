<?php
$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Television 24"',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor Curvo',
        'precio' => 200,
        'disponible' => false
    ]
    
    ];
?>
<?php
    require_once('producto.php');
    $productos = array (new Producto("Tablet",200,5,true),
                        new Producto("Television 24",300,4,true),
                        new Producto("Monitor Curvo",200,3,false));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <main>
        <pre>
        <?php
            var_dump($productos);
            $json = json_encode($productos,JSON_UNESCAPED_UNICODE);
            ?>
            <br>
            <?php
                var_dump($json);
            ?>
        <pre>
    </main> 
    <div>
        <?php  foreach($productos as $producto) { ?>
                <li>
                    <p> Producto: <?php echo $producto['nombre'];?></p>
                    <p> Precio: <?php echo $producto['precio'];?></p>
                    <p> <?php echo ($producto['disponible']) ? 'Disponible':'No disponible';?> </p>
                </li>
        <?php } ?>
    </div> 
    <div>
        <table>
            <thead>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Disponibilidad</th>
            </thead>
            <tbody>
                <?php
                foreach($productos as $producto):?>
                    <tr>
                        <td> <?php echo $producto['nombre'];?></td>
                        <td> <?php echo $producto['precio'];?></td>
                        <td> <?php echo ($producto['disponible']) ? 'Disponible':'No disponible';?> </td>
                    </tr>
                    <?php endforeach?>
            </tbody>
        </table>
    </div>
    <div>
        <table>
            <thead>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Disponibilidad</th>
            </thead>
            <tbody>
                <?php foreach($productos as $producto):?>
                    <tr>
                        <td><?php echo $producto-> getNombre();?></td>
                        <td><?php echo $producto-> getPrecio();?></td>
                        <td><?php echo $producto-> getCantidad();?></td>
                        <td><?php echo ($producto -> getDisponible()) ? 'Disponible':'No disponible';?> </td>
                    </tr>
                    <?php endforeach?>
            </tbody>
        </table>  
    </div>
</body>
</html>    