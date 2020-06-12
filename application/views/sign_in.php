<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?=base_url('assets/img/favicon.png');?>" type="image/png">
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
 
        <!-- *** jQuery *** -->
        <script src="<?=base_url('assets/js/jQuery-3.4.1.min.js');?>"></script>
        <!-- *** jQuery *** -->
    </head>
    <body>

   

        <header>
            <div>
                <ul class="nav justify-content-end fixed-top bg-primary">
                    <li class="nav-item">
                        <a class="nav-link active  text-light" href="<?=site_url()?>"><i class="fa fa-home"></i><small> <strong>Accueil</strong> </small> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active  text-light" href="<?=site_url('home/activity')?>"><i class="fa fa-book"></i><small> <strong>Votre activité</strong> </small> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-light" href="<?=site_url('home/login')?>"><i class="fa fa-user"></i><small> <strong>Se connecter</strong> </small> </a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?=site_url('home/sign_in')?>"><i class="fa fa-sign-in"></i><small> <strong>S'inscrire</strong> </small> </a>
                    </li> 
                    <!-- <li class="nav-item">
                        <a class="nav-link  text-light" href="<?=site_url('home/politic')?>"><i class="fa fa-book"></i><small> <strong>Politiques de confidentialités</strong> </small></a>
                    </li> -->
                   
                </ul>
            </div>
        </header> 

        <!--================Contact Area =================-->
        <section class="contact_area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        
                        <form class="row contact_form" action="<?=site_url('user/sign_in');?>" method="post" id="contactForm" novalidate="novalidate">
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
                                    <input type="file" class="form-control" value="<?=set_value('imageUrl');?>" id="imageUrl" name="imageUrl">
                                    <div class="col-md-12" id="uploaded_image">
                                        
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
                                    <button type="submit" value="submit" class="btn btn-primary btn-sm btn-block">Publier</button>
                                </div>
                            </div> 
                            
                            

                            <!-- *** SIDEBAR *** -->
                            <div class="col-lg-5">
                                <div class="blog_right_sidebar"> 
                                
                                <aside class="single-sidebar-widget tag_cloud_widget">
                                    <h4 class="widget_title">Les plus actives</h4>
                                    <ul class="list">
                                        <?php
                                            if(isset($categories)) 
                                            {
                                                if($categories -> num_rows() > 0) 
                                                {
                                                    foreach ($categories -> result() as $row) 
                                                    {
                                                        echo '<li><a href="'.site_url('activity/get_activity/'.$row->id).'">'.$row->title.'</a></li>';
                                                    }
                                                }
                                            } 
                                        ?> 
                                    </ul>
                                </aside>
                                <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title">Top Catgories</h4>
                                <ul class="list cat-list">
                                    <?php
                                        if(isset($categories)) 
                                        {
                                            if($categories -> num_rows() > 0) 
                                            {
                                                foreach ($categories -> result() as $row) 
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



    
        <!--================Footer Area =================-->
        <footer class="footer_area p_120">
        	<div class="container">
        		<div class="row footer_inner">
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget ab_widget">
        					<div class="f_title">
        						<h3>About Me</h3>
        					</div>
        					<p>Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills,</p>
        					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        				</aside>
        			</div>
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3>Newsletter</h3>
        					</div>
        					<p>Stay updated with our latest trends</p>
        					<div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                	<div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>		
                                    </div>				
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
        				</aside>
        			</div>
        			<div class="col-lg-2">
        				<aside class="f_widget social_widget">
        					<div class="f_title">
        						<h3>Follow Me</h3>
        					</div>
        					<p>Let us be social</p>
        					<ul class="list">
        						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
        						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        						<li><a href="#"><i class="fa fa-behance"></i></a></li>
        					</ul>
        				</aside>
        			</div>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->
        
        

        
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
	$('#imageUrl').change(function(){
		
		var files = $('#imageUrl')[0].files;
		var error = '';
		var form_data = new FormData();
		
		for (var index = 0; index < files.length; index++) {
			var name = files[index].name;
			var extension = name.split('.').pop().toLowerCase();
			
			if(jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
				error += 'Invalid ' + index + ' image file.';
			} else {
				form_data.append("files[]", files[index]);
			}
		}

		if(error == '') {
			$.ajax({
				url:"<?php echo base_url(); ?>user/upload_image",
				method:'POST',
				data:form_data,
				contentType:false,
				cache:false, 
				processData:false,
				beforeSend:function() {
					$('#uploaded_image').html("<label class='text-success'>Uploading...</label>");
				},
				success:function(data) { 
					$('#uploaded_image').html(data);
					// $('#files').val('');
				}
			});
		} else {
			alert(error);
		}
	});
});

</script> 