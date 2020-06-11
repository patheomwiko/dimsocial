<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?=base_url('assets/img/favicon.png');?>" type="image/png">
        <title>DIM Social - Se connecter</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/vendors/linericon/style.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/font-awesome.min.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/vendors/owl-carousel/owl.carousel.min.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/vendors/lightbox/simpleLightbox.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/vendors/nice-select/css/nice-select.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/vendors/animate-css/animate.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/vendors/popup/magnific-popup.css');?>">
        <!-- main css -->
        <link rel="stylesheet" href="<?=base_url('assets/css/style.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/responsive.css');?>">
    </head>
    <body>


    <header>
            <div>
                <ul class="nav justify-content-end fixed-top bg-primary">
                    <li class="nav-item">
                        <a class="nav-link active  text-light" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-light" href="#">Se connecter</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link  text-light" href="#">Politiques de confidentialités</a>
                    </li>
                   
                </ul>
            </div>
        </header>
 
        
      
        <!--================Blog Area =================-->
        <section class="blog_area single-post-area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post row">
                            <div class="col-lg-12">
                                <div class="feature-img">
                                    <img class="img-fluid" src="<?=base_url('assets/img/main/news_post_5.jpg');?>" alt="">
                                </div>									
                            </div>
                            <div class="col-lg-3  col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Alimentation,</a>
                                        <a class="active" href="#">Technologie,</a>
                                        <a href="#">ENR,</a>
                                        <a href="#">Immobilier</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Daniel Wa Mukina<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">10 Juin, 2020<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">10k Vues<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">06 Commentaires<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 blog_details">
                                <h2>DIM Social - Technologie</h2> 
                                <p class="excert text-justify">
                                Créer un réseau des entrepreneurs pour permettre à tous nos utilisateurs de partager leurs
                                actualités, de faire la géolocalisation de leurs services. 
                                <br> Ce réseau social permettra aux entreprises, entrepreneurs d’accroitre
                                sensiblement leurs zones d’action, profiter de nos outils pour mieux évaluer les revenues,
                                consulter les experts, permettre les échanges avec les professionnels et tenir de forums
                                économiques et autres publicités pour la plateforme.
                                </p>
                            </div>
                           
                        </div>
                        
                            
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <div class="input-group">
                                    <h4>Se connecter</h4>
                                    <small class="text-muted">Entrer en contact avec plusieurs entrepreneurs, partagez vos services</small>
                                </div><!-- /input-group -->
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget author_widget">



                            <!-- *** Login Form **** -->
                            <form method="POST" action="<?=site_url('home');?>" class="contact_form" novalidate="novalidate">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="email" class="form-control rounded-0" id="inputEmail3" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="password" class="form-control rounded-0" id="inputPassword3" placeholder="Mot de passe" required>
                                    </div>
                                </div>
                                <fieldset class="form-group">
                                    <div class="row"> 
                                        <div class="col-sm-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="stay_connect" id="stay_connect1" value="option1" checked>
                                                <label class="form-check-label text-left" for="stay_connect1">
                                                   <small class="text-muted">Me garder connecter</small> 
                                                </label>
                                            </div> 
                                        </div>
                                    </div>
                                </fieldset>
                                
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-sm btn-block">Se connecter</button>
                                        <small class="text-muted"></small>
                                    </div>
                                </div>
                            </form>
                            <!-- *** Login Form **** -->



                            <div class="br"></div>
                            </aside>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
        
    </body>
</html>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?=base_url('assets/js/jquery-3.3.1.min.js');?>"></script>
        <script src="<?=base_url('assets/js/popper.js');?>"></script>
        <script src="<?=base_url('assets/js/bootstrap.min.js');?>"></script>
        <script src="<?=base_url('assets/js/stellar.js');?>"></script>
        <script src="<?=base_url('assets/vendors/lightbox/simpleLightbox.min.js');?>"></script>
        <script src="<?=base_url('assets/vendors/nice-select/js/jquery.nice-select.min.js');?>"></script>
        <script src="<?=base_url('assets/vendors/isotope/imagesloaded.pkgd.min.js');?>"></script>
        <script src="<?=base_url('assets/vendors/isotope/isotope.pkgd.min.js');?>"></script>
        <script src="<?=base_url('assets/vendors/owl-carousel/owl.carousel.min.js');?>"></script>
        <script src="<?=base_url('assets/vendors/popup/jquery.magnific-popup.min.js');?>"></script>
        <script src="<?=base_url('assets/js/jquery.ajaxchimp.min.js');?>"></script>
        <script src="<?=base_url('assets/vendors/counter-up/jquery.waypoints.min.js');?>"></script>
        <script src="<?=base_url('assets/vendors/counter-up/jquery.counterup.min.js');?>"></script>
        <script src="<?=base_url('assets/js/mail-script.js');?>"></script>
        <script src="<?=base_url('assets/js/theme.js');?>"></script>
    </body>
</html>