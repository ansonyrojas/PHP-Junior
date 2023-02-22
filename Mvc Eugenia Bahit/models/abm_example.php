<?php 

	require_once('usuarios_model.php');


	#traer datos de un usuario
	$usuario1 = new Usuario();
	$usuario1->get('ansonyrojas2015@gmail.com');



	if ($usuario1->email != " " ){

	print $usuario1->nombre. ' ' .$usuario1->apellido. ' existe <br>';


	}else{

		print "no hay ningun usuario con ese correo";
	}


	$new_user_data = array(

			'nombre' => 'Albert',
			'apellido' => 'Jacinto',
			'email' => 'albert2000@gmail.com',
			'clave' => '1234'

	);


	# Crear un usuario

	$usuario2 = new Usuario();
	
	$usuario2->set($new_user_data);//INSERTO LOS DATOS DE MI ARRAY A MI BASE DE DATOS

	$usuario2->get($new_user_data['email']); // CONSULTO POR MEDIO DEL EMAIL LOS DATOS COMO EL NOMBRE Y APELLIDO. 

	print $usuario2->nombre. ' ' . $usuario2->apellido. " ha sido creado <br>";

	
	# Editar los datos de un usuario existente
	$edit_user_data = array(

		'nombre' => 'Gabriel',
		'apellido' => 'Lopez',
		'email' => 'marconi@gmail.com',
		'clave' => '69274'
	);

	$usuario3 = new Usuario();
	$usuario3->edit($edit_user_data);
	$usuario3->get($edit_user_data['email']);

	print $usuario3->nombre. ' ' .$usuario3->apellido. ' ha sido editado<br>';

	$usuario4 = new Usuario();
	$usuario4->get('lei@gmail.com');
	$usuario4->delete('lei@gmail.com');

	print $usuario4->nombre. ' ' .$usuario4->apellido. 'ha sido eliminado'; 




?>