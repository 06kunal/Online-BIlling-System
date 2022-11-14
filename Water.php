<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <title>Electricity Bill</title>


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


    <style>
        * {

            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        .e-container {
            max-width: 80%;
            margin-left: 250px;
            padding: 34px;

        }

        h1 {
            text-align: center;
            padding: 20px 0px;
        }

        form {
            align-items: center;
            display: flex;
            justify-content: center;
            flex-direction: column;
        }


        input {
            padding: 1px;
        }

        button {
            padding: 5px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            text-align: center;
        }


        .btn {
            padding: 10px;
        }

        .form {
            padding: 0 0 20px 0;
        }

        .print-bill {
            color: black;
            font-size: large;
        }
    </style>
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

    <!-- End Navbar -->


    <!-- Generate Link -->
    <div class="e-container">
        <h1>Select Your Water Bill Plan Here.</h1>

        <form action="" , method="post">
            <div class="form">
                <label for="input bill id" style="color:black; font-size:large">Enter your Bill-ID number: </label>
                <input type="Text" name="Eid" id="e-id" placeholder="Enter Bill id">
            </div>

            <div class="btn">
                <button type="submit" name="submit-btn" class="generate-link-btn">Show Plans</button>
            </div>


            <div class="print-bill" >
                <?php
                if (isset($_POST['submit-btn'])) {    ?>


                    <table style="width: 500px;">
                        <tr>
                            <th>Serial No.</th>
                            <th>Bill Amount</th>
                            <th>Valadity</th>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>499 </td>
                            <td>1 month</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>4999 </td>
                            <td>1 year</td>
                        </tr>
                        
                    </table>
                    <form action="" style="align-items: center;">
                        <label for="EnterAmount" style="font-size:22px;margin-top: 15px;">Enter Your plan amount: </label>
                        <input type="text" name="amount" style="width: 110px;">
                        <button type="submit"  formaction = "payscript.php" style="padding: 0 30px 0 30px;font-size: 16px;">Pay</button>
                    </form>
                <?php
                }


                ?>
            </div>



        </form>




    </div>
</body>

</html>