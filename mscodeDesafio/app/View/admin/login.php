<?php
    session_start(); // Inicia a sessão.
?>

<!DOCTYPE html>
 <html lang="pt-br">

 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MS Code | Login Admin</title>
  <link rel="icon" href="../assets/img/favicon.ico">
  <link rel="stylesheet" href="../../../assets/css/app.css">

  <!-- Custom fonts for this template-->
  <link href="../assets/vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../assets/css/sb-admin-2.css" rel="stylesheet">
  <style>
    body {
        background-image: url("../assets/img/bg-login.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }

    .bg-login-svg {
        background-image: url('../assets/img/login.svg');
        background-repeat: no-repeat;
        background-position: center;
    }
   </style>
 </head>

 <body>
  <main style="height: 100vh" class="d-flex align-items-center">
   <div class="container" style="width: 100%;">
    <!-- Outer Row -->
    <div class="row justify-content-center">
     <div class="col-xl-10 col-lg-12 col-md-9 ofse">
      <div class="card o-hidden border-0 shadow-lg">
       <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
         <div class="col-lg-6 d-none d-lg-block bg-login-svg"></div>
         <div class="col-lg-6">
          <div class="p-4">
           <div class="text-center mt-2 mb-4">
            <img src="../assets/img/logo-4.png" alt="">
           </div>
           <?php include('../erros/alerts.php') ?>

           <form class="user" action="../../../back-end/controllers/checkLogin.php" method="POST">
            <div class="form-group mt-4">
             <input type="email" name="email" class="form-control form-control-user font-size-login" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="E-mail" required>
            </div>
            <div class="form-group mt-2">
             <input type="password" name="password" class="form-control form-control-user font-size-login" id="exampleInputPassword" placeholder="Senha" required>
            </div>
            <div class="form-group mt-2">
             <div class="custom-control custom-checkbox small">
              <input type="checkbox" class="custom-control-input" id="customCheck">
              <label class="custom-control-label" for="customCheck">Lembre-me</label>
             </div>
            </div>
            <button type="submit" class="btn btn-danger btn-user btn-block mb-3 font-size-title-inventory"> Entrar </button>
            <a href="../../../index.php" class="btn btn-dark btn-user btn-block mb-3 font-size-title-inventory"> One Page </a>
           </form>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </main>

  <!-- Bootstrap core JavaScript-->
  <script src="../assets/vendor/jquery/jquery.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../assets/vendor/jquery-easing/jquery.easing.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../assets/js/sb-admin-2.js"></script>

 </body>
</html>