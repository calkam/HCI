<?php
    session_destroy();
    session_start();

    $_SESSION["USER"] = "calkam";

    //if(!isset($_SESSION["article"])){
        $_SESSION["article"] = array(
            "1" => array(
                "icon"       => "https://static.alipson.fr/ravensburger.17/ravensburger-puzzle-500-pices-carr--petit-panda.154140-1.550.jpg",
                "author"     => "calkam",
                "date"       => "05/04/2018",
                "grade"      => 4,
                "title"      => "First article",
                "abstract"   => "Montius nos tumore inusitato",
                "your_grade" => 2,
                "comments"    =>
                    array(
                        array(
                            "author"  => "calkam",
                            "comment" => "very good"
                        ),
                        array(
                            "author"  => "riouseb",
                            "comment" => "very very good"
                        ),
                    )
            ),
            "2" => array(
                "icon"       => "https://static.alipson.fr/ravensburger.17/ravensburger-puzzle-500-pices-carr--petit-panda.154140-1.550.jpg",
                "author"     => "calkam",
                "date"       => "05/04/2018",
                "grade"      => 4,
                "title"      => "First article",
                "abstract"   => "Montius nos tumore inusitato",
                "your_grade" => 3,
                "comments"    =>
                    array(
                        array(
                            "author"  => "calkam",
                            "comment" => "very good"
                        ),
                        array(
                            "author"  => "riouseb",
                            "comment" => "very very good"
                        ),
                    )
            )
        );
    //}

    if(!isset($_SESSION["bibliography"])){
        $_SESSION["bibliography"] = array(
            "1" => array(
                "title"  => " global assessment tool for evaluation of intra-operative laparoscopic skills",
                "author" => "M.C. Vassiliou, L.S. Feldman, C.G. Andrew, S. Bergman, K. Leffondre, D. Stanbridge, and G. M.Fried.",
                "date"   => "2005",
            ),
            "2" => array(
                "title"  => " global assessment tool for evaluation of intra-operative laparoscopic skills",
                "author" => "M.C. Vassiliou, L.S. Feldman, C.G. Andrew, S. Bergman, K. Leffondre, D. Stanbridge, and G. M.Fried.",
                "date"   => "2005",
            ),
            "3" => array(
                "title"  => " global assessment tool for evaluation of intra-operative laparoscopic skills",
                "author" => "M.C. Vassiliou, L.S. Feldman, C.G. Andrew, S. Bergman, K. Leffondre, D. Stanbridge, and G. M.Fried.",
                "date"   => "2005",
            ),
            "4" => array(
                "title"  => " global assessment tool for evaluation of intra-operative laparoscopic skills",
                "author" => "M.C. Vassiliou, L.S. Feldman, C.G. Andrew, S. Bergman, K. Leffondre, D. Stanbridge, and G. M.Fried.",
                "date"   => "2005",
            )
        );
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SciPortal</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="css/style.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SciPortal</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!-- <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                        </li> -->
                        <li>
                            <a href=".?page=actuality"><i class="fa fa-tv fa-fw"></i> Actuality</a>
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-search fa-fw"></i> Paper search</a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-file  fa-fw"></i> My papers</a>
                        </li>
                        <li>
                            <a href=".?page=bibliography"><i class="fa fa-book fa-fw"></i> Bibliography</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-list  fa-fw"></i> Book Lists</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-calendar fa-fw"></i> Calendar</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-users fa-fw"></i> Friends</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <?php
                if(!isset($_GET["page"])){
                    $_GET["page"] = "actuality";
                }
                include("pages/".$_GET["page"].".php");
            ?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <script src="js/script.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
