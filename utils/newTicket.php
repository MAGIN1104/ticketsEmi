<?php
require_once 'RequestTracker.php';

function validarUrl(&$url) {
    $cabeceras = @get_headers($url);
    if ($cabeceras === false) return false; // Cuando no funciona el servidor
    foreach($cabeceras as $header) {
        // Una $url es correcta cuando el codigo 301 o 302 esto redirecciona a 200:
        if(preg_match("/^Location: (http.+)$/",$header,$m)) $url=$m[1];
        if(preg_match("/^HTTP.+\s(\d\d\d)\s/",$header,$m)) $code=$m[1];
    }
    if($code==200) return true; // $code 200 == OK
    //Para cualquier otro caso retorna False
    else return false;
}

function nuevoTicket($nombres, $apellidos, $correo, $celular, $direccion, $asunto, $mensaje){
    $username = "diego";
    $password = "diego";
    $solicitante = "magin1104@gmail.com";
    $rt_queue = "Incidents";
    $url = "http://34.125.59.98:8080";
    if(validarUrl($url)){
        $rt = new RequestTracker($url, $username, $password);
        $content = array(
            'Queue'=>$rt_queue,
            'Requestor'=>$solicitante,
            'Subject'=>$asunto,
            'Text'=>$mensaje,
            'CF-Nombres'=>$nombres,
            'CF-Apellidos'=>$apellidos,
            'CF-Correo Institucional'=>$correo,
            'CF-Celular'=>$celular,
            'CF-Dirección/Unidad afectada'=>$direccion
        );
        $rt->createTicket($content);
    }else{
        echo "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">"."El servicio se encuenta inactivo".
            "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>".
            "</div>";
    }
}
