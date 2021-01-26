<?php
	//Function for modal windows
	//LOGIN MODALS
	function modalAlertLogin($mensaje,$url,$type,$sal){	
		//Variables
		$var =null;
		$result=null;

		
		for ($i=1; $i <=$sal ; $i++) { 
			$result.='../';
		}
		//Links CSS and JS
		echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.6.1/dist/sweetalert2.min.css">  
		<link rel="shortcut icon" href="../../img/icon.png" type="image/x-icon">   
		<title>MONTECHELO</title>
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="'.$result.'/css/modal.css"> 
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.6.1/dist/sweetalert2.all.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>';

		//Script with code for modal
		echo  "<script>
                    $(document).ready(function(){
                        Swal.fire({
                                  icon: '".$type."',
								  title: '".$mensaje."',
								  showConfirmButton: false,
								  timer: 1000,
								  timerProgressBar: true
                        }).then((result) => {           	
                            location.href='".$url."'
                            document.forms['form'].submit()
                        });
                    });
              </script>";
	}

	//funcion creada para alertas de seguridad
	function modalAlertSecurity($mensaje,$url,$type,$sal)
	{	
		//Variables
		$var =null;
		$result=null;

		
		for ($i=1; $i <=$sal ; $i++) { 
			$result.='../';
		}
		//Links CSS and JS
		echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.6.1/dist/sweetalert2.min.css">  
		<link rel="shortcut icon" href="'.$result.'img/icon.png" type="image/x-icon">   
		<title>QR MONTECHELO</title>
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="'.$result.'/css/modal.css"> 
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.6.1/dist/sweetalert2.all.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<style>
		/*MODAL*/
		.swal2-container.swal2-backdrop-show, .swal2-container.swal2-noanimation {
			background: #333 !important;
			z-index: 10000;
		}
		</style>';

		//Script with code for modal
		echo  "<script>
				$(document).ready(function(){
					Swal.fire({
						icon: '".$type."',
						title: '".$mensaje."',
					}).then((result) => {           	
						location.href='".$url."'
						document.forms['form'].submit()
					});
				});
			   </script>";
	}

	//funcion creada para modales comunes 
	function modalAlert($mensaje,$url,$type,$sal)
	{	
		//Variables
		$var =null;
		$result=null;

		
		for ($i=1; $i <=$sal ; $i++) { 
			$result.='../';
		}
		//Links CSS and JS
		echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.6.1/dist/sweetalert2.min.css">  
		<link rel="shortcut icon" href="'.$result.'img/icon.png" type="image/x-icon">    
		<title>QR MONTECHELO</title>   
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="'.$result.'/css/modal.css"> 
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.6.1/dist/sweetalert2.all.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<style>
		/*MODAL*/
		.swal2-container.swal2-backdrop-show, .swal2-container.swal2-noanimation {
			background: #333 !important;
		}
		</style>';

		//Script with code for modal
		echo  "<script>
				$(document).ready(function(){
					Swal.fire({
						icon: '".$type."',
						title: '".$mensaje."',
					}).then((result) => {           	
						location.href='".$url."'
						document.forms['form'].submit()
					});
				});
			   </script>";
	}
	// //funcion creada para modales de los implementos 
	function modalAlertimplements($mensaje,$url,$type,$sal,$id,$name, $fech_register){	
		//Variables
		$var =null;
		$result2=null;


		for ($i=1; $i <=$sal ; $i++) { 
			$result2.='../';
		}

		//Links CSS and JS
		echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.6.1/dist/sweetalert2.min.css">  
		<link rel="shortcut icon" href="'.$result2.'img/icon.png" type="image/x-icon">   
		<title>QR MONTECHELO</title>   
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="'.$result2.'/css/modal.css"> 
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.6.1/dist/sweetalert2.all.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<style>
		/*MODAL*/
		.swal2-container.swal2-backdrop-show, .swal2-container.swal2-noanimation {
			background: #333 !important;
		}
		.decoration-none{
			text-decoration: none;
			color: #fff;
		}
		</style>';

		//Script with code for modal
		echo  "<script>
				$(document).ready(function(){
					Swal.fire({
						icon: '".$type."',
						title: '".$mensaje."',
						showCancelButton: true,
						confirmButtonColor: '#3085d6',
						cancelButtonColor: '#002A60',
						cancelButtonText: 'Ir a Implementos',
						confirmButtonText: '<a> Descargar QR </a>'
					}).then((result) => {  
						if (result.isConfirmed) {  
							location.href='".$url."';
						}else{
							location.href='".$url."';
						}      
					});
					document.querySelector('.swal2-confirm a').classList.add('decoration-none');
					document.querySelector('.swal2-confirm a').setAttribute('href', '".$result2."assets/qr/qr-".$id.'-'.$name.".png');
					document.querySelector('.swal2-confirm a').setAttribute('download', 'qr-".$id.'-'.$name."');
				});
			</script>";


		
	}
?>