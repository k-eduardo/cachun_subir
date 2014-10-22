<?php
include '../bd.php';
conectar();
?>

<html>
  <body>
  
    <h1>Subir Trabajo:</h1>
    
    <form action="sube_trabajo.php" method="post">
      Titulo: <input type="text" name="titulo"><br><br>
<!--       Contenido: <br><textarea rows="4" cols="50"></textarea><br><br> -->
      Autor:  
      <select name="autor">
	<option value=''>Selecciona un autor</option>
	<?
	  $autores = ejecutar("SELECT * FROM autores");
	  while ($autores_row = pg_fetch_row($autores)) {
	      echo "<option value=$autores_row[0]>$autores_row[1]</option>";
	  }
	?>  
      </select><br><br>
      
<!--       Palabras clave: <input type="text" name="fname"><br><br> -->
      Número: <select name="numero"><option value=''></option>"</select><br><br>
      Sección:
      <select name="seccion">
	<option value=''>Selecciona una sección</option>
	<?
// 	  $secciones = ejecutar("SELECT * FROM secciones");
// 	  while ($secciones_row = pg_fetch_row($secciones)) {
// 	      echo "<option value=$secciones_row[0]>$secciones_row[1]</option>";
// 	  }
	?>  
      </select><br><br>      
      Categoría:
      <select name="categoria">
	<option value=''>Selecciona una categoría</option>;
	<?
	  $categorias = ejecutar("SELECT * FROM categorías");
	  while ($categorias_row = pg_fetch_row($categorias)) {
	      echo "<option value=$categorias_row[0]>$categorias_row[1]</option>";
	  }
	?>  
      </select><br><br>        
      Archivo: 	<input type="file" name="archivo"><br><br>
      
       Facultad: 
       <select name="facultad">
	<option value=''>Selecciona una entidad</option>;
	<?
	  $entidades = ejecutar("SELECT * FROM entidades");
	  while ($entidades_row = pg_fetch_row($entidades)) {
	      echo "<option value=$entidades_row[0]>$entidades_row[1]</option>";
	  }
	?>  
      </select><br><br>   
       Carrera:
       <select name="carrera">
	<option value=''>Selecciona una carrera</option>;
	<?
	  $carreras = ejecutar("SELECT * FROM carreras where entidad = $entidad");
	  while ($carreras_row = pg_fetch_row($carreras)) {
	      echo "<option value=$carreras_row[0]>$carreras_row[1]</option>";
	  }
	?>  
      </select><br><br>         
      
<!--       Si el autor decidió publicar sus datos:<br><br> -->
      Publicar nombre: <input type="checkbox" name="pub_nombre"><br><br>
      Publicar correo: <input type="checkbox" name="pub_correo"><br><br>    

      <br>
      <input type="submit" value="Subir">
    </form>        

<?  cerrar(); ?>


  </body>
</html>
