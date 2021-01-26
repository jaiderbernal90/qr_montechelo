<?php 

//Agregamos la libreria para genera códigos QR
require "../../../library/phpqrcode/qrlib.php";    

function createQR($id,$name){
    // $id = $_POST['name'];
    $qr = null;
    //Declaramos una carpeta temporal para guardar la imagenes generadas
     $dir = '../../../assets/qr/';

	//Si no existe la carpeta la creamos
	if (!file_exists($dir)){
        mkdir($dir);
    }
   //Declaramos la ruta y nombre del archivo a generar
   $filename = $dir.'qr-'.$id.'-'.$name.'.png';
   $name = 'qr-'.$id.'-'.$name.'.png';

    if(!is_file($filename)){
        //Parametros de Condiguración
            
        $tamaño = 10; //Tamaño de Pixel
        $level = 'H'; //Precisión Baja
        $framSize = 3; //Tamaño en blanco
        $contenido = "http://localhost/qr-montechelo/view/admin/infoQR.php?id=".$id.""; //Texto

        //Enviamos los parametros a la Función para generar código QR 
        QRcode::png($contenido, $filename, $level, $tamaño, $framSize); 


        $consultas = new queryImplements;

        $result = $consultas->insertURL($name,$id);

        // $filePath = $dir.$filename;

        // $im = imagecreatefrompng($filename);
    
        // header('Content-Type: image/png');
    
        // imagepng($im);
    
        // // Vamos a mostrar un png
        // header('Content-type: image/png');
    
        // // Se le da un nombre
        // header('Content-Disposition: attachment; filename="'.$name.'"');
    
        // // La fuente de PNG se encuentra en original.pdf
        // readfile($filename);
        // imagedestroy($im);
        // unlink($filename);
        // exit();
           
    }        

}

?>