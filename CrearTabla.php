<html>
<?php
 
 class CrearTabla
 { 
  public $DatosGuardados;
  
  function Dibujarla()
  {
    echo "<table  border='1'>";
	  echo "<tr>";
	   echo "<th>Id</th>";
	   echo "<th>Nombre</th>";
	   echo "<th>Tel&eacutefono</th>";
	   echo "<th>Opciones</th>";
	   //echo "<th colspan='3'>Opciones</th>";
  	  echo "</tr>";
	  
	 //$btnEditar = "<a href='Update.php'><input type='button' name='btnEditar' value='Editar' /></a>";
     //$btnEliminar = "<a href='Delete.php'><input type='button' name='Eliminar' value='Eliminar' /></a>";
     //$btnVer = "<a href='See.php'><input type='button' name='btnVer' value='Ver'/></a>";
	  
     foreach($this->DatosGuardados as $contacto){
      echo '<tr>';
       echo '<td>'.$contacto['Id']. '</td>';
	   echo '<td>'.$contacto['Nombre']. '</td>';
	   echo '<td>'.$contacto['Telefono']. '</td>';
	   echo "<td>";
		echo '<a href="Ver.php?id='.$contacto['Id'].'">Ver</a>';
		echo '<a href="Editar.php?id='.$contacto['Id'].'">Editar</a>';
		echo '<a href="Eliminar.php?id='.$contacto['Id'].'">Eliminar</a>';
		echo '</td>';
      echo '</tr>';
    }
    echo '</table>';
  }
 }
?>
</html>