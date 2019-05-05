<form name="formulario" method="post" action="sql.php">

<meta charset="UTF-8"name="viewport" content="width=device-width, initial-scale=1.0">
<html> 	
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
   
    <link href="css/signin.css" rel="stylesheet">
    
    <title>Departamento Legajos</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">     			
	</head>
<body>
	<div class="col-md-8 col-md-offset-2">
		<h1>Alta de Legajos DCPD</h1>
	
<div>
		
		<a href="cerrar.php">VOLVER</a>

		<div>
		
 
 <div>

		<form method="POST" action="sql.php">
			<div class="form-group">
				<label>Documento:</label>
				<input type="text" name="id_dni" class="form-control" placeholder="Escriba su numero de DNI"><br />
			</div>
			<div class="form-group">
				<label>Apellido:</label>
				<input type="text" name="apellido" class="form-control" placeholder="Ingresar Apellido"><br />
			</div>
			
				<div class="form-group">
				<label>Nombre:</label>
				<input type="text" name="nombre" class="form-control" placeholder="Ingresar Nombre"><br />
			</div>
			<div class="form-group">
				<label>Instrumento Legal:</label>
				<select name='inst_legal' >  

<OPTION VALUE="SI">SI</OPTION>
<OPTION VALUE="NO">NO</OPTION>

</select>
</div>
<div class="form-group">
				<label>Fotocopia del DNI:</label>
				<select name='foto_dni' >  

<OPTION VALUE="SI">SI</OPTION>
<OPTION VALUE="NO">NO</OPTION>

</select>
</div>

<div class="form-group">
	
      <label>Certificado de Domicilio</label>
     
      <select name='cert_dom' >  

<OPTION VALUE="SI">SI</OPTION>
<OPTION VALUE="NO">NO</OPTION>

</select>

</div>
			
 


			</div>
			<div class="form-group">		
             <div class="form-group">
				<label>Declaracion Jurada Grupo Familiar:</label>
				<select name='decl_fam' >  

<OPTION VALUE="SI">SI</OPTION>
<OPTION VALUE="NO">NO</OPTION>

</select>
			</div>
 <div class="form-group">
				<label>Declaracion Jurada de Cargos y Actividades:</label>
				<select name='decl_car' >  

<OPTION VALUE="SI">SI</OPTION>
<OPTION VALUE="NO">NO</OPTION>

</select>

<div class="form-group">
			<div class="form-group">
				<label>Titulo:</label>
	<select name='t_titulo' >  

<OPTION VALUE="SECUNDARIO">Secundario</OPTION>
<OPTION VALUE="TERCIARIO">Terciario</OPTION>
<OPTION VALUE="HABILITANTE">Habilitante</OPTION>
<OPTION VALUE="UNIVERSITARIO">Universitario</OPTION>




	</select>	

	<div class="form-group">
				<label>Nombre Del Titulo:</label>
				<input type="text" name="n_titulo" class="form-control" placeholder="Ingresar Nombre del Titulo"><br />
			</div>		
<div class="form-group">
				<label>Numero de Registro:</label>
				<input type="text" name="registro_t" class="form-control" placeholder="Ingresar Numero de Registro"><br />
			</div>

			<div class="form-group">
             <label>Ubicacion</label>
          <select name="ubicacion">
          	 <option value="ARCHIVADO">ARCHIVADO</option>

          </select>
      </div>
      <div class="form-group">
				<label>Psicofisico:</label>
				<input type="date" name="psicofisico"><br />
			</div>
			 

            <div class="form-group">
				<label>Situación:</label>
				<select name='situacion'>  
               <option value="Activo">Activo</option>
                <option value="Pasivo">Pasivo</option>
			</select>
			</div>
           

			<div class="form-group">
				<input type="submit" class="btn-alert!" value="Insertar" />
			</div> <br><br />
			

		</form>
		
	</div>




<html>
<body>

</body>
</html> 


</form>