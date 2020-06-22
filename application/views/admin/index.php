<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?=base_url('assets/admin/images/logo-dim.png');?>" type="image/x-icon">
    <title>DIM CrowdFunding - A propos de nous</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('assets/admin/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?= base_url('assets/admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css');?>" rel="stylesheet">
    <!-- toast CSS -->
    <link href="<?= base_url('assets/admin/plugins/bower_components/toast-master/css/jquery.toast.css');?>" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?= base_url('assets/admin/plugins/bower_components/morrisjs/morris.css');?>" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?= base_url('assets/admin/css/animate.css');?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url('assets/admin/css/style.css');?>" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?= base_url('assets/admin/css/colors/blue-dark.css');?>" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <!-- <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div> -->
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></a>
            <div class="top-left-part">
                    <a class="logo" href="index.html">
                        <b> 
                            DIM
                            <!-- <img src="<?=base_url('assets/admin/plugins/images/pixeladmin-logo.png');?>" alt="home" /> -->
                        </b>
                        <span class="hidden-xs">
                            Social
                            <!-- <img src="<?=base_url('assets/admin/plugins/images/pixeladmin-text.png');?>" alt="home" /> -->
                        </span>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-left m-l-20 hidden-xs">
                    <li>
                        <!-- <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a>
                        </form> -->
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <!-- <li>
                        <a class="profile-pic" href="#"> <img src="../plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"></b> </a>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li style="padding: 10px 0 0;">
                        <a href="<?=site_url('admin');?>" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Tableau de bord</span></a>
                    </li>
                    <li>
                        <a href="<?=site_url('admin/valider_pub');?>" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i><span class="hide-menu">Valider  la publicité</span></a>
                    </li>
                    <li>
                        <a href="<?=site_url('admin/promouvoir');?>" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i><span class="hide-menu">Promouvoir vos activités</span></a>
                    </li>
                    <!-- <li>
                        <a href="<?=site_url('admin/gerer_investisseurs');?>" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i><span class="hide-menu">Gerer les investisseurs</span></a>
                    </li> -->
                    <li>
                        <a href="<?=site_url('admin/gerer_entrepreneurs');?>" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i><span class="hide-menu">Gerer lesentrepreneurs</span></a>
                    </li>
                    <!-- <li>
                        <a href="<?=site_url('admin/gerer_projets');?>" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i><span class="hide-menu">Gerer les projets</span></a>
                    </li> -->
                    <li>
                        <a href="<?=site_url('admin/profile');?>" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Profile</span></a>
                    </li>
                    <li>
                        <a href="<?=site_url('admin/utilisateur');?>" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i><span class="hide-menu">Utilisateur</span></a>
                    </li>
                    <!-- <li>
                        <a href="" class="waves-effect"><i class="fa fa-font fa-fw" aria-hidden="true"></i><span class="hide-menu">Icons</span></a>
                    </li> -->
                    <!-- <li>
                        <a href="" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i><span class="hide-menu">Google Map</span></a>
                    </li> -->
                    <li>
                        <a href="<?=site_url('admin/manuel');?>" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i><span class="hide-menu">Manuel d'utilisation</span></a>
                    </li>
                    <!-- <li>
                        <a href="" class="waves-effect"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i><span class="hide-menu">Error 404</span></a>
                    </li> -->
                    <li>
                        <a href="<?=site_url('admin/deconnexion');?>" class="waves-effect"><i class="fa fa-power-off fa-fw" aria-hidden="true"></i><span class="hide-menu">Déconnexion</span></a>
                    </li>
                </ul>
                <!-- <div class="center p-20">
                    <span class="hide-menu"><a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger btn-block btn-rounded waves-effect waves-light">Upgrade to Pro</a></span>
                </div> -->
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Tableau de bord</h4> </div>
                    <!-- <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a> -->
                        <ol class="breadcrumb">
                            <li><a href="#">Tableau de bord</a></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <div class="row">
                    <!--col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="linea-icon linea-basic"></i>
                                    <h5 class="text-muted vb">NOUVEAUX CLIENTS</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-danger">23</h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!--col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
                                    <h5 class="text-muted vb">LES COMMENTAIRES</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-megna">169</h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-megna" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!--col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe00b;"></i>
                                    <h5 class="text-muted vb">NOMBRES DE VISITES</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-primary">157</h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <!--row -->

      
                <!-- /.row -->
                <!-- row -->
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <small class="text-danger"><?php if(isset($msg)) echo $msg; ?></small>
                            <h3 class="box-title">NOUVEAUX CLIENTS</h3>
                            <!-- <p class="text-muted">Add class <code>.table</code></p> -->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th width="150">Image</th> 
                                            <th width="100">Nom complet</th>
                                            <th width="150">Titre du projet</th>
                                            <th width="150">Description du projet</th> 
                                            <th>Date</th> 
                                            
                                            <th>Etat</th> 
                                            <th>Option</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                        function state($state, $id) {
                                            if($state == 1){
                                                return '<a class="btn btn-sm btn-primary" href="'.site_url('admin/desable_comment/'. $id).'" role="button">Retirer</a>';
                                            } 
                                            else { 
                                                return '<a class="btn btn-sm btn-primary" href="'.site_url('admin/enable_comment/'. $id).'" role="button">Publier</a>'; 
                                            }
                                        }

                                        function poster_state($state) {
                                            if($state == 1) return 'En cours';
                                            else return 'Publier';
                                        }
               
                                        $i = 1;
                                        if(isset($entrepreneurs)) {
                                            if($entrepreneurs -> num_rows() > 0) {
                                                foreach ($entrepreneurs -> result() as $row) {
                                                    echo '
                                                        <tr>
                                                        <td>'.$i++.'</td>
                                                        <td>'.$row -> name.'</td>
                                                        <td>'.$row -> titre.'</td>
                                                        <td>'.$row -> description.'</td>
                                                        <td>'.$row -> date.'</td>
                                                        <td>'.$row -> image.'</td>
                                                        <td>'.$row -> state.'</td>
                                                        <td colspan="3">
                                                            <a class="btn btn-sm btn-primary" href="'.site_url('admin/update_entrepreneur/'. $row -> id).'" role="button">Modifier </a>
                                                            <a class="btn btn-sm btn-primary" href="'.site_url('admin/enable_entrepreneur/'. $row -> id).'" role="button">'.poster_state($row -> state).'</a>
                                                            <a class="btn btn-sm btn-danger" href="'.site_url('admin/delete_entrepreneur/'. $row -> id).'" role="button">Supprimer</a> 
                                                        </td> 
                                                        
                                                    </tr> ';
                                                } 
                                            } else {
                                                echo ''; 
                                            }
                                        } else {

                                        } 
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2020 &copy; Andrea Medias Tech </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?= base_url('assets/admin/plugins/bower_components/jquery/dist/jquery.min.js');?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url('assets/admin/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?= base_url('assets/admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js');?>"></script>
    <!--slimscroll JavaScript -->
    <script src="<?= base_url('assets/admin/js/jquery.slimscroll.js');?>"></script>
    <!--Wave Effects -->
    <script src="<?= base_url('assets/admin/js/waves.js');?>"></script>
    <!--Counter js -->
    <script src="<?= base_url('assets/admin/plugins/bower_components/waypoints/lib/jquery.waypoints.js');?>"></script>
    <script src="<?= base_url('assets/admin/plugins/bower_components/counterup/jquery.counterup.min.js');?>"></script>
    <!--Morris JavaScript -->
    <script src="<?= base_url('assets/admin/plugins/bower_components/raphael/raphael-min.js');?>"></script>
    <script src="<?= base_url('assets/admin/plugins/bower_components/morrisjs/morris.js');?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url('assets/admin/js/custom.min.js');?>"></script>
    <script src="<?= base_url('assets/admin/js/dashboard1.js');?>"></script>
    <script src="<?= base_url('assets/admin/plugins/bower_components/toast-master/js/jquery.toast.js');?>"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $.toast({
            heading: 'Welcome to Pixel admin',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3500,
            stack: 6
        })
    });
    </script>
</body>

</html>
