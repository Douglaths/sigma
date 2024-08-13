<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="/sigma/Assets/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Sigma Soft</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
       <img src=".//images/Logo-removebg-preview.png" alt="">
      </div>
      <div class="login-box">
        <form class="login-form" action="inicio.html">
          <h3 class="login-head"><i class="bi bi-person me-2"></i>INICIAR SESIÒN</h3>
          <div class="mb-3">
            <label class="form-label">CORREO</label>
            <input class="form-control" type="text" placeholder="Correo" autofocus>
          </div>
          <div class="mb-3">
            <label class="form-label">CONTRASEÑA</label>
            <input class="form-control" type="Contraseña" placeholder="Contraseña">
          </div>
          <div class="mb-3">
            <div class="utility">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox"><span class="label-text">Recordar</span>
                </label>
              </div>
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Recuperar Contraseña</a></p>
            </div>
          </div>
          <div class="mb-3 btn-container d-grid">
            <button class="btn btn-primary btn-block"><i class="bi bi-box-arrow-in-right me-2 fs-5"></i>INICIAR SESIÓN</button>
          </div>
        </form>
        <form class="forget-form" action="inicio.html">
          <h3 class="login-head"><i class="bi bi-person-lock me-2"></i>RECUPERAR</h3>
          <div class="mb-3">
            <label class="form-label">CORREO</label>
            <input class="form-control" type="text" placeholder="Correo">
          </div>
          <div class="mb-3 btn-container d-grid">
            <button class="btn btn-primary btn-block"><i class="bi bi-unlock me-2 fs-5"></i>ENVIAR</button>
          </div>
          <div class="mb-3 mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="bi bi-chevron-left me-1"></i>Volver al Inicio</a></p>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>