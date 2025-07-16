<?php
include_once "library/conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "library/head.php"; ?>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>E-Learning System</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>Hidise</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <?php include "library/sidebar.php"; ?>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/img.jpg" alt="">John Doe
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="javascript:;"> Profile</a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">Help</a>
                                    <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </div>
                            </li>

                            <li role="presentation" class="nav-item dropdown open">
                                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="text-center">
                                            <a class="dropdown-item">
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Form Elements</h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h4 class="mb-0">User Registration Form</h4>
                                </div>
                                <div class="card-body">

                                    <form action="" method="POST">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Full Name <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="username" placeholder="Enter full name" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label">Email <span class="text-danger">*</span></label>
                                            <input class="form-control" type="email" name="email" placeholder="Enter email" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label">Password <span class="text-danger">*</span></label>
                                            <input class="form-control" type="password" name="password" placeholder="Enter password" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label">Role <span class="text-danger">*</span></label>
                                            <select name="usertype" class="form-control" required>
                                                <option value="">Select Role</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Teacher">Teacher</option>
                                                <option value="User">User</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label">Create Date <span class="text-danger">*</span></label>
                                            <input class="form-control" type="date" name="date" value="<?php echo date('Y-m-d') ?>">
                                        </div>
                                        <div class="form-group text-end">
                                            <button class="btn btn-secondary" type="reset">Cancel</button>
                                            <button class="btn btn-warning" type="button" onclick="this.form.reset()">Reset</button>
                                            <button class="btn btn-success" type="submit" name="btnregister">
                                                <i class="bi bi-check-circle-fill me-2"></i>Submit
                                            </button>
                                        </div>
                                    </form>

                                    <?php
                                    if (isset($_POST['btnregister'])) {
                                        $un = mysqli_real_escape_string($conn, $_POST['username']);
                                        $em = mysqli_real_escape_string($conn, $_POST['email']);
                                        $pa = mysqli_real_escape_string($conn, $_POST['password']);
                                        $ut = mysqli_real_escape_string($conn, $_POST['usertype']);
                                        $da = mysqli_real_escape_string($conn, $_POST['date']);
                                        $insert = mysqli_query($conn, "INSERT INTO users VALUES (null, '$un', '$em', '$pa', '$ut', '$da')");
                                        echo "<div class='alert alert-success mt-3'>Inserted Successfully</div>";
                                    }
                                    ?>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <?php include "library/script.php"; ?>
        <!-- <?php include "library/footer.php"; ?> -->

</body>

</html>