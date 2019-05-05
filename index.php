
<!DOCTYPE html>
<html>
<head>
  <title>DEPARTAMENTO LEGAJOS</title>
</head>


<body>


</form>

</script>
<link href="mycss.css" rel="stylesheet">
  

</style>
<div>
 

<div align="center"> 

<form name="form1" method="post" action="index.php" id="cdr" >
  <h3>Buscar Docentes</h3>
      <p>
     <input name="busca"  type="text" id="busca">
        <input type="submit" name="Submit" value="BUSCAR" />
        </p>
      </p>
   </div>
       
</form>

<form name="button" method="post" action="login.view.php" id="nuevo" >
 <p>
        <input name="nuevo"  type="text" id="modificar">
        <input type="submit" name="nuevo" value="NUEVO" />
        </p>

</div>
</form>

 <p>
  <style type="text/css">
input{outline:none;border:10px;}
#busqueda{background:#600000;color:#fff;}
#cdr{padding:5px;background:grey;width:220px;border-radius:10px 0px 0px 10px;}
#tab{background:#CCC;;border-bottom-left-radius: :10px 10px 10px 10px;}
</style>
   
  <?php
$busca="busca"; 

if (isset($_POST['busca'])) {
$busca = $_REQUEST['busca'];
} else {
$busca = "";
}

$mysqli = new mysqli('localhost', 'root', '', 'legajo');
$mysqli->set_charset("utf8");
if($busca!=""){

$busqueda= $mysqli->query("SELECT * FROM alu WHERE id_dni LIKE '%".$busca."%'");


//cambiar nombre de la tabla de busqueda
?>
<table width="900" border="5" id="tab">
   <tr>
     <td width="19">DNI </td>
     <td width="61">Apellido</td>
     <td width="200">Nombre</td>
     <td width="157">Instrumento Legal</td>
     <td width="157">Fotocopia DNI</td>
     <td width="157">Certificado de Domicilio</td>
     <td width="157">Declaracion Jurada Grup. Familiar</td>
     <td width="157">Declaracion Jurada Cargos y Actividades</td>
     <td width="500">Tipo de Titulo</td>
     <td width="157">Nombre del Titulo</td>
     <td width="73">Registro</td>
     <td width="157">Ubicacion</td>  
     <td width="103">Psicofisico</td>
     <td width="118">Situacion</td>
     
     
   </tr>
 
<?php

while($f=mysqli_fetch_array($busqueda)){
echo '<tr>';
echo '<td width="15">'.$f['id_dni'].'</td>';

echo '<td width="100">'.$f['apellido'].'</td>';
echo '<td width="200">'.$f['nombre'].'</td>';
echo '<td width="200">'.$f['inst_legal'].'</td>';
echo '<td width="70">'.$f['foto_dni'].'</td>';
echo '<td width="110">'.$f['cert_dom'].'</td>';
echo '<td width="99">'.$f['decl_fam'].'</td>';
echo '<td width="99">'.$f['decl_car'].'</td>';
echo '<td width="200">'.$f['t_titulo'].'</td>';
echo '<td width="200">'.$f['n_titulo'].'</td>';
echo '<td width="200">'.$f['registro_t'].'</td>';
echo '<td width="99">'.$f['ubicacion'].'</td>';
echo '<td width="60">'.$f['psicofisico'].'</td>';
echo '<td width="60">'.$f['situacion'].'</td>';



echo '

<form name="button" method="post" action="login.view.php" id="modificar" >
 <p>
        <input name="MODIFICAR"  type="text" id="modificar">
        <input type="submit" name="modificar" value="MODIFICAR" />
        </p>';




}



//onclick="return confirm('¿Realmente deseas eliminar este articulo?')";
//cambiar los nombres de los campos de busqueda
}


?>


</table>





</body>
</html>



