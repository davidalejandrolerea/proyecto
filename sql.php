

<!DOCTYPE html>
<html>
<head>
  <title>Departamento Legajos</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">          
  </head>
<body>
  <div class="col-md-8 col-md-offset-2">
    

<?php
If(!empty($_POST)){
try {
    $conexion = new PDO('mysql:host=localhost;dbname=legajo', 'root', '');
  } catch (PDOException $e) {
    echo "Error:" . $e->getMessage();;
  }

$id=isset($_POST['id_dni'])? $_POST['id_dni'] : '';
$apellido=isset($_POST['apellido'])? $_POST['apellido'] : '';
$nombre=isset($_POST['nombre'])? $_POST['nombre'] : '';
$inst_legal=isset($_POST['inst_legal'])? $_POST['inst_legal'] : '';
$foto_dni=isset($_POST['foto_dni'])? $_POST['foto_dni'] : '';
$cert_dom=isset($_POST['cert_dom'])? $_POST['cert_dom'] : ''; 
$decl_fam=isset($_POST['decl_fam'])? $_POST['decl_fam'] : '';
$decl_car=isset($_POST['decl_car'])? $_POST['decl_car'] : '';
 $t_titulo=isset($_POST['t_titulo'])? $_POST['t_titulo'] : '';
 $n_titulo=isset($_POST['n_titulo'])? $_POST['n_titulo'] : '';
 $registro_t=isset($_POST['registro_t'])? $_POST['registro_t'] : '';
$ubicacion=isset($_POST['ubicacion'])? $_POST['ubicacion'] : '';  
$psicofisico= isset($_POST['psicofisico'])? $_POST['psicofisico'] : '';
$psicofisico = date( 'Y-m-d' );
$psicofisico2=date("d-m-Y",strtotime($psicofisico));
$situacion=isset($_POST['situacion'])? $_POST['situacion'] : '';  



$insertar= "INSERT into alu(id_dni,apellido,nombre,inst_legal,foto_dni,cert_dom,decl_fam,decl_car,t_titulo,n_titulo,registro_t,ubicacion,psicofisico,situacion) values ('$id','$apellido','$nombre','$inst_legal','$foto_dni','$cert_dom','$decl_fam','$decl_car','$t_titulo','$n_titulo','$registro_t','$ubicacion','$psicofisico','$situacion')";

$statement = $conexion->prepare($insertar);

$statement->execute($recurso);
}

echo'<script type="text/javascript">
    alert("Dato Agregado");
    window.location.href="index.php";
    </script>';




?>





</body>
</html>






