<?php
    require_once('../../model/conexion/conexion.php');
    require_once('../../controller/sessions/security/securityAdmin.php');
    require_once('../../controller/translation/user.php');
    require_once('../../model/query/admin/queryAdmin.php');

    function loadUsers(){//función para cargar usuarios
        //Invocamos una clase para realizar consultas del administrador
        $queries = new consultas();
        //Genera consulta en la tabla user para obtener los usuarios
        $result=$queries->showUsers();

        if (!isset($result)) {//En caso de haya un error en la variable resultado
            echo '<script>alert("NO HAY NADA");</script>';
            echo '<h2> NO HAY USUARIOS PARA MOSTRAR</h2>';
        }else{//Si no se encuentra un error se realizara la maquetacion de la tabla para visualizar los usuarios
            echo    '<thead class="header-table">
                        <tr class="text-center">
                            <th class="th-sm">Documento</th>
                            <th class="th-sm">Nombre</th>
                            <th class="th-sm">Correo</th>
                            <th class="th-sm">Rol</th>
                            <th class="th-sm">Estado</th>
                            <th class="th-sm">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>';
                
            foreach ($result as $f){
                echo    '<tr>
                            <td class="colum1 colum1-users">'.$f["document"].'</td>
                            <td class="colum2 colum2-users">'.ucfirst($f['full_name']).'</td>
                            <td class="colum3 colum3-users">'.$f["email"].'</td>                        
                            <td class="colum4 colum4-users">'.translationRole($f["role"]).'</td>
                            <td class="colum4 colum5-users">'.translationState(ucfirst($f["state"])).'</td>
                            <td class="colum5 colum6-users d-flex">
                                '.stateValidation($f['state'],$f['id_user']).'
                                <a class="icon-table"><i class="fas fa-pen info-title" data-title="Editar" onclick="viewUser(this)" id="'.$f["id_user"].'"></i></a>
                            </td>
                        </tr>';
            }//end foreach
            echo '</tbody>';
        };//end if
    };// ./ cierre función para cargar usuarios

    function userInformation($id){
        //Invocamos una clase para realizar consultas del administrador
        $queries = new consultas();
        //Genera consulta en la tabla user para obtener las Subsedes
        $result=$queries->userInfo($id);

        if (!isset($result)) {
            echo '<h2> NO HAY USUARIOS PARA MOSTRAR</h2>';
        } else {
            foreach ($result as $f) {
                echo    '<div class="row">
                            <div class="input-field col s12 m6">
                                <input id="name" type="text" class="validate input-control seleccionar" name="name" value="'.ucwords($f['full_name']).'" required maxlength="50" disabled>
                                <label for="name">Nombres</label>
                            </div>
                            <div class="input-field col s12 m6 mt-2">
                                <div>
                                    <label class="prefix-label">Tipo de documento</label>
                                </div>
                                <select class="browser-default seleccionar" name="type_id" required disabled>
                                  <option value="" disabled selected>Selecciona una opción</option>;
                                    '.translationTypeId($f['type_id']).'
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6">
                                <input id="document" type="number" class="validate input-control seleccionar" name="document" value="'.ucwords($f['document']).'" required pattern="[0-9]+" oninvalid="setCustomValidity(Ingrese un formato valido de número de documento)" oninput="setCustomValidity()" maxlength="10" disabled>
                                <label for="document">Documento</label>
                            </div>
                            <div class="input-field col s12 m6 mt-2">
                                <div>
                                    <label class="prefix-label">Rol</label>
                                </div>
                                <select class="browser-default seleccionar" name="role" required disabled>
                                  <option value="" disabled selected>Selecciona una opción</option>
                                    '.translationRoles($f['role']).'
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6">
                                <input id="email_inline" type="email" class="validate input-control seleccionar" name="email" value="'.$f["email"].'" required pattern="[a-zA-Z0-9_.-]+([.][a-zA-Z0-9_]+)*@montechelo.com" minlength="8" oninvalid="setCustomValidity(Ingrese un formato de correo valido: nombre@montechelo.com)" oninput="setCustomValidity()" disabled>
                                <label for="email_inline">Correo</label>
                            </div>
                        </div>';
            }
        }
    }
?>