<?php 

include("conexion.php");



class usuario{
	private $name;
	private $apellido;
	private $nroDoc;

	function __construct($name,	$apellido, $nroDoc){

	$this->name = $name;
	$this->apellido = $apellido;
	$this->nroDoc = $nroDoc;
 	}
}




	if (isset($_POST['register'])) {
	    if (strlen($_POST['Nombre']) >= 1 && strlen($_POST['Apellido']) >= 1) {

	    	$name = trim($_POST['Nombre']);
			$apellido = trim($_POST['Apellido']);
			$nroDoc = trim($_POST['nroDocumento']);

			$objDatos = new usuario($name, $apellido, $nroDoc);
		    
		    /*echo  "nombre:".$name."<br>apellido:".$apellido."<br>nroDoc:".$nroDoc."<br>tipoDoc:".$tipoDoc."<br>nroFicha:".$nroFicha."<br>email:".$email."<br>rol:".$rol."<br>Contraseña:".$contraseña."<br>".$fechareg;

		    $consulta = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$name','$email','$fechareg')";
		    $consulta2 = "INSERT INTO usuario
		    ( contraseña, nombre, apellido, numero_documento, direccion, tipo_documento_idtipo_documento, 
	        ficha_idficha, rol_idrol, Estado_usuario_idestado_usuario) 
		    	VALUES ('$contraseña', '$name','$apellido', $nroDoc, '$email', $tipoDoc, $nroFicha, $rol, $estado)";*/
		

		    

		    //$resultado = mysqli_query($conex,$consulta2);
		    echo $name, $apellido;
		    
		    
		}
	}


/*formulario
	    Nombre
	    Apellido
	    nroDocumento
	    tipoDocumento
	    nroFicha
	    correo
	    rol
	   
	    contraseña
	    if ($resultado) {
		    	?> 
		    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
	           <?php
		    } else {
		    	?> 
		    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
	           <?php
		    }
	    }   else {
		    	?> 
		    	<h3 class="bad">¡Por favor complete los campos!</h3>
	           <?php
	    */
?>