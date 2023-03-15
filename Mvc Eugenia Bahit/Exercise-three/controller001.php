<?php 








				function invocar_f1(){

								require_once('models001.php');

								$data = new Login();

								$data->llogin('Usuario','Password');

								settype($data, 'array');

								return $data;

				}

					
				function invocar_f2(){

						require_once('models001.php');
						$data2 = new Login();

						$data2->Texto('ingresa tu usuario porfavor', 'Ingresa tu password');

						settype($data2, 'array');

						return $data2;

				}


					function enviar_data(){

								$data = invocar_f1();

							

										$data2 = invocar_f2();


											
								

														require_once('view001.php');

													

															render_data($data,$data2);
									

					}

					enviar_data();



?> 
