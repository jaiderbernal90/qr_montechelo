<?php 

    function stateValidation($state,$id){
        $response = null;
        if($state === '1'){
            $response = '<div class="switch icon-table pr-1 info-user active"               data-title="Deshabilitar/Habilitar Usuario">
                        <label>
                            <input type="checkbox" id="'.$id.'" checked>
                            <span class="lever"></span>
                        </label>
                    </div>';
        }else if($state === '0'){
            $response = '<div class="switch icon-table pr-1 info-user active"               data-title="Deshabilitar/Habilitar Usuario">
                        <label>
                            <input type="checkbox" id="'.$id.'">
                            <span class="lever"></span>
                        </label>
                    </div>';
        }

        return $response;
    }




?>