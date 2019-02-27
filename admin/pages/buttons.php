<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Pemilihan Osis SMKN SITURAJA</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Social Buttons CSS -->
    <link href="../vendor/bootstrap-social/bootstrap-social.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand" href="index.php">Pemilihan Osis SMKN SITURAJA</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Hasil <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="hasil.php">Grafik</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Tabel <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="tabel_pemilih.php">Tabel Pemilih </a>
                                </li>
                                <li>
                                    <a href="tabel_pemilih.php"> Tabel Calon </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="input.php"><i class="fa fa-edit fa-fw"></i> Input </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Elemen <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="buttons.php">Tombol</a>
                                </li>
                                <li>
                                    <a href="icons.php"> Icon </a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tombol</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Default Buttons
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <h4>Normal Buttons</h4>
                            <p>
                                <button type="button" class="btn btn-default">Default</button>
                                <button type="button" class="btn btn-primary">Primary</button>
                                <button type="button" class="btn btn-success">Success</button>
                                <button type="button" class="btn btn-info">Info</button>
                                <button type="button" class="btn btn-warning">Warning</button>
                                <button type="button" class="btn btn-danger">Danger</button>
                                <button type="button" class="btn btn-link">Link</button>
                            </p>
                            <br>
                            <h4>Disabled Buttons</h4>
                            <p>
                                <button type="button" class="btn btn-default disabled">Default</button>
                                <button type="button" class="btn btn-primary disabled">Primary</button>
                                <button type="button" class="btn btn-success disabled">Success</button>
                                <button type="button" class="btn btn-info disabled">Info</button>
                                <button type="button" class="btn btn-warning disabled">Warning</button>
                                <button type="button" class="btn btn-danger disabled">Danger</button>
                                <button type="button" class="btn btn-link disabled">Link</button>
                            </p>
                            <br>
                            <h4>Button Sizes</h4>
                            <p>
                                <button type="button" class="btn btn-primary btn-lg">Large button</button>
                                <button type="button" class="btn btn-primary">Default button</button>
                                <button type="button" class="btn btn-primary btn-sm">Small button</button>
                                <button type="button" class="btn btn-primary btn-xs">Mini button</button>
                                <br>
                                <br>
                                <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
                            </p>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Circle Icon Buttons with Font Awesome Icons
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <h4>Normal Circle Buttons</h4>
                            <button type="button" class="btn btn-default btn-circle"><i class="fa fa-check"></i>
                            </button>
                            <button type="button" class="btn btn-primary btn-circle"><i class="fa fa-list"></i>
                            </button>
                            <button type="button" class="btn btn-success btn-circle"><i class="fa fa-link"></i>
                            </button>
                            <button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i>
                            </button>
                            <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-heart"></i>
                            </button>
                            <br>
                            <br>
                            <h4>Large Circle Buttons</h4>
                            <button type="button" class="btn btn-default btn-circle btn-lg"><i class="fa fa-check"></i>
                            </button>
                            <button type="button" class="btn btn-primary btn-circle btn-lg"><i class="fa fa-list"></i>
                            </button>
                            <button type="button" class="btn btn-success btn-circle btn-lg"><i class="fa fa-link"></i>
                            </button>
                            <button type="button" class="btn btn-info btn-circle btn-lg"><i class="fa fa-check"></i>
                            </button>
                            <button type="button" class="btn btn-warning btn-circle btn-lg"><i class="fa fa-times"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-circle btn-lg"><i class="fa fa-heart"></i>
                            </button>
                            <br>
                            <br>
                            <h4>Extra Large Circle Buttons</h4>
                            <button type="button" class="btn btn-default btn-circle btn-xl"><i class="fa fa-check"></i>
                            </button>
                            <button type="button" class="btn btn-primary btn-circle btn-xl"><i class="fa fa-list"></i>
                            </button>
                            <button type="button" class="btn btn-success btn-circle btn-xl"><i class="fa fa-link"></i>
                            </button>
                            <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa fa-check"></i>
                            </button>
                            <button type="button" class="btn btn-warning btn-circle btn-xl"><i class="fa fa-times"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-circle btn-xl"><i class="fa fa-heart"></i>
                            </button>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Outline Buttons with Smooth Transition
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <h4>Outline Buttons</h4>
                            <p>
                                <button type="button" class="btn btn-outline btn-default">Default</button>
                                <button type="button" class="btn btn-outline btn-primary">Primary</button>
                                <button type="button" class="btn btn-outline btn-success">Success</button>
                                <button type="button" class="btn btn-outline btn-info">Info</button>
                                <button type="button" class="btn btn-outline btn-warning">Warning</button>
                                <button type="button" class="btn btn-outline btn-danger">Danger</button>
                                <button type="button" class="btn btn-outline btn-link">Link</button>
                            </p>
                            <br>
                            <h4>Outline Button Sizes</h4>
                            <p>
                                <button type="button" class="btn btn-outline btn-primary btn-lg">Large button</button>
                                <button type="button" class="btn btn-outline btn-primary">Default button</button>
                                <button type="button" class="btn btn-outline btn-primary btn-sm">Small button</button>
                                <button type="button" class="btn btn-outline btn-primary btn-xs">Mini button</button>
                                <br>
                                <br>
                                <button type="button" class="btn btn-outline btn-primary btn-lg btn-block">Block level button</button>
                            </p>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Social Buttons with Font Awesome Icons
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <h4>Social Buttons</h4>
                            <a class="btn btn-block btn-social btn-bitbucket">
                                <i class="fa fa-bitbucket"></i> Sign in with Bitbucket
                            </a>
                            <a class="btn btn-block btn-social btn-dropbox">
                                <i class="fa fa-dropbox"></i> Sign in with Dropbox
                            </a>
                            <a class="btn btn-block btn-social btn-facebook">
                                <i class="fa fa-facebook"></i> Sign in with Facebook
                            </a>
                            <a class="btn btn-block btn-social btn-flickr">
                                <i class="fa fa-flickr"></i> Sign in with Flickr
                            </a>
                            <a class="btn btn-block btn-social btn-github">
                                <i class="fa fa-github"></i> Sign in with GitHub
                            </a>
                            <a class="btn btn-block btn-social btn-google-plus">
                                <i class="fa fa-google-plus"></i> Sign in with Google
                            </a>
                            <a class="btn btn-block btn-social btn-instagram">
                                <i class="fa fa-instagram"></i> Sign in with Instagram
                            </a>
                            <a class="btn btn-block btn-social btn-linkedin">
                                <i class="fa fa-linkedin"></i> Sign in with LinkedIn
                            </a>
                            <a class="btn btn-block btn-social btn-pinterest">
                                <i class="fa fa-pinterest"></i> Sign in with Pinterest
                            </a>
                            <a class="btn btn-block btn-social btn-tumblr">
                                <i class="fa fa-tumblr"></i> Sign in with Tumblr
                            </a>
                            <a class="btn btn-block btn-social btn-twitter">
                                <i class="fa fa-twitter"></i> Sign in with Twitter
                            </a>
                            <a class="btn btn-block btn-social btn-vk">
                                <i class="fa fa-vk"></i> Sign in with VK
                            </a>

                            <hr>

                            <div class="text-center">
                                <a class="btn btn-social-icon btn-bitbucket"><i class="fa fa-bitbucket"></i></a>
                                <a class="btn btn-social-icon btn-dropbox"><i class="fa fa-dropbox"></i></a>
                                <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                                <a class="btn btn-social-icon btn-flickr"><i class="fa fa-flickr"></i></a>
                                <a class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>
                                <a class="btn btn-social-icon btn-google-plus"><i class="fa fa-google-plus"></i></a>
                                <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                                <a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                <a class="btn btn-social-icon btn-pinterest"><i class="fa fa-pinterest"></i></a>
                                <a class="btn btn-social-icon btn-tumblr"><i class="fa fa-tumblr"></i></a>
                                <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                <a class="btn btn-social-icon btn-vk"><i class="fa fa-vk"></i></a>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
