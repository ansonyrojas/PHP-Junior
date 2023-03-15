<?php

			
						

						
						function render_data($data,$data2){

								$html = '';	

							

											$html = file_get_contents('vista_001.html');

											foreach($data as $clave => $valor){

														$html = str_replace('{'.$clave.'}',$valor, $html);
														

											}

											
											foreach($data2 as $clave =>$valor){


														$html = str_replace('{'.$clave.'}',$valor,$html);

											}	


												
								
										

												

			 print $html;
}





						



 ?>
 
 
