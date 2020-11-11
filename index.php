<html>
	<head>
	<meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="styles.css">
		
	</head>
    <body style="background-color: #fbfffc; margin-top: 75px">
	<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #e8f5e9">
		<a class="navbar-brand" href="https://eest1tigre.edu.ar/">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        E.E.S.T.N 1
		</a>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
			<li class="nav-item active">
				<a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Nuestra Escuela
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				<a class="dropdown-item" href="#">Historia</a>
				<a class="dropdown-item" href="#">Autoridades</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Oferta Educativa
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				<a class="dropdown-item" href="#">Técnico en Infromática Pers. y Prof</a>
				<a class="dropdown-item" href="#">Técnico Quimicio</a>
				<a class="dropdown-item" href="#">Maestro mayor de obras</a>
				<a class="dropdown-item" href="#">Técnico en Electromecánica</a>
				<a class="dropdown-item" href="#">Escuela Secundaria Básica</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Alumnos
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				<a class="dropdown-item" href="#">Mesas de Examen</a>
				<a class="dropdown-item" href="#">Normas de Convivencia</a>
				<a class="dropdown-item" href="#">Regimen de Asistencia</a>
				<a class="dropdown-item" href="#">Requisitos de Inscripcion</a>
				</div>
			</li>
			</ul>
		</div>
			<a href="login.php" class="btn btn-outline-success" style="margin-left: auto" type="button">Acceder</a>
	</nav>
	<!-- style="margin-left: auto; margin-right: auto; margin-top: 64; width: 70%" -->
	
	<div class="card centrar" style="margin-bottom: 25" >
		<div class="alert alert-info ccontenido" role="alert">
			<h4 class="alert-heading">Requisitos para la Inscripcion de hermanos para 1er año:</h4>
			<p> 
				* Fotocopia del Folio Oficio Inscripcion. <br>
				* Fotocopia del DNI. <br>
				* Fotocopia del Partida de Nacimiento. <br>
				* Foto Actualizada. <br>
				* Constancia (o certificado) de 6to año sin adeudar materias. <br>
				* Fotocopia de las vacunas. <br>
			</p>
			<p class="alert alert-warning mb-0"> Egresados de otras escuelas, inscripcion e ingreso por sorteo de loteria de la Provincia de Buenos Aires.</p>
		</div>
		<form method="post" enctype="multipart/form-data" action="insertar.php" class="ccontenido">
			<p class="error font-weight-normal" style="color: red"> * Campos obligatorios </p>
			<div class="form-group">
				<label class="bold" for="nombre">Nombre  * </label>
				<input type="text" pattern="[A-Za-z].{0,30}" class="form-control " name="nombre" placeholder="Ingrese su nombre" required  title="Maximo 30 caracteres alfabeticos">
			</div>
			<div class="form-group">
				<label class="bold" for="apellido">Apellido *</label>
				<input type="text" pattern="[A-Za-z].{0,30}" class="form-control" name="apellido" placeholder="Ingrese su apellido" required  title="Maximo 30 caracteres alfabeticos">
			</div>
			<div class="form-group">
				<label class="bold" for="correo">Direccion de Correo *</label>
				<input type="email" pattern="{0,30}" class="form-control" name="correo" id="correo" placeholder="Ingrese su Correo" required  title="Maximo 60 caracteres">
				<small id="correoHelp" class="form-text text-muted">ejemplo@email.com</small>
			</div>
			<!--
			<div class="form-group">
				<label class="bold" for="correoConf">Confirme la Direccion de Correo * NO FUNCIONA</label>
				<input type="email" pattern="{0,30}" class="form-control" name="correoConf" id="correoConf" placeholder="Confirme su Correo" required  title="Maximo 60 caracteres">
			</div> -->
			<div class="row">
				<div class="form-group col-md-2">
				<label class="bold" for="celular">Cod. de Area *</label>
					<div class="input-group">
						<div class="input-group-prepend">
						<div class="input-group-text">0</div>
						</div>
						<input type="text" pattern="[0-9].{0,30}" class="form-control" name="codArea" required>
					</div>
				</div>


				<div class="form-group col">
				<label class="bold" for="telefono">Numero de Telefono/Celular *</label>
					<div class="input-group">
						<div class="input-group-prepend">
						<div class="input-group-text">15</div>
						</div>
						<input type="text" pattern="[0-9].{0,30}" class="form-control" name="telefono" placeholder="Ingrese el numero de Telefono/Celular" required title="Maximo 30 caracteres numericos">
					</div>
					<small id="telefono" class="form-text text-muted">Sin puntos ni espacios. Ej: 23445678 </small>
				</div>
			</div>
			<div class="form-group">
				<label class="bold" for="dni">DNI *</label>
				<input type="text" pattern="[0-9].{7}" class="form-control" id="dni" name="dni" placeholder="Ingrese su numero de Documento" required title="Ocho caracteres numericos">

				<small id="dniHelp" class="form-text text-muted">Sin puntos ni espacios. Ej: 30156248 </small>
			</div>
			<!--
			<div class="form-group">
				<label class="bold" for="dniConf">Confirme su DNI * NO FUNCIONA</label>
				<input type="text" pattern="[0-9].{7}" class="form-control" id="dniConf" name="dniConf" placeholder="Confirme su numero de Documento" required title="Ocho caracteres numericos">

				<small id="dniConfHelp" class="form-text text-muted">Confirme su Numero de Documento </small>
			</div> -->
			<div class=row>
				<div class="form-group col-md-10"> 
					<label class="bold" for="fechanac">Ingrese su fecha de nacimiento *</label>
					<input type="date" class="form-control" min="2005-01-01" max="2050-01-01" name="fechanac" required>
				</div>
				<div class="form-group col">
					<label class="bold" for="sexo" >Sexo *</label>
					<div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="sexo" id="sexomasc" value="M" required>
							<label class="form-check-label font-weight-normal" for="sexomasc">Masculino</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="sexo" id="sexofem" value="F" required>
							<label class="form-check-label font-weight-normal" for="sexofem">Femenino</label>
						</div>
					</div>
				</div> 
			</div>
			<div class=row>
				<div class="form-group col">
					<label class="bold" for="domicilio">Domicilio *</label>
					<input type="text" pattern="{0,30}" class="form-control" name="domicilio" placeholder="Ingrese el domicilio (calle y numero)" required title="Maximo 30 caracteres">
				</div>
				<div class="form-group col">
					<label class="bold" for="localidad" >Localidad *</label>
					<input type="text" pattern="[A-Za-z].{0,30}" class="form-control" name="localidad" placeholder="Ingrese su localidad" required title="Maximo 30 caracteres">
				</div>
				<div class="form-group col bold">
					<label class="bold" for="cp">Codigo Postal *</label>
					<input type="text" pattern="[0-9].{3}" class="form-control" name="cp" id="cp" placeholder="Ingrese su Codigo Postal" required title="Cuatro caracteres numericos">
					<small id="cphelp" class="form-text text-muted">Sin puntos ni espacios. Ej: 1618 </small>
				</div>
			</div>
			
			<div class="row">
				<div class="form-group col">
						<label class="bold" for="archDni">Foto del DNI *</label>
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="archDni" name="archDni" accept=".pdf,.jpeg,.png" required onchange="fileinput()">
						<script src="fileinput.js"> </script>
						<label class="custom-file-label" id="archDniF" for="inputFile">Carga un archivo</label>
					</div>
						<small id="cphelp" class="form-text text-muted">Formato .pdf/.png/.jpg </small>
				</div>
				<div class="form-group col">
						<label class="bold" for="archAct">Foto Actualizada *</label>
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="archAct" name="archAct" accept=".pdf,.jpeg,.png" required onchange="fileinput()">
						<script src="fileinput.js"> </script>
						<label class="custom-file-label" id="archActF" for="inputFile">Carga un archivo</label>
					</div>
						<small id="cphelp" class="form-text text-muted">Formato .pdf/.png/.jpg </small>
				</div>
				<div class="form-group col">
						<label class="bold" for="archIns">Ficha de Inscripcion *</label>
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="archIns" name="archIns" accept=".pdf,.jpeg,.png" required onchange="fileinput()">
						<script src="fileinput.js"> </script>
						<label class="custom-file-label" id="archInsF" for="inputFile">Carga un archivo</label>
					</div>
						<small id="cphelp" class="form-text text-muted">Formato .pdf/.png/.jpg </small>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-5">
						<label class="bold" for="archSexto">Constancia de 6° año sin adeudar materias *</label>
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="archSexto" name="archSexto" accept=".pdf,.jpeg,.png" required onchange="fileinput()">
						<script src="fileinput.js"> </script>
						<label class="custom-file-label" id="archSextoF" for="inputFile">Carga un archivo</label>
					</div>
						<small id="cphelp" class="form-text text-muted">Formato .pdf/.png/.jpg </small>
				</div>
				<div class="form-group col">
						<label class="bold" for="archPAN">Partida de Nacimiento *</label>
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="archPan" name="archPan" accept=".pdf,.jpeg,.png" required onchange="fileinput()">
						<script src="fileinput.js"> </script>
						<label class="custom-file-label" id="archPanF" for="inputFile">Carga un archivo</label>
					</div>
						<small id="cphelp" class="form-text text-muted">Formato .pdf/.png/.jpg </small>
				</div>
				<div class="form-group col">
						<label class="bold" for="archVac">Fotocopia de las vacunas *</label>
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="archVac" name="archVac" accept=".pdf,.jpeg,.png" required onchange="fileinput()">
						<script src="fileinput.js"> </script>
						<label class="custom-file-label" id="archVacF" for="inputFile">Carga un archivo</label>
					</div>
						<small id="cphelp" class="form-text text-muted">Formato .pdf/.png/.jpg </small>
				</div>
			</div>
			<button type="submit" class="btn btn-primary" id="button">Confirmar</button>
		</form>
	</div>
    </body>
</html>