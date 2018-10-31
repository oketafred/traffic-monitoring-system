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

    <script type="text/javascript" src="lib/js/jquery.min.js"></script>
    <script type="text/javascript" src="lib/js/tether.min.js"></script>
    <script type="text/javascript" src="lib/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="assets/js/app.min.js"></script>
</head>

<body>
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
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-block">
                                    <h4 class="card-title">Add a New Driver</h4>

                                    <legend class="text-bold">Fill in the form to Add a Driver</legend>
                                    <fieldset class="content-group">
                                        <form action="#">
                                            <div class="form-group row margin-top-10">
                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label">Text Input</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label">Password</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="password" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label">Disabled Input</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" disabled="disabled" >
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label">Readonly Input</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="I am readonly." readonly="readonly">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-2">
                                                    <label class="control-label col-form-label">Placeholder</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" placeholder="I am a placeholder!">
                                                </div>
                                            </div>
                                        </form>
                                    </fieldset>
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