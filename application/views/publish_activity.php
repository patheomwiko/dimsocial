<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?=base_url('assets/img/favicon.png');?>" type="image/png">
        <title>DIM Social - Publier votre project</title>
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

        
        <style>
             .blog_right_sidebar .tag_cloud_widget ul li a:hover {
                background-image: -moz-linear-gradient(0deg, #1d3163 0%, #88f3ff 100%);
                background-image: -webkit-linear-gradient(0deg, #1d3163 0%, #88f3ff 100%);
                background-image: -ms-linear-gradient(0deg, #1d3163 0%, #88f3ff 100%);
                color: #fff; 
            }
            .blog_right_sidebar .post_category_widget .cat-list li:hover a {
                color: #1d3163; 
            }
            .blog_right_sidebar .post_category_widget .cat-list li:hover {
                border-color: #1d3163; 
            }

            .blog-pagination .page-link:hover {
                color: #fff;
                text-decoration: none;
                background-color: #1d3163; 
                border-color: #eee; 
            }

            .blog-pagination .page-item.active .page-link {
                background-color: #1d3163; 
                border-color: transparent;
                color: #fff; 
            }

            .white_bg_btn:hover {
                background-image: -moz-linear-gradient(0deg, #1d3163 0%, #88f3ff 100%);
                background-image: -webkit-linear-gradient(0deg, #1d3163 0%, #88f3ff 100%);
                background-image: -ms-linear-gradient(0deg, #1d3163 0%, #88f3ff 100%);
                color: #fff;
                border: none; 
            }
        </style>
        
        <!-- *** jQuery *** -->
        <script src="<?=base_url('assets/js/jQuery-3.4.1.min.js');?>"></script>
        <!-- *** jQuery *** -->
    </head>
    <body>

    
        <header>
            <div>
                <ul class="nav justify-content-end fixed-top" style="background: #1d3163;">
                    <li class="nav-item">
                        <a class="nav-link active  text-light" href="<?=site_url()?>"><i class="fa fa-home"></i><small> <strong>Accueil</strong> </small> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active  text-light" href="<?=site_url('home/activity')?>"><i class="fa fa-book"></i><small> <strong>Votre activité</strong> </small> </a>
                    </li>
                    <?php
                        if(isset($this->session->name) || isset($this->session->email)) {
                            echo
                            '
                            <li class="nav-item">
                                <a class="nav-link  text-light" href="'.site_url('home/publish_article').'"><i class="fa fa-user"></i><small> <strong>Publier un article</strong> </small> </a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link  text-light" href="'.site_url('user/my_account/'.$this->session->id).'"><i class="fa fa-user"></i><small> <strong>'.$this->session->name.'</strong> </small> </a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link  text-light" href="'.site_url('user/logout').'"><i class="fa fa-user"></i><small> <strong>Se déconnecter</strong> </small> </a>
                            </li> 
                           
                            ';
                        } else {
                            echo '
                            <li class="nav-item">
                                <a class="nav-link text-light" href="'.site_url('home/login').'"><i class="fa fa-user"></i><small> <strong>Se connecter</strong> </small> </a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link text-light" href="'.site_url('home/sign_in').'"><i class="fa fa-sign-in"></i><small> <strong>S\'inscrire</strong> </small> </a>
                            </li>
                            ';
                        }
                    ?> 
                </ul>
            </div>
        </header>
 
    <!-- *** Project Form *** -->
    
        <!--================Contact Area =================-->
        <section class="contact_area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-11">
                        
                        <form  method="POST" action="<?=site_url('activity/publish_activity')?>" class="row contact_form" id="contact_form" novalidate="novalidate">
                            
                            <div class="col-md-7">
                                <div class="form-group">
                                    <h4 class="text-muted">Partager votre activité</h4>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="<?=set_value('name');?>" id="name" name="name" placeholder="Nom de l'activité">
                                    <small class="text-danger"><?= form_error('name','<em>','</em>') ?></small>
                                </div>
                                <div class="form-group"> 
                                    <select name="domain" value="<?=set_value('domain');?>" class="form-group form-control"  id="domain">
                                        <option value="none">Votre domaine</option>
                                        <?php
                                            if(isset($categories)) 
                                            {
                                                if($categories -> num_rows() > 0) 
                                                {
                                                    foreach ($categories -> result() as $row) 
                                                    {
                                                        echo '<option value="'.$row->CODE.'">'.$row->title.'</option>';
                                                    }
                                                }
                                            } 
                                        ?> 

                                    </select>
                                    <small class="text-danger"><?= form_error('domain','<em>','</em>') ?></small>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" value="<?=set_value('description');?>" name="description" id="description" rows="3" placeholder="Description de votre activité"></textarea>
                                    <small class="text-danger"><?= form_error('description','<em>','</em>') ?></small>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" value="<?=set_value('experience');?>" id="experience" name="experience" placeholder="Année d'expérience (en mois)">
                                    <small class="text-danger"><?= form_error('experience','<em>','</em>') ?></small>
                                </div>
                                
                                <div class="form-group">
                                    <label for="imageUrl"> <small class="text-center">Sélectionner une image</small> </label>
                                    <input type="file" value="<?=set_value('imageUrl');?>" class="form-control" name="imageUrl" id="imageUrl" >
                                </div>
                                <div class="form-group">
                                    <div id="uploaded_image">
                                        
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-sm btn-block border-0" style="background: #1d3163;">Publier</button>
                                </div>
                            </div> 
                            
                            

                            <!-- *** SIDEBAR *** -->
                            <div class="col-lg-5">
                                <div class="blog_right_sidebar"> 
                                    <aside class="single_sidebar_widget popular_post_widget">
                                        <h3 class="widget_title" style="background: #1d3163;">Posts récents</h3>
                                        <div class="media post_item">
                                            <img src="<?=base_url('assets/img/blog/popular-post/post1.jpg');?>" alt="post">
                                            <div class="media-body">
                                                <a href="blog-details.html"><h3>Space The Final Frontier</h3></a>
                                                <p>02 Hours ago</p>
                                            </div>
                                        </div>
                                        <div class="media post_item">
                                            <img src="<?=base_url('assets/img/blog/popular-post/post2.jpg');?>" alt="post">
                                            <div class="media-body">
                                                <a href="blog-details.html"><h3>The Amazing Hubble</h3></a>
                                                <p>02 Hours ago</p>
                                            </div>
                                        </div>
                                        <div class="media post_item">
                                            <img src="<?=base_url('assets/img/blog/popular-post/post3.jpg');?>" alt="post">
                                            <div class="media-body">
                                                <a href="blog-details.html"><h3>Astronomy Or Astrology</h3></a>
                                                <p>03 Hours ago</p>
                                            </div>
                                        </div>
                                        <div class="media post_item">
                                            <img src="<?=base_url('assets/img/blog/popular-post/post4.jpg');?>" alt="post">
                                            <div class="media-body">
                                                <a href="blog-details.html"><h3>Asteroids telescope</h3></a>
                                                <p>01 Hours ago</p>
                                            </div>
                                        </div> 
                                    </aside> 
                              
                                </div>
                            </div>
                            <!-- *** SIDEBAR *** -->
                            
 

                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->
    <!-- *** Project Form *** -->



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

        <!-- contact js -->
        <script src="<?=base_url('assets/js/jquery.form.js');?>"></script>
        <script src="<?=base_url('assets/js/jquery.validate.min.js');?>"></script>
        <script src="<?=base_url('assets/js/contact.js');?>"></script>
    </body>
</html>
      
<script>

$(document).ready(function(){
    $('#contact_form').on('change', function(e){
        e.preventDefault();
        if($('#imageUrl').val() == '') {
            // alert('Please, select a file.');
        } else {
            $.ajax({
                url:"<?php echo base_url();?>activity/upload_image",
                method:'POST',
                data: new FormData(this),
                contentType:false,
                cache:false,
                processData:false,
                success:function(data){
                    $('#uploaded_image').html(data);
                }
            })
        }

    });
});

</script> 