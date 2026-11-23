<?php
$producto=[
    ['id'=>1,'nombre'=>'Mouse', 'precio'=>35000,'stock'=>12,'disponibilidad'=>true],
    ['id'=>2,'nombre'=>'Teclado', 'precio'=>70000,'stock'=>10,'disponibilidad'=>true],
    ['id'=>3,'nombre'=>'Monitor', 'precio'=>850000,'stock'=>0,'disponibilidad'=>false]
    ];

    $json=json_encode($producto);

    echo $json;

$json1=file_get_contents(__DIR__ . "/productos.json");
$productos1 = json_decode($json1,true);

echo "<h2>Todos los productos</h2>";
foreach ($productos1 as $producto) {
    echo $producto['nombre'] . " - $" . number_format($producto['precio'], 0, ',', '.') . "<br>";
}

echo "<h2>Productos con precio superior a $100.000</h2>";
foreach ($productos1 as $producto) {
    if ($producto['precio'] > 100000) {
        echo $producto['nombre'] . " - $" . number_format($producto['precio'], 0, ',', '.') . "<br>";
    }
}
?>
