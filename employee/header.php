<?php
session_start();
//Checking User Logged or Not
if(empty($_SESSION['user'])){
 header('location:index.php');
}

?>

    <header class="main-header">
        <a style="background-color: white" href="index.php" class="logo">
            <!-- Logo -->
            <span class="logo-mini">
                  <img src="../assets/dist/img/mini-logo.png" alt="">
               </span>
            <span class="logo-lg">
                  <img src="../assets/dist/img/logo.jpeg" alt="">
               </span>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <!-- Sidebar toggle button-->
                <span class="sr-only">Toggle navigation</span>
                <span class="pe-7s-angle-left-circle"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <!-- user -->
                    <li class="dropdown dropdown-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="../assets/dist/img/avatar5.png" class="img-circle" width="45" height="45" alt="user"></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="profile.php">
                                    <i class="fa fa-user"></i>
                                    <?php echo $_SESSION['user']['email'];?>
                                </a>

                                <a href="profile.php">
                                    <i class="fa fa-user"></i>
                                    <?php echo $_SESSION['user']['typeofuser'];?>
                                </a>
                            </li>

                            <li>
                                <a href="logout.php">
                                    <i class="fa fa-sign-out"></i> Signout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

 <?php include "menu.php" ?>