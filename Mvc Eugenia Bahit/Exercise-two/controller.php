<?php 


function capturar_evento(){

	$vista =''; 

	if($_GET){

		if(array_key_exists('vista', $_GET)){

			$vista = $_GET['vista'];
		}

	}
	return $vista;
}




function identificar_modelo($vista){

		if ($vista){

			switch($vista){

				case 'vista_1':

						$modelo = 'ModeloUno';
				break;

				case 'vista_2':

						$modelo = 'ModeloDos';

						break;
						default:
						exit();
			}
		}

		return $modelo;

}


function invocar_modelo($modelo){

	if($modelo){

		require_once('models.php');
	
		$data = new $modelo();

		if ($modelo == 'ModeloUno'){

			$data->a(1050);


		}else if($modelo == 'ModeloDos'){

			$data->b(25,5);
		
		}

		settype($data, 'array');
	
		return $data;

	}

}





function enviar_data(){

		$vista = capturar_evento();

		if($vista){

			$modelo = identificar_modelo($vista);

			if($modelo){

				$data = invocar_modelo($modelo);

				if($data){

					require_once('view.php');

					print render_data($vista, $data);

				}
			}
		}

}


enviar_data();

?>