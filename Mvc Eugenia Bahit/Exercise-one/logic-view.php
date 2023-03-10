<?php 


$diccionario = array(


		'titulo de la pagina' => 'POO y MVC en PHP',
		'keywords' => 'poo, mvc, php, arquitectura de software',
		'descripcion' => 'El paradigma de la programacion orientada a objetos con el patron arquitectonico MVC en PHP'

);


$template = file_get_contents('template.html');


foreach($diccionario as $clave => $valor){

		$template = str_replace('{'.$clave.'}',$valor,$template);
}


print $template;



?>
