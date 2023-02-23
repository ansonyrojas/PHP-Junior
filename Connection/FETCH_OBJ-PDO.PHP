<?php 

$dsn = 'mysql:host=localhost;port=3306;dbname=book_example';
$username = "root";
$password = "1234";
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'",

				 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ);


$pdo = new PDO ($dsn, $username, $password, $options);

$consulta = $pdo->prepare("SELECT * FROM usuarios WHERE nombre = 'Ansony';");

$consulta->execute();

$consulta->bindColumn("id", $codigo);


$result= $consulta->fetch();
print $codigo. "<br>";
echo "nombre : ". $result->nombre.  "<br>";
echo "Apellido: ". $result->apellido. "<br>";


if ($result == false){

	print "no se consulto nada";
}



// for ($i = 0; $i<=4 ;$i++){

// 	echo $result[$i]. "<br>";

// }

unset($consulta, $result);


//INSERTAMOS DATOS CON EL MODELO DE DATA PDO

// $consulta = $pdo->prepare("INSERT INTO usuarios 
						
// 						(nombre, apellido, email, clave)

// 						 VALUES 	

// 						 ('Anso', 'Rojo', 'ansony_2@hotmail.com', '12345')

// 						 ");

// $consulta->execute();

unset($consulta, $result);

$consulta = $pdo->prepare ("UPDATE usuarios 
			SET nombre = 'Messi',
				apellido = 'Leo',
				email = 'leomesi@gmail.com',
				clave = 1235
			WHERE email = 'ansony_2@hotmail.com'



	");

$consulta->execute();

if ($consulta->execute() == true){

	print "Se hizo la actualizacion satisfactoriamente";
}else{

	print "no existe el correo ";

}


unset($consulta, $result);

$consulta = $pdo->prepare("DELETE FROM usuarios
						   WHERE 	   email = 'leomesi@gmail.com'
		");

	
$consulta->execute();

if ($consulta->execute() == true ){

	print nl2br("\nse elimino correctamente");
} 

	

?>
