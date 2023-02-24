<?php 



interface iTemplate{

	public function setVariable($name,$var); 
	public function getHtml($template);

}


//Implementar la interface
//Esto funcionara

class Template implements iTemplate{

	private $vars = array();

		public function setVariable($name,$var){

			$this->var[$name] = $var;
		}

		public function getHtml($template){

				foreach($this->vars as $name => $value){

				 $template = str_replace('{'.$name.'}', $value,$template);

				}

				return $template;
		}



}



$data = new Template();

$data->setVariable("Ansony", "25");


$consulta = new Template();
print $consulta->getHtml("Darkwolrd");



abstract class BadTemplate implements iTemplate{

	private $vars = array();

	public function setVariable ($name,$var){

		print $this->vars['name'] = $var;
		print "esta es la segunda";
	}


}

class resultado extends BadTemplate{

		public function getHtml($template){

				return "ESTO ES UN MENSAJE";

		}

		public function setVariable($name,$var){

			print $this->vars['name'] = $var;
			echo "esto es una prueba de lo que es una function si es llamada nuevamente dentro de la clase que esta heredando, todos los parametros y el algoritmo realizado dentro de ella, sera remplazado por la clase actual que la esta llamando.";
		}


}


$consultas = new resultado();
print nl2br("\n");
$consultas->setVariable("Ansony","30");
print nl2br("\n");
print $consultas->getHtml("HOLI");




interface a{

	public function foo();
}

interface b extends a{

	public function baz($Baz, $baz);

}

#Esto si funcionara

class c implements b{

	public function foo(){


	}

	public function baz($Baz,$baz){


	}

}

// Esto no funcionara y resultara un error fatal

abstract class d implements b{

	public function foo(){


	}

	//Esto dara error debido a que le hace falta el simbolo de declaracion como variable $foo
	// public function baz(foo,$foo){


	// }



}


#ejemplo 3 Herencia multiples de interfaces

interface f{

	public function foo();
}

interface g{

	public function bar();
}


interface h extends f, g {

	public function baz();


}

class t implements h{


	public function foo(){


	}

	public function bar(){


	}


	public function baz(){


	}


}


interface constante{

	const b = 'Interface constant';


}
// Imprime : Interface Constant
echo "<br>".constante::b;

//Sin embargo esto no funcionara ya que no esta permitido 
//Sobrescribir constantes

// class constante2 implements constante{

// 	const b = 'Class constant';

// }



interface ejemconst{

	const b =  "Interface constant"; 

}

//PRINT Interface Constant

echo "<br>".ejemconst::b;

class ejemconst2 implements ejemconst{



}


//Esto funciona ya que se esta llamando la constante por medio de una clase. 

class ejemconst3 extends ejemconst2{

		const b = "Class Constant";
}


echo "<br>".ejemconst3::b;







?>
