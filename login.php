
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
if(isset($_SESSION['login'])){
   header('location:index.php');
}
include 'connect.php';
// $password=md5('1234');
// $res=mysqli_query($conn,"UPDATE login SET password='$password' WHERE email='admin@gmail.com'");
?>
<!-- // nulled by https://codeintra.com -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">


  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
   Andorid App
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />



<style type="text/css">
  .wrnf {
    color: white;
    background: #ff6373;
    /* padding: 2px; */
    margin-bottom: 14px;
}
.wrnf p{
  padding: 11px;
}
</style>

</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="http://burhansoftwareltd.com/">
             Burhan Store (Earning Master)
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a style="letter-spacing: -0.025rem; text-transform: uppercase; box-shadow: 0 4px 7px -1px rgb(0 0 0 / 11%), 0 2px 4px -1px rgb(0 0 0 / 7%); background-image: linear-gradient(310deg, #7928CA 0%, #FF0080 100%); background-size: 150%; background-position-x: 25%; display: inline-block; font-weight: 700; line-height: 1.4; color: white; text-align: center; vertical-align: middle; cursor: pointer; user-select: none; background-color: transparent; border: 1px solid transparent; padding: 0.75rem 1.5rem; font-size: 0.75rem; border-radius: 0.5rem; transition: all 0.15s ease-in;" href="https://codecanyon.net/user/burhanstore/portfolio" class="btn btn-sm btn-round mb-0 me-1 bg-gradient-dark">Buy NOW</a>
                </li>
               
              </ul>
            </button>
            
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                  
                </div>
                <div class="card-body">
                 
                  
                        
     <?php if(isset($_SESSION['wrong'])) { ?> <div class="wrnf"><p>Wrong Email Or Password </p> </div><?php unset($_SESSION['wrong']); } ?>
     <form action="check_login.php" method="post">
       <div class="input-group mb-3">
         <input type="email" class="form-control" name="email" placeholder="Email">
         <div class="input-group-append">
           <div class="input-group-text">
             <span class="fas fa-envelope"></span>
           </div>
         </div>
       </div>
       <div class="input-group mb-3">
         <input type="password" class="form-control" name="password" placeholder="Password">
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
               Remember Me
             </label>
           </div>
         </div>
         <!-- /.col -->
         <div class="col-4">
           <input type="submit" class="btn btn-primary btn-block" value="Sign In">
         </div>
         <!-- /.col -->
       </div>
     </form>
     




                </div>
                 
              </div>
            </div>
             
          </div>
        </div>
      </div>
    </section>
  </main>
 


 
  <footer class="footer py-5">
    <div class="container">
      
    

      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> <a href="https://codeintra.com" target="_blank">Nulled by codeintra.com</a>

          </p>
        </div>
      </div>
    </div>
  </footer>
   




</body>

</html>