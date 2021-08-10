<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Bago | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">
    <!-- Bago style -->
  <link rel="stylesheet" href="css/bagostyle.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page hero-image">
<div class="login-box">
  <div class="login-logo">
   <img src="imagenes/Logo_Bago-completo_blanco.png" height="150" width="350" alt="Logo Image" >
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Loguearse para Iniciar su sesión</p>

      <form role="form" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control"  id="usuario"  name="usuario" placeholder="Usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control"  id="clave" name="clave" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Recuerdame
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Loguearse</button>
            
            <?php
                session_start();
                    require_once 'Controlador/usuario.controlador.php';
                    
                    require_once 'modelo/utilitario.php';
                    $mutil = new Utils();
                    $mutil -> console_log('entro');
                    
                    $cusuario = new ControladorUsuario();
                    $resp= $cusuario -> ctrloginUserWeb();
                    //echo "<script> alert(' respuesta: ".$resp." ')</script>";
                    
                    if (is_null( $resp)){
                      $mutil -> console_log('respuesta null');
                      //echo "<script> alert(' Error: Error de conexión al servidor')</script>";
                    }else{
                      $mutil -> console_log('devolvio respuesta: '.$resp );
                      $data = explode("|",$resp);
                      if ($data[0]=="1"){
                        $_SESSION['session_id']=$data[1];
                        $_SESSION['session_usuario']=$data[2];
                        header("Location:tablero.php");
                        //echo "<script> alert(' respuesta: ".$resp." ')</script>";
                      }elseif ($data[0]=="0"){
                        echo "<script> alert(' Error: ".$data[1]."')</script>";                      
                      }else{
                        //echo "<script> alert(' Error: Error de conexión al servidor')</script>";                      
                      }
                    }
                    
                    
                  ?>
            
          </div>
          <!-- /.col -->
        </div>
      </form>

   
     
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>

</body>
</html>
