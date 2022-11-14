<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("location: login.php");
}


?>


<!DOCTYPE html>
<html>

<head>


    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="/razorpay-php-testapp/pay.php"></script>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- CSS Files -->



    <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 300px;
      margin: auto;
      text-align: center;
      font-family: arial;
    }

    .title {
      color: grey;
      font-size: 18px;
    }

    button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
    }

    a {
      text-decoration: none;
      font-size: 22px;
      color: black;
    }

    button:hover,
    a:hover {
      opacity: 0.7;
    }




    
  </style>
</head>

<body>

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


        <!-- <li class="nav-item">
                    <a class="nav-link text-white " href="./billing.html">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>

                        <span class="nav-link-text ms-1">Billing</span>
                    </a>
                </li> -->


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
          <a class="nav-link text-white " href="./profile.php">

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



  <!-- Navbar -->

  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
    <div class="container-fluid py-1 px-3">

      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">

          <!-- <div class="input-group input-group-outline">
                        <label class="form-label">Type here...</label>
                        <input type="text" class="form-control">
                    </div> -->

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



  <h2 style="text-align:center">User Profile </h2>

  <div class="card">
    <img src="man-dummy.jpg" alt="Image" style="width:100%">
    <h1><?php echo "" . $_SESSION['username'] ?></h1>
    <p class="title">Online Billing System</p>
    <p>FREE PAY</p>
    <div style="margin: 24px 0;">

    </div>

  </div>

</body>

</html>