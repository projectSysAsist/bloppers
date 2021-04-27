<?php 
class usuario{
	private $name="no hay nombre";
	public $apellido;
	private $nroDoc;
	private $tipoDoc;
	private $nroFicha;
	private $email;
	private $rol;
	private $contraseña;
	private $estado;
	public $numeroFavorito;
	private $user = "root";
    private $password = "";
	

	function __construct($numeroFavorito,$apellido,$name){

	$this->numeroFavorito = $numeroFavorito;
	$this->apellido = $apellido;
	$this->name = $name;
	
	

 	}
 	public function setName($name)
 	{
 		$this->name = $name;
 	}
 	

 	public function registrarUser($name, $apellido, $nroDoc,$tipoDoc,$nroFicha,$email,$rol,$contraseña,$estado)
 	{
 		$mysqli = new mysqli("localhost","root","","NoFallesAsiste");
	   	$mysqli->query("INSERT INTO usuario
	    ( contraseña, nombre, apellido, numero_documento, direccion, tipo_documento_idtipo_documento, 
        ficha_idficha, rol_idrol, Estado_usuario_idestado_usuario) 
	    	VALUES ('$contraseña', '$name','$apellido', $nroDoc, '$email', $tipoDoc, $nroFicha, $rol, $estado)");
	   	echo $name." very Nice, dato recibido.. ";
 	}


 	public function mostrarUsuarios()
 	{
 		$tabla="tabla";
 		$mysqli = new mysqli("localhost","root","","NoFallesAsiste");
	   	$resultado = $mysqli->prepare("SELECT * FROM usuario");
	   	
    	$resultado->execute();

    	$mysqli->close();
	   	return $resultado;
 	}

 	public function ensayo()
 	{
 		
		$mysqli = new PDO('mysql:host=localhost;dbname=NoFallesAsiste',$this->user,$this->password);

		/* verificar conexión */
		if (mysqli_connect_errno()) {
		    printf("Connect failed: %s\n", mysqli_connect_error());
		    exit();
		}

		$city = "usuario";
		

		/* crear una sentencia preparada */
		$stmt = $mysqli->prepare("SELECT * FROM usuario");

			echo $city;



		    /* ligar parámetros para marcadores*/ 


		    /* ejecutar la consulta */
		    $stmt->execute();



		    /* obtener valor */
		    $stmt->fetch();


		    
		

		$resultado = $stmt->fetchAll();
		echo "<pre>";
		print_r($resultado);
		echo "</pre>";
		$stmt->close();

 	}

 	public function mostrarName()
 	{	
 		echo ".........................";
 		echo $this->name;
 		echo $this->apellido;
 		echo $this->numeroFavorito;
 		
 	}

 	
}

$usar = new usuario (5,"sdf","jlkga");

$usar->ensayo();
$usar->mostrarName();

if (isset($_POST['register'])) {
    if (strlen($_POST['Nombre']) >= 1 && strlen($_POST['Apellido']) >= 1) {

	    $name = trim($_POST['Nombre']);
	    $apellido = trim($_POST['Apellido']);
	    $nroDoc = trim($_POST['nroDocumento']);
	    $tipoDoc = trim($_POST['tipoDocumento']);
	    $nroFicha = trim($_POST['nroFicha']);
	    $email = trim($_POST['correo']);
	    $rol = trim($_POST['rol']);
	    $contraseña = trim($_POST['contraseña']);
	    $estado=1;
	    $fechareg = date("d/m/y");
	    $starlen= strlen($_POST['Nombre']);
	    echo "<strong>Yo soy starlen<br>".$starlen,"</strong><br><br>";
	    

	    $objEnviar = new usuario (3,$apellido,$name,$starlen);
	    $objEnviar->setName($name);
	 	$objEnviar->registrarUser($name, $apellido, $nroDoc, $tipoDoc, $nroFicha, $email, $rol, $contraseña, $estado, $fechareg);
	 	$objEnviar->mostrarName();
	    
	    
	   	

	    
	    
	}
	else{
		echo "error al ingresar usuario";
		echo "<br>VERIFIQUE LOS DATOS INGRESADORS";
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
		
		$this->name = $name;
		$this->apellido = $apellido;
		$this->nroDoc = $nroDoc;
		$this->tipoDoc = $tipoDoc;
		$this->nroFicha = $nroFicha;
		$this->email = $email;
		$this->rol = $rol;
		$this->contraseña = $contraseña;
		$this->estado = $estado; 

		$name 
	    $apellido 
	    $nroDoc 
	    $tipoDoc 
	    $nroFicha 
	    $email 
	    $rol 
	    $contraseña 
	    $estado
	    $fechareg 

	    INSERT INTO usuario
	    ( contraseña, nombre, apellido, numero_documento, direccion, tipo_documento_idtipo_documento, 
        ficha_idficha, rol_idrol, Estado_usuario_idestado_usuario) VALUES (?,?,?,?,?,?,?,?,?)
	    */
?>