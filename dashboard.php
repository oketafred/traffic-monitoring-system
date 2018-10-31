<?php 

    session_start();

    if (!isset($_SESSION["email"])) {
       
        header("Location: index.php");

    }


 ?>


<!DOCTYPE HTML>
<html>

<head>
    <title>Project Name | Admin Dashboard</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/core.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <link rel="stylesheet" href="assets/icons/fontawesome/styles.min.css">
    <link rel="stylesheet" href="lib/css/chartist.min.css">

    <script type="text/javascript" src="lib/js/jquery.min.js"></script>
    <script type="text/javascript" src="lib/js/tether.min.js"></script>
    <script type="text/javascript" src="lib/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="lib/js/chartist.min.js"></script>
    <script type="text/javascript" src="assets/js/app.min.js"></script>
    <script type="text/javascript">
        $(function() {
            // Dashboard Sales Chart
            // ------------------------------------------------------------------

            var dataMain = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                series: [
                    [5, 4, 3, 7, 5, 10, 3, 4, 8, 10, 6, 8],
                    [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4]
                ]
            };

            var optionsMain = {
                seriesBarDistance: 10
            };

            var responsiveOptionsMain = [
                ['screen and (max-width: 640px)', {
                    seriesBarDistance: 5,
                    axisX: {
                        labelInterpolationFnc: function (value) {
                            return value[0];
                        }
                    }
                }]
            ];
            var chart = new Chartist.Bar('.ct-chart-dashboard', dataMain, optionsMain, responsiveOptionsMain);
        });
    </script>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-toggleable-md">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav">
            <span>
                <i class="fa fa-code-fork"></i>
            </span>
        </button>

        <button class="navbar-toggler navbar-toggler-left" type="button" id="toggle-sidebar">
            <span>
               <i class="fa fa-align-justify"></i>
            </span>
        </button>

        <a class="navbar-brand text-uppercase text-white" href="dashboard.php">Project Name</a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <button class="sidebar-toggle btn btn-flat" id="toggle-sidebar-desktop">
                <span>
                    <i class="fa fa-align-justify"></i>
                </span>
            </button>
            <ul class="navbar-nav ml-auto">
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle dropdown-has-after" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <img src="assets/img/default-user.jpg" alt="" class="user-img"> John Doe
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-user"></i> <span>Profile</span></a>
                        </a>
                        <a class="dropdown-item" href="include/logout.php">
                            <i class="fa fa-sign-out"></i> <span>Logout</span></a>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /NAVBAR -->

    <div class="page-container">
        <div class="page-content">
            <!-- inject:SIDEBAR -->

            <div id="sidebar-main" class="sidebar sidebar-default">
    <div class="sidebar-content">
        <ul class="navigation">
            <li>
                <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>
            <li>
                <a href="index.html"><i class="fa fa-pencil"></i> <span>Drivers</span></a>
                <ul>
                    <li><a href="add_new_driver.php">Add Driver</a></li>
                    <li><a href="view_all_drivers.php">View Drivers</a></li>
                </ul>
            </li>

            <li>
                <a href="index.html"><i class="fa fa-th"></i> <span>Over Speeding</span></a>
                <ul>
                    <li><a href="over_speeding.php">View All</a></li>
                </ul>
            </li>

            <li>
                <a href="index.html"><i class="fa fa-heart"></i> <span>Transaction</span></a>
                <ul>
                    <li><a href="icons_fontawesome.html">Payment Completed</a></li>
                    <li><a href="#">No Payment</a></li>
                </ul>
            </li>

            <li>
                <a href="index.html"><i class="fa fa-mouse-pointer"></i> <span>Users</span></a>
                <ul>
                    <li><a href="pickers_date.html">Add Users</a></li>
                    <li><a href="pickers_time.html">All Users</a></li>
                </ul>
            </li>

            <li>
                <a href="index.html"><i class="fa fa-user"></i> <span>User Profile</span></a>
            </li>

        </ul>
    </div>
</div>

            <!-- inject:/SIDEBAR -->

            <!-- PAGE CONTENT -->
            <div class="content-wrapper">
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="page-title">Dashboard</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <div class="widget-overview bg-primary-1">
                                <div class="inner">
                                    <h2>15K</h2>
                                    <p>Total Drivers</p>
                                </div>

                                <div class="icon">
                                    <i class="fa fa-users"></i>
                                </div>

                                <div class="details bg-primary-3">
                                    <span>View Details <i class="fa fa-arrow-right"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-xs-6">
                            <div class="widget-overview bg-info-1">
                                <div class="inner">
                                    <h2>35K</h2>
                                    <p>Over Speeding</p>
                                </div>

                                <div class="icon">
                                    <i class="fa fa-signal"></i>
                                </div>

                                <div class="details bg-info-3">
                                    <span>View Details <i class="fa fa-arrow-right"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-xs-6">
                            <div class="widget-overview bg-success-1">
                                <div class="inner">
                                    <h2>$8.5K</h2>
                                    <p>Payment Completed</p>
                                </div>

                                <div class="icon">
                                    <i class="fa fa-money"></i>
                                </div>

                                <div class="details bg-success-3">
                                    <span>View Details <i class="fa fa-arrow-right"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-xs-6">
                            <div class="widget-overview bg-danger-1">
                                <div class="inner">
                                    <h2>8,952</h2>
                                    <p>No Payment</p>
                                </div>

                                <div class="icon">
                                    <i class="fa fa-pie-chart"></i>
                                </div>

                                <div class="details bg-danger-3">
                                    <span>View Details <i class="fa fa-arrow-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row margin-top-10">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title">Over Speeding Overview</h5>
                                </div>
                                <div class="ct-chart-dashboard height-250 ct-chart-blue"></div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title">Over Speeding Fees</h5>

                                    <div class="recent-products">
                                        <ul>
                                            <li>
                                                <div class="product-image">
                                                    <img src="assets/img/default-img.png" alt="">
                                                </div>

                                                <div class="product-info">
                                                    <span class="product-title">
                                                        <a href="#">Product Name</a>
                                                        <span class="pull-right">
                                                            <badge class="badge badge-primary">$1,800</badge>
                                                            </span>
                                                    </span>
                                                    <span class="product-description">Product Description goes here.</span>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="product-image">
                                                    <img src="assets/img/default-img.png" alt="">
                                                </div>

                                                <div class="product-info">
                                                    <span class="product-title">
                                                        <a href="#">Product Name</a>
                                                        <span class="pull-right">
                                                            <badge class="badge badge-primary">$1,800</badge>
                                                            </span>
                                                    </span>
                                                    <span class="product-description">Product Description goes here.</span>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="product-image">
                                                    <img src="assets/img/default-img.png" alt="">
                                                </div>

                                                <div class="product-info">
                                                    <span class="product-title">
                                                        <a href="#">Product Name</a>
                                                        <span class="pull-right">
                                                            <badge class="badge badge-primary">$1,800</badge>
                                                            </span>
                                                    </span>
                                                    <span class="product-description">Product Description goes here.</span>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="product-image">
                                                    <img src="assets/img/default-img.png" alt="">
                                                </div>

                                                <div class="product-info">
                                                    <span class="product-title">
                                                        <a href="#">Product Name</a>
                                                        <span class="pull-right">
                                                            <badge class="badge badge-primary">$1,800</badge>
                                                            </span>
                                                    </span>
                                                    <span class="product-description">Product Description goes here.</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /PAGE CONTENT -->
        </div>
    </div>
</body>

</html>