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

echo "<pre>";
print_r($productos1);
echo "/<pre>";

?>