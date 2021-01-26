<?php
    require_once('../../model/conexion/conexion.php');
    require_once('../../controller/sessions/security/securityAdmin.php');
    require_once('../../model/query/admin/queryImplements.php');

    function loadImplements(){//función para cargar usuarios
        //Invocamos una clase para realizar consultas del administrador
        $queries = new queryImplements();
        //Genera consulta en la tabla user para obtener los usuarios
        $result=$queries->showImplementsTable();

        if (!isset($result)) {//En caso de haya un error en la variable resultado
            echo '<h4 class="d-flex m-auto mt-5 pl-phone"> NO HAY IMPLEMENTOS REGISTRADOS</h4>';
        }else{//Si no se encuentra un error se realizara la maquetacion de la tabla para visualizar los usuarios
            echo    '<table class="display table dataTable table-striped table-sm" cellspacing="0">
                    <thead class="header-table">
                        <tr class="text-center">
                            <th class="th-sm">NOMBRE</th>
                            <th class="th-sm">DESCRIPCIÓN</th>
                            <th class="th-sm"></th>
                        </tr>
                    </thead>
                    <tbody>';
                
            foreach ($result as $f){
                echo    '<tr>
                            <td class="colum1 colum1-stats" id="data">'.$f['name_implements'].'</td>
                            <td class="colum2 colum2-stats">'.$f['description_implements'].'</td>
                            <td class="colum5 colum3-stats colum-icon-imp">
                                <a class="icon-table pr-2" href=""><i class="fas fa-eye info-title" data-title="Ver más" id="'.$f['id'].'"></i></a>
                                <a class="icon-table pr-2" href="../../assets/qr/qr-'.$f['id'].'-'.$f['name_implements'].'.png" download="'.$f['name_implements'].'"><i class="fas fa-download info-title icon-qr" data-title="Descargar QR"  id="'.$f['id'].'"></i></a>
                                <a class="icon-table pr-1" href=""><i class="fas fa-file-pdf info-user" data-title="Descargar reporte"  id="'.$f['id'].'"></i></a>
                            </td>
                        </tr>';
            }//end foreach
            echo '</tbody>
            </table>';
        };//end if
    };// ./ cierre función para cargar usuarios

    function viewImplements($id){//función para cargar usuarios

        //Invocamos una clase para realizar consultas del administrador
        $queries = new queryImplements();
        //Genera consulta en la tabla user para obtener los usuarios
        $result=$queries->showImplementsView($id);

        if (!isset($result)) {//En caso de haya un error en la variable resultado
            echo '<h4 class="d-flex m-auto mt-5 pl-phone"> NO HAY COINCIDENCIAS</h4>';
        }else{//Si no se encuentra un error se realizara la maquetacion de la tabla para visualizar los usuarios        
            foreach ($result as $f){
                echo    '<div class="row d-flex">
                            <div class="col s3 right-align p-0 ml-auto ">
                                <div class="qr-cont">
                                    <img src="../../assets/qr/'.$f['url_image'].'" alt="QR code" class="img-qr d-flex">
                                </div>
                            </div>
                            <div class="col s8 mr-5">
                                <div class="title-second">
                                    <h5>'.ucwords($f['name_implements']).'</h5>
                                    <span class="span">'.ucfirst($f['brand_implements']).'</span>
                                </div>
                                <div class="">
                                    <p>'.ucfirst($f['description_implements']).'</p>
                                </div>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col s10 title-divider m-auto ml-2">
                                <h5>Historial</h5>
                                <div class="divider"></div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col s12 d-flex options">
                                <div class="col s6 left-align ml-3 mt-2">
                                    <span>3 Observaciones, 2 veces leído y 1 vez descargado</span>
                                </div>
                                <div class="col s6 right-align mr-3"> 
                                    <a href="observaciones.php"> <button type="button" class="btn btn-actions btn-color-secundary mt-0 btn-special">Ver observaciones</button> </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <table class="display table dataTable table-striped table-sm" cellspacing="0">
                                <thead class="header-table">
                                    <tr class="text-center">
                                        <th class="th-sm">USUARIO</th>
                                        <th class="th-sm">FECHA</th>
                                        <th class="th-sm">ACCIÓN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="colum1 colum1-stats">Juan Perez</td>
                                        <td class="colum2 colum3-stats">Hoy</td>
                                        <td class="colum2 colum3-stats">Leyó</td>
                                    </tr>
                                </tbody>
                                <!-- PREV
                                <i class="fas fa-chevron-left"></i> 
                                NEXt
                                <i class="fas fa-chevron-right"></i> -->
                            </table>
                        </div>';
            }//end foreach
        };//end if
    };// ./ cierre función para cargar usuarios

?>