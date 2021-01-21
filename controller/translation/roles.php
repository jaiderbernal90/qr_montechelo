<?php 
    function translationRole($role){
        $rol = null;

        if( $role === '2'){
            $rol = 'Visualizador';
        }elseif( $role === '1'){
            $rol = 'Administrador';
        }

        return $rol;
    }

    function translationState($state){
        $estado = null;

        if($state === '1'){
            $estado = 'Activo';
        }else{
            $estado = 'Inactivo';
        }

        return $estado;
    }

    function translationTypeId($id){
        $result = null;
        $t_id = $id;

        if ($t_id === '1') {
            $result = "<option selected value='".$t_id."'>Cédula de Ciudadania</option>
            <option value='2'>Cédula de Extranjería</option>
            <option value='3'>Tarjeta de Identidad</option>";
        }else if ($t_id === '2') {
            $result = "<option selected value='".$t_id."'>Cédula de Extranjería</option>
            <option value='1'>Cédula de Ciudadania</option>
            <option value='3'>Tarjeta de Identidad</option>";
        }else if ($t_id === '3') {
            $result = "<option selected value='".$t_id."'>Tarjeta de Identidad</option>
            <option value='1'>Cédula de Ciudadania</option>
            <option value='2'>Cédula de Extranjería</option>";
        }
        return $result;
    }

    function translationRoles($role){
        $rol = null;

        if ($role === '1') {
            $rol = '<option selected value="'.$role.'">Administrador</option>
            <option value="2">Visualizador</option>';
        }else if ($role === '2') {
            $rol = '<option selected value="'.$role.'">Visualizador</option>
            <option value="1">Administrador</option>';
        }

        return $rol;
    }
?>