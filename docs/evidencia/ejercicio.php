<?php
//Ejercicio 1
echo "<b>Ejercicio 1 - Tres Notas estudiantes</b><br>";
echo "Ejercicio desarrollado en el cuaderno<br><br>";

//Ejercicio 2
echo "<b>Ejercicio 2 - Sistema Biblioteca</b><br>";
echo "Ejercicio desarrollado en el cuaderno<br><br>";

//Ejercicio 3
echo "<b>Ejercicio 3 - Inventario</b><br>";
echo "Ejercicio desarrollado en el cuaderno<br><br>";

//Ejercicio 4
echo "<b>Ejercicio 4 - Restaurante</b><br>";
echo "Ejercicio desarrollado en el cuaderno<br><br>";

//Ejercicio 5
echo "<b>Ejercicio 5 - Compras</b><br>";
echo "Ejercicio desarrollado en el cuaderno<br><br>";

//Ejercicio 6
echo "<b>Ejercicio 6 - Registro Usuario</b><br>";
echo "Ejercicio desarrollado en el cuaderno<br><br>";

//Ejercicio 7
echo "<b>Ejercicio 7 - Sistema Prestamos</b><br>";
echo "Ejercicio desarrollado en el cuaderno<br><br>";

//Ejercicio 8
echo "<b>Ejercicio 8 - Sistema Registro</b><br>";
echo "Ejercicio desarrollado en el cuaderno<br><br>";

//Ejercicio 9
echo "<b>Ejercicio 9 - MENSAJE PERSONAL</b><br>";
$municipio = "Manizales"; $nombre="Juan"; $edad="28";
echo "Nombre: ".$nombre."<br>Edad: ".$edad."<br>Municipio: ".$municipio;
echo "<br><br>";

//Ejercicio 10
echo "<b>Ejercicio 10 - INFORMACIÓN ACADEMICA</b><br>";
$programa = "Analisis y Desarrollo de Software";$ficha = "3230905";
echo "Nombre aprendiz: ".$nombre."<br>Programa Formación: ".$programa."<br>N° Ficha ".$ficha;
echo "<br><br>";

//EJERCICIO 11
echo "<b>Ejercicio 11 - VIDEOJUEGO</b><br>";
$personaje="spiderman";$nivel=4;$vidas=3;
echo "Nombre Personaje: ".$personaje."<br>Nivel Personaje: ".$nivel."<br>N° Vidas".$vidas;
echo "<br><br>";

//EJERCICIO 12
echo "<b>Ejercicio 12 - PLANETAS</b><br>";
$planeta="Tierra";$lunas=1;$temperatura=30;
echo "Nombre Planeta: ".$planeta."<br>N° Lunas: ".$lunas."<br>Temperatura: ".$temperatura;
echo "<br><br>";

//EJERCICIO 13
echo "<b>Ejercicio 13 - PRODUCTO</b><br>";
$producto="Computador";$precio=1500000;$cantidad=5;
echo "Producto: ".$producto."<br> Precio: ".$precio."<br>Cantidad: ".$cantidad;
echo "<br><br>";

//EJERCICIO 14
echo "<b>Ejercicio 14 - MASCOTA</b><br>";
$mascota="Mike";$especie="Perro";$ano=1;
echo "Nombre Mascota: ".$mascota."<br>Especie: ".$especie."<br> Edad: ".$ano." año";
echo "<br><br>";

//EJERCICIO 15
echo "<b>Ejercicio 15 - VEHICULO</b><br>";
$marca="Mercedes";$modelo=2025;$vel=250;
echo "Marca: ".$marca."<br>Modelo: ".$modelo."<br>Vel. MAX: ".$vel." km";
echo "<br><br>";

//EJERCICIO 16
echo "<b>Ejercicio 16 - PELICULA</b><br>";
$pelicula="Mario Bross";$genero="Infantil";$ano=2024;
echo "Pelicula: ".$pelicula."<br>Genero: ".$genero."<br>Año: ".$ano;
echo "<br><br>";

//EJERCICIO 17
echo "<b>Ejercicio 17 - PERFIL RED SOCIAL</b><br>";
$usuario="jjmar";$seguidores=461;$ciudad="La Dorada";
echo "Nombre Usuario: ".$usuario."<br>Cantidad Seguidores: ".$seguidores."<br>Ciudad: ".$ciudad;
echo "<br><br>";

