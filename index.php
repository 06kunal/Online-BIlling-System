<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("location: login.php");
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">

  <title>

    Online Billing System

  </title>



  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

  <!-- CSS Files -->



  <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />





</head>


<body class="g-sidenav-show  bg-gray-100">





  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">

    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="./assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Online Billing System</span>
      </a>
    </div>


    <hr class="horizontal light mt-0 mb-2">

    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main" style="height: calc(100vh - 200px)">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="./index.php">

            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>

            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>


        


        <li class="nav-item">
          <a class="nav-link text-white " href="">

            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>

            <span class="nav-link-text ms-1">Notifications</span>
          </a>
        </li>


        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="profile.php">

            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>

            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>


        <li class="nav-item">
          <a class="nav-link text-white " href="https://dashboard.razorpay.com/app/payments">

            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>

            <span class="nav-link-text ms-1">Transaction History</span>
          </a>
        </li>


        <li class="nav-item">
          <a class="nav-link text-white " href="./logout.php">

            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>

            <span class="nav-link-text ms-1">Sign Out</span>
          </a>
        </li>


        <!-- <li class="nav-item">
          <a class="nav-link text-white " href="./sign-up.html">

            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>

            <span class="nav-link-text ms-1">Sign Out</span>
          </a>
        </li> -->

      </ul>
    </div>

  </aside>



  <main class="main-content border-radius-lg ">
    <!-- Navbar -->

    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">

        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">

            

          </div>
          <ul class="navbar-nav  justify-content-end">

            <li class="nav-item d-flex align-items-center">
              <p href="./pages/sign-in.html" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>

                <span class="d-sm-inline d-none"><?php echo "" . $_SESSION['username'] ?></span>

              </p>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- End Navbar -->




    <div class="container-fluid py-4">

      <div class="row">
        <div class="col-lg-7 position-relative z-index-2">
          <div class="card card-plain mb-4">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-lg-6">
                  <div class="d-flex flex-column h-100">
                    <h2 class="font-weight-bolder mb-0">Pay Your Bills Here...</h2>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-5 col-sm-5">
              <div class="card  mb-2">
                <div class="card-header p-3 pt-2">
                  <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">weekend</i>
                  </div>
                  <div class="text-end pt-1">
                    <h1>
                    <p class="text-sm mb-0 text-capitalize">Electricity Bill</p>

                    </h1>
                    <h4 class="mb-0" style="color: white;">Electricity</h4>
                  </div>
                </div>

                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                  <a href="electricity.php">
                  <p class="mb-0"><span class="text-success text-sm font-weight-bolder" style="color:white;">Click to
                      pay Bill</span></p>
                  </a>
                 
                </div>
              </div>

              <div class="card  mb-2">
                <div class="card-header p-3 pt-2">
                  <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">leaderboard</i>
                  </div>
                  <div class="text-end pt-1">
                    <h1>
                    <p class="text-sm mb-0 text-capitalize">Water Bill</p>
                    </h1>
                    <h4 class="mb-0" style="color: white;">Pay Bill</h4>
                  </div>
                </div>

                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                  <a href="Water.php">
                  <p class="mb-0"><span class="text-success text-sm font-weight-bolder" style="color: white;">Click to
                      Pay Bill</span></p>
                  </a>
                  
                </div>
              </div>

            </div>
            <div class="col-lg-5 col-sm-5 mt-sm-0 mt-4">
              <div class="card  mb-2">
                <div class="card-header p-3 pt-2 bg-transparent">
                  <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">store</i>
                  </div>
                  <div class="text-end pt-1">
                    <h1>
                    <p class="text-sm mb-0 text-capitalize ">Mobile Recharge</p>

                    </h1>
                    <h4 class="mb-0 " style="color: white;">.</h4>
                  </div>
                </div>

                <hr class="horizontal my-0 dark">
                <div class="card-footer p-3">
                  <a href="Mobile.php">
                  <p class="mb-0 "><span class="text-success text-sm font-weight-bolder" style="color: white;">Click to
                      Pay Bill</span></p>
                  </a>
                  
                </div>
              </div>

              <div class="card ">
                <div class="card-header p-3 pt-2 bg-transparent">
                  <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">person_add</i>
                  </div>
                  <div class="text-end pt-1">
                    <h1>
                    <p class="text-sm mb-0 text-capitalize ">Bill</p>

                    </h1>
                    <h4 class="mb-0 " style="color: white;">.</h4>
                  </div>
                </div>

                <hr class="horizontal my-0 dark">
                <div class="card-footer p-3">
                  <p class="mb-0 "><span class="text-success text-sm font-weight-bolder" style="color: white;">Click to
                      Pay Bill</span></p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

    </div>


  </main>

  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>


  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>


  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>