<!DOCTYPE html>
<html lang="en">

<head>
<?php

require 'fungsi.php';

?>



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

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                                    <a href="tabel_calon.php"> Tabel Calon </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="input.php"><i class="fa fa-edit fa-fw"></i> Input </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>Elemen<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="buttons.php">Tombol</a>
                                </li>
                                <li>
                                    <a href="icons.php"> Icon</a>
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

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>

                </div>
                <!-- /.col-lg-12 -->
                        <div class="panel-heading">
                            DATA HASIL PEMILU
                        </div>
                        <!-- contoh untuk menampilkan hassil dari sum -->
                          <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                    <th>CALON 1</th>
                                    <th>CALON 2</th>
                                    <th>CALON 3</th>
                                    </tr>

<?php
$calon1=query("SELECT SUM(calon1) FROM voting");
$calon2=query("SELECT SUM(calon2) FROM voting");
$calon3=query("SELECT SUM(calon3) FROM voting");
foreach ($calon1 as $a) :
foreach ($calon2 as $b) :
foreach ($calon3 as $c) :
?>

                                    <tr>
                                        <td><?php echo $a["SUM(calon1)"];?></td>
                                        <td><?php echo $b["SUM(calon2)"];?></td>
                                        <td><?php echo $c["SUM(calon3)"];?></td>
                                       
                                    </tr>
                                    
<?php endforeach ; ?>
<?php endforeach ; ?>
<?php endforeach ; ?>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>

            </div>


                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                    <th>CALON 1</th>
                                    <th>CALON 2</th>
                                    <th>CALON 3</th>
                                    </tr>

<?php
$data=query("SELECT * FROM voting");
foreach ($data as $a) :
?>

                                    <tr>
                                        <td><?php echo $a["calon1"];?></td>
                                        <td><?php echo $a["calon2"];?></td>
                                        <td><?php echo $a["calon3"];?></td>
                                       
                                    </tr>
                                    
<?php endforeach ; ?>
                               
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>

            </div>
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

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
