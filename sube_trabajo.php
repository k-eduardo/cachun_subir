<?php
include '../bd.php';
conectar();

$titulo =  htmlspecialchars($_POST['titulo']);
$autor = htmlspecialchars($_POST['autor']);
$numero = htmlspecialchars($_POST['numero']);
$seccion = htmlspecialchars($_POST['seccion']);
$categoria = htmlspecialchars($_POST['categoria']);
$archivo = htmlspecialchars($_POST['archivo']);
$facultad = htmlspecialchars($_POST['facultad']);
$carrera = htmlspecialchars($_POST['carrera']);
// $pub_nombre = htmlspecialchars($_POST['pub_nombre']);
// $pub_correo = htmlspecialchars($_POST['pub_correo']);

function sel($nombreVar) {
      return isset($_POST[$nombreVar]) ? 'true' : 'false';
}

$pub_nombre=sel('pub_nombre');
$pub_correo=sel('pub_correo');

echo "titulo = ".$titulo."<br>";
echo "autor = ".$autor."<br>";
echo "numero = ".$numero."<br>";
echo "seccion = ".$seccion."<br>";
echo "categoria = ".$categoria."<br>";
echo "archivo = ".$archivo."<br>";
echo "facultad = ".$facultad."<br>";
echo "carrera = ".$carrera."<br>";
echo "pub_nombre = ".$pub_nombre."<br>";
echo "pub_correo = ".$pub_correo."<br>";

// $result = pg_query("INSERT INTO trabajos (título,autor,número,sección,categoría,archivo,nombre,correo,facultad,carrera) VALUES ('".pg_escape_string($titulo)."','".pg_escape_string($autor)."','".pg_escape_string($numero)."','".pg_escape_string($seccion)."','".pg_escape_string($categoria)."','".pg_escape_string($archivo)."','".pg_escape_string($pub_nombre)."','".pg_escape_string($pub_correo)."','".pg_escape_string($facultad)."',".pg_escape_string($carrera)." )");
// if (!$result) {
//   echo "Query: Ocurrió un error!!!\n";
//   exit;
// }

cerrar();

// ((int)$_POST['entero'])



?>
