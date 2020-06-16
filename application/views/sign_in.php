<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?=base_url('assets/img/main/logodim.png');?>" type="image/png">
        <title>DIM Social - Inscrivez-vous et partagé votre activité</title>
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
                <ul class="nav justify-content-end fixed-top" style="background-color: #1d3163;">
                    <li class="nav-item">
                        <a class="nav-link active  text-light" href="<?=site_url()?>"><i class="fa fa-home"></i><small> <strong>Accueil</strong> </small> </a>
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
                            <li class="nav-item">
                                <a class="nav-link active  text-light" href="'.site_url('home/activity').'"><i class="fa fa-book"></i><small> <strong>Votre activité</strong> </small> </a>
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

        <!--================Contact Area =================-->
        <section class="contact_area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        
                        <form class="row contact_form" action="<?=site_url('user/sign_in');?>" method="post"  id="contact_form" novalidate="novalidate">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <h4 class="text-muted">S'inscrivez-vous et partagez votre activité</h4>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" value="<?=set_value('name');?>" placeholder="Nom" required>
                                    <small class="text-danger"><?= form_error('name','<em>','</em>') ?></small>
                                </div> 
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" value="<?=set_value('email');?>" placeholder="Email" required>
                                    <small class="text-danger"><?= form_error('email','<em>','</em>') ?></small>
                                </div> 
                                <div class="form-group">
                                    <input type="text" class="form-control" id="address" name="address" value="<?=set_value('addrses');?>" placeholder="Addresse physique">
                                    <small class="text-danger"><?= form_error('address','<em>','</em>') ?></small>
                                </div> 
                                <div class="form-group">
                                    <input type="tel" class="form-control" id="phone" name="phone" value="<?=set_value('phone');?>" placeholder="Téléphone" required>
                                    <small class="text-danger"><?= form_error('phone','<em>','</em>') ?></small>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="site" name="site" value="<?=set_value('site');?>" placeholder="Site web (facultatif)">
                                    <small class="text-danger"><?= form_error('site','<em>','</em>') ?></small>
                                </div> 

                                <div class="form-group"> 
                                    <select name="gender"  id="gender"  class="form-group form-control" required>
                                        <option value="m" selected>Homme</option> 
                                        <option value="f" >Femme</option> 
                                    </select>
                                    <small class="text-danger"><?= form_error('gender','<em>','</em>') ?></small>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="bio" id="bio" value="<?=set_value('bio');?>" rows="1" placeholder="Une biographie sur vous..."></textarea>
                                    <small class="text-danger"><?= form_error('bio','<em>','</em>') ?></small>
                                </div>
                                
                                <div class="form-group">
                                    <label for="imageUrl"> <small class="text-center">Votre photo</small> </label>
                                    <input type="file" class="form-control" value="<?=set_value('imageUrl');?>" id="imageUrl" name="imageUrl"><br>
                                    <div class="form-group">
                                        <div id="uploaded_image">

                                        </div>
                                    </div> 
                                </div>

                                
                                <div class="form-group">
                                    <input type="password" class="form-control" value="<?=set_value('password');?>" id="password" name="password" placeholder="Mot de passe *" required>
                                    <small class="text-muted text-left"> <i>Assurez-vous qu'il s'agit d'au moins 15 caractères OU d'au moins 8 caractères.</i> </small>
                                    <small class="text-danger"><?= form_error('password','<em>','</em>') ?></small>
                                </div> 
                                
                                <div class="form-group">
                                    <input type="password" class="form-control" value="<?=set_value('confirm');?>" id="confirm" name="confirm" placeholder="Confimer votre mot de passe *" required>
                                    <small class="text-danger"><?= form_error('confirm','<em>','</em>') ?></small>
                                </div> 

                                <div class="form-group">
                                    <button type="submit" value="submit" class="btn btn-sm btn-block text-light border-0" style="background-color: #1d3163;">S'inscrire</button>
                                </div>
                            </div> 
                            
                            

                            <!-- *** SIDEBAR *** -->
                            <div class="col-lg-5">
                                <div class="blog_right_sidebar"> 
                                
                                <aside class="single-sidebar-widget tag_cloud_widget">
                                    <h4 class="widget_title" style="background-color: #1d3163;">Les plus actives</h4>
                                    <ul class="list">
                                        <?php
                                            if(isset($domains)) 
                                            {
                                                if($domains -> num_rows() > 0) 
                                                {
                                                    foreach ($domains -> result() as $row) 
                                                    {
                                                        echo '<li><a href="'.site_url('activity/get_activity/'.$row->id).'">'.$row->title.'</a></li>';
                                                    }
                                                }
                                            } 
                                        ?> 
                                    </ul>
                                </aside>
                                <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title" style="background-color: #1d3163;">Top Catgories</h4>
                                <ul class="list cat-list">
                                    <?php
                                        if(isset($domains))
                                        {
                                            if($domains -> num_rows() > 0) 
                                            {
                                                foreach ($domains -> result() as $row) 
                                                {
                                                    echo '
                                                    <li>
                                                        <a href="'.site_url('activity/get_activity/'.$row->id).'" class="d-flex justify-content-between">
                                                            <p>'.$row->title.'</p>
                                                            <p>0</p>
                                                        </a>
                                                    </li>
                                                    ';
                                                }
                                            }
                                        } 
                                    ?> 										
                                </ul>
                                <div class="br"></div>
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
    $('.contact_form').on('change', function(e){
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
