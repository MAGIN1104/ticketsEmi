<?php
    require "./utils/newTicket.php";

    if ($_SERVER['REQUEST_METHOD']==='POST'){
            $nombre     =$_POST['nombres'];
            $apellido   =$_POST['apellidos'];
            $correo     =$_POST['correo'];
            $celular    =$_POST['celular'];
            $direccion  =$_POST['unidad'];
            $asunto     =$_POST['asunto'];
            $mensaje    =$_POST['mensaje'];
            nuevoTicket($nombre,$apellido,$correo,$celular,$direccion,$asunto,$mensaje);
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/style.css" />

    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js?render=6Lchev8bAAAAAEQJog5Om2_TmxxVQMJNagMBO7oa'> 
    </script>
    <title>EMI-REPORT</title>
  </head>
  <body>
    <div class="cuerpo">
      <div class="contenido">
        <img class="logo" src="./assets/img/emi.png" alt="" width="50%" />
        <h2 class="titulo">root@emi:$~ <span class="typed"></span></h2>
        <div class="card bg-secondary text-white">
          <div class="card-body">
            <h5 class="card-title">Formulario de reporte de Incidentes</h5>
            &nbsp;
            <div class="col-auto">

              <form class="formulario"  method="POST">
                <h6>Nombres<span style="color: red">*</span></h6>
                <input
                  class="form-control"
                  id="nombres"
                  name="nombres"
                  type="text"
                  placeholder="Ingrese su nombre"
                  autocomplete="off"
                  required
                />&nbsp;
                <h6>Apellidos<span style="color: red">*</span></h6>
                <input
                  class="form-control"
                  id="apellidos"
                  name="apellidos"
                  type="text"
                  placeholder="Ingrese su apellido paterno y materno"
                  autocomplete="off"
                  required
                />&nbsp;
                <h6>Correo Institucional<span style="color: red">*</span></h6>
                <input
                  class="form-control"
                  id="correo"
                  name="correo"
                  type="email"
                  placeholder="Ingrese su correo institucional"
                  autocomplete="off"
                  required
                />&nbsp;
                <h6>Celular</h6>
                <input
                  class="form-control"
                  type="text"
                  id="celular"
                  name="celular"
                  placeholder="Ingrese su número de contacto"
                  autocomplete="off"
                />&nbsp;
                  <div id="alerta" class="alert alert-danger" onblur="celular()" role="alert" style="display: none;">
                      Introduzca un número valido!
                  </div>
                  <h6>Unidad/Dirección</h6>
                  <input
                          class="form-control"
                          type="text"
                          id="unidad"
                          name="unidad"
                          placeholder="Ingrese la dirección o unidad afectada"
                          autocomplete="off"
                  />&nbsp;
                <h6>Asunto<span style="color: red">*</span></h6>
                <input
                  class="form-control"
                  id="asunto"
                  name="asunto"
                  type="text"
                  placeholder="Indique de que se trata el incidente"
                  autocomplete="off"
                  required
                />&nbsp;
                <h6>Mensaje<span style="color: red">*</span></h6>
                  <textarea
                    class="form-control"
                    id="mensaje"
                    name="mensaje"
                    placeholder="Por favor describa brevemente los detalles del incidente"
                    required
                    style="height: 100px"
                  ></textarea>
                  <br>
                  <div class="g-recaptcha" data-sitekey="6LdfB1ocAAAAALBc0K1w-RymD9dsNmxjpTfYFRHx"></div>
                  <br>
                <input class="form-control btn-primary"  type="submit" value="REPORTAR">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <script src="./js/main.js"></script>
  <script src="http://falconmasters.com/demos/particulas/particles.min.js"></script>
  <script src="http://falconmasters.com/demos/particulas/particulas.js"></script>
</html>