//EJERCICIO 18
echo "<b>Ejercicio 18 - LIBRE</b><br>";
$equipo="PSG";$puntos=80;$goles=50;$estatus="CAMPEÓN";
echo "Equipo: ".$equipo."<br>Puntos: ".$puntos."<br>Goles: ".$goles."<br>Posición: ".$estatus;
echo "<br><br>";

//RETO EXTRA
echo "<b>Ejercicio Extra - CONCATENACION</b><br>";
$vivienda="La Dorada";
echo "Hola ".$nombre." , tienes ".$edad." años y vives en ".$vivienda;
echo "<br><br>";

//RETO EXTRA 2
echo "<b>Ejercicio Extra 2 - Error intencional</b><br>";
echo "Tiene un error en la linea 2 y en la linea 3<br>";
echo "En la linea 2 falta el signo de $ para definir variables y el ; al final. En la fila 3 pasa lo mismo el $ para definir cual es la variable a mostrar porque solo con el nombre no la lee y el ; al final<br><br>";

//EJERCICIO 19
echo "<b>EJERCICIO 19 - Suma de dos numeros</b><br>";
$a=10;
$b=15;
$suma=$a+$b;
echo "El resultado de la suma entre ".$a." + ".$b." es = ".$suma. "<br><br>";

//EJERCICIO 20
echo "<b>EJERCICIO 20 - Promedio 3 notas</b><br>";
$nota1=4.8;
$nota2=5.0;
$nota3=3.5;
$promedio=($nota1+$nota2+$nota3)/3;
echo "El promedio de las notas " .$nota1." , " .$nota2." , ".$nota3." es = ".number_format($promedio, 1)."<br><br>";

//EJERCICIO 21
echo "<b>EJERCICIO 21</b><br>";
$precio=100000;
$iva=$precio*0.19;
$total=$iva+$precio;
echo "Valor producto = ".$precio."<br>IVA : ".$iva."<br>Total a pagar : ".$total."<br><br>";

//EJERCICIO 22
echo "<b>Ejercicio 22</b><br>";
$valor=50000;
$descuento=0.10;
echo "Valor producto: ".$valor."<br>Descuento: ".$descuento*(100)."% <br>Valor final: ".$valor-($valor*$descuento);

//RETO EXTRA
echo "<br><br><b>Reto Extra - Factura Simple</b><br>";
$articulo="Celular";
$preciou=1300000;
$cantidad=3;
echo "Producto adquirido: ".$articulo."<br>Precio unitario: ".$preciou."<br>Cantidad: ".$cantidad."<br>Subtotal: ".$preciou*$cantidad."<br>IVA: ".($preciou*$cantidad)*0.19."<br>Total: ".($preciou*$cantidad)+(($preciou*$cantidad)*0.19)."<br><br>";

// EJERCICIO 23
echo "<b>Ejercicio 23</b><br>";
$nota=3.5;
if($nota>=3.0){
echo "El estudiante aprobo<br><br>";
} else {
echo"El estudiante reprobo<br><br>";
}

//EJERCICIO 24
echo "<b>Ejercicio 24</b><br>";
$edad=16;
if($edad>=18){
echo"Es mayor de edad<br><br>";
} else{
echo "Es menor de edad<br><br>";
}

//EJERCICIO 25
echo "<b>Ejercicio 25</b><br>";
$valor=300000;
if($valor>100000){
echo "Por superar los 100.000 tiene un descuento del 10%. Su nuevo precio es = ".$valor-($valor*0.10)."<br><br>";
}else {
echo "El precio es ".$valor."<br><br>";
}

//EJERCICIO 26
echo "<b>Ejercicio 26</b><br>";
$cantidad=6;
if($cantidad<1){
echo "Se encuentra agotado<br><br>";
} else { if($cantidad>=1 && $cantidad<=5){
echo"Quedan pocas unidades<br><br>";
} else{
echo "Tiene stock<br><br>";
}
}

//RETO EXTRA
echo "<b>Reto extra - USO var_dump() </b><br>";
$numero=10;

var_dump($numero=="10");echo"<br>";
var_dump($numero==="10");echo"<br>";
echo"La diferencia es que con == el sistema solo compara superficialmente, solo el valor. Y con === comparar hasta el tipo de dato que es.<br>";
echo"El primero es true porque no mira los tipos de datos solo ve que ambos son el 10 y el en el segundo es false porque analiza los tipos de datos y uno es INT y el otro String";
?>