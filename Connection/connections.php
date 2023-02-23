<?php 

$servername = "localhost";
$username = "root";
$password = "12345";


//Example (MySQLi Object-Oriented)



//Create connection

$conn = new mysqli($servername,$username,$password); 


// Check connection

if ($conn->connect_error){

	die ("Connection Failed: ". $conn->connect_error);

}

echo nl2br( "connected sucessfully\n");


///////////////////////////////////////////////


// Example (MySQLi Procedural)


//Create connection

$conn =  mysqli_connect($servername,$username,$password);

if (!$conn){

	die("Conection Failed: ". mysqli_connect_error());
}

echo "connected sucessfully";





//Example (PDO)
try{

$conn = new PDO("mysql:host=$servername;", $username, $password);

	//set the PDO error mode to execption 
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	echo "<br>connected sucessfully";	

}catch(PDOExecption $e){

	echo "connected failed: ". $e->getMessage();
}







?>
