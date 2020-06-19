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
                            social
                            <!-- <img src="<?=base_url('assets/admin/plugins/images/pixeladmin-text.png');?>" alt="home" /> -->
                        </span>
                    </a>
                </div>
                    <li>
                        <!-- <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a>
                        </form> -->
                    </li>
                </ul>
                <!-- <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" href="#"> <img src="../plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b> </a>
                    </li>
                </ul> -->
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
                        <a href="<?=site_url('admin/valider_projet');?>" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i><span class="hide-menu">Valider projet</span></a>
                    </li>
                    <li>
                        <a href="<?=site_url('admin/promouvoir');?>" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i><span class="hide-menu">Promouvoir un projet</span></a>
                    </li>
                    <li>
                        <a href="<?=site_url('admin/gerer_investisseurs');?>" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i><span class="hide-menu">Gerer les investisseurs</span></a>
                    </li>
                    <li>
                        <a href="<?=site_url('admin/gerer_entrepreneurs');?>" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i><span class="hide-menu">Gerer lesentrepreneurs</span></a>
                    </li>
                    <li>
                        <a href="<?=site_url('admin/gerer_projets');?>" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i><span class="hide-menu">Gerer les projets</span></a>
                    </li>
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
                        <h4 class="page-title">Profile administrateure</h4> </div>
                    <!-- <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a> -->
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Profile administrateur</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                         <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="../plugins/images/large/img1.jpg">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white">User Name</h4>
                                        <h5 class="text-white">info@myadmin.com</h5> </div>
                                </div>
                            </div>
                            <div class="user-btm-box">
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-purple"><i class="ti-facebook"></i></p>
                                    <h1>258</h1> </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-blue"><i class="ti-twitter"></i></p>
                                    <h1>125</h1> </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-danger"><i class="ti-dribbble"></i></p>
                                    <h1>556</h1> </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material">
                                <div class="form-group">
                                    <label class="col-md-12">Full Name</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Password</label>
                                    <div class="col-md-12">
                                        <input type="password" value="password" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Phone No</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="123 456 7890" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Message</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" class="form-control form-control-line"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Select Country</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line">
                                            <option>London</option>
                                            <option>India</option>
                                            <option>Usa</option>
                                            <option>Canada</option>
                                            <option>Thailand</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Update Profile</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
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
    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url('assets/admin/js/custom.min.js');?>"></script>
</body>

</html>