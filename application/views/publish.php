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
                    <?php 
                       
                        // if(isset($_SESSION['name']) || isset($_SESSION['email'])){
                        //     echo '
                            // <li class="nav-item">
                            //     <a class="nav-link text-light" href="'.site_url('home/sign_in').'"><i class="fa fa-sign-in"></i><small> <strong>S\'inscrire</strong> </small> </a>
                            // </li> 
                            // ';
                        // }
                    ?>
                    <!-- <li class="nav-item">
                        <a class="nav-link  text-light" href="<?=site_url('home/politic')?>"><i class="fa fa-book"></i><small> <strong>Politiques de confidentialités</strong> </small></a>
                    </li> -->
                   
                </ul>
            </div>
        </header>
 
    <!-- *** Project Form *** -->
    
        <!--================Contact Area =================-->
        <section class="contact_area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        
                        <form class="row contact_form" action="<?=site_url('activity/publish')?>" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <h4 class="text-muted">Partager votre activité</h4>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="<?=set_value('name');?>" id="name" name="name" placeholder="Nom de l'activité">
                                    <small class="text-danger"><?= form_error('name','<em>','</em>') ?></small>
                                </div>
                                <div class="form-group"> 
                                    <select name="category" value="<?=set_value('category');?>" class="form-group form-control"  id="category">
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
                                    <small class="text-danger"><?= form_error('category','<em>','</em>') ?></small>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" value="<?=set_value('description');?>" name="description" id="description" rows="3" placeholder="Description de votre activité"></textarea>
                                    <small class="text-danger"><?= form_error('description','<em>','</em>') ?></small>
                                </div>
                                
                                <div class="form-group">
                                    <label for="imageUrl"> <small class="text-center">Sélectionner une image</small> </label>
                                    <input type="file" value="<?=set_value('imageUrl');?>" class="form-control" id="imageUrl" name="imageUrl">
                                </div>

                                <div class="form-group">
                                    <button type="submit" value="submit" class="btn btn-primary btn-sm btn-block">Publier</button>
                                </div>
                            </div> 
                            
                            

                            <!-- *** SIDEBAR *** -->
                            <div class="col-lg-5">
                                <div class="blog_right_sidebar"> 
                                    <aside class="single_sidebar_widget popular_post_widget">
                                        <h3 class="widget_title">Posts récents</h3>
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
	$('#files').change(function(){
		
		var files = $('#files')[0].files;
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
				url:"<?php echo base_url(); ?>admin/upload_image",
				method:'POST',
				data:form_data,
				contentType:false,
				cache:false, 
				processData:false,
				beforeSend:function() {
					$('#uploaded_images').html("<label class='text-success'>Uploading...</label>");
				},
				success:function(data) { 
					$('#uploaded_images').html(data);
					// $('#files').val('');
				}
			});
		} else {
			alert(error);
		}
	});


    // ====================================================
    // ====================================================


    $('#files_comment').change(function(){
		
		var files = $('#files_comment')[0].files;
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
				url:"<?php echo base_url(); ?>admin/upload_image",
				method:'POST',
				data:form_data,
				contentType:false,
				cache:false, 
				processData:false,
				beforeSend:function() {
					$('#uploaded_images_comment').html("<label class='text-success'>Uploading...</label>");
				},
				success:function(data) { 
					$('#uploaded_images_comment').html(data);
					// $('#files').val('');
				}
			});
		} else {
			alert(error);
		}
	});
});

</script> 