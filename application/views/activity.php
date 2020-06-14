<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?=base_url('assets/img/favicon.png');?>" type="image/png">
        <title>DIM Social - </title>
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
                    <li class="nav-item">
                        <a class="nav-link active  text-light" href="<?=site_url('home/activity')?>"><i class="fa fa-book"></i><small> <strong>Votre activité</strong> </small> </a>
                    </li>
                    <?php
                        if(isset($this->session->name) || isset($this->session->email)) {
                            echo
                            '
                            <li class="nav-item">
                                <a class="nav-link  text-light" href="'.site_url('home/publish').'"><i class="fa fa-user"></i><small> <strong>Publier un article</strong> </small> </a>
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
 
        <!--================Blog Area =================-->
        <section class="blog_area single-post-area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post row">


                            
                            <!-- *** USER ACTIVITY *** -->
                            <?php 
                                if(isset($activity)) 
                                {
                                    echo
                                    '
                                    <div class="col-lg-12">
                                        <div class="feature-img">
                                            <img class="img-fluid" src="'.base_url().'upload/'.$activity[0]->imageUrl.'"  />
                                        </div>									
                                    </div>

                                    <div class="col-lg-3  col-md-3">
                                        <div class="blog_info text-right">
                                            <div class="post_tag">
                                                <a href="'.site_url('activity/get_domain/').$activity[0]->domain.'">'.$activity[0]->domain.'</a>  
                                            </div>
                                            <ul class="blog_meta list">
                                                <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                                <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                                <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                                <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
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
                                    
                                        <h2>'.$activity[0]->name.'</h2>
                                        <p class="excert">
                                            '.$activity[0]->description.'
                                        </p>
                                    </div>
                                    ';
                                } else 
                                {
                                    echo 'FALSE';
                                }
                            ?>
                            <!-- *** USER ACTIVITY *** -->    
                           

                            
                            <div class="col-lg-12">
                                <div class="quotes">
                                    MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training.										
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <img class="img-fluid" src="<?=base_url('assets/img/blog/post-img1.jpg');?>" alt="">
                                    </div>
                                    <div class="col-6">
                                        <img class="img-fluid" src="<?=base_url('assets/img/blog/post-img2.jpg');?>" alt="">
                                    </div>	
                                    <div class="col-lg-12 mt-25">
                                        <p>
                                            MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower.
                                        </p>
                                        <p>
                                            MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower.
                                        </p>											
                                    </div>									
                                </div>
                            </div>



                        </div>
                        <div class="navigation-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                    <div class="thumb">
                                        <a href="#"><img class="img-fluid" src="<?=base_url('assets/img/blog/prev.jpg');?>" alt=""></a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
                                    </div>
                                    <div class="detials">
                                        <p>Prev Post</p>
                                        <a href="#"><h4>Space The Final Frontier</h4></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                    <div class="detials">
                                        <p>Next Post</p>
                                        <a href="#"><h4>Telescopes 101</h4></a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
                                    </div>
                                    <div class="thumb">
                                        <a href="#"><img class="img-fluid" src="<?=base_url('assets/img/blog/next.jpg');?>" alt=""></a>
                                    </div>										
                                </div>									
                            </div>
                        </div>
                        <div class="comments-area">
                            <h4>05 Comments</h4>
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="<?=base_url('assets/img/blog/c1.jpg');?>" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Emilly Blunt</a></h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                            <p class="comment">
                                                Never say goodbye till the end comes!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                           <a href="" class="btn-reply text-uppercase">reply</a> 
                                    </div>
                                </div>
                            </div>	
                            <div class="comment-list left-padding">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="<?=base_url('assets/img/blog/c2.jpg');?>" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Elsie Cunningham</a></h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                            <p class="comment">
                                                Never say goodbye till the end comes!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                           <a href="" class="btn-reply text-uppercase">reply</a> 
                                    </div>
                                </div>
                            </div>	
                            <div class="comment-list left-padding">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="<?=base_url('assets/img/blog/c3.jpg');?>" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Annie Stephens</a></h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                            <p class="comment">
                                                Never say goodbye till the end comes!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                           <a href="" class="btn-reply text-uppercase">reply</a> 
                                    </div>
                                </div>
                            </div>	
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="<?=base_url('assets/img/blog/c4.jpg');?>" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Maria Luna</a></h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                            <p class="comment">
                                                Never say goodbye till the end comes!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                           <a href="" class="btn-reply text-uppercase">reply</a> 
                                    </div>
                                </div>
                            </div>	
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="<?=base_url('assets/img/blog/c5.jpg');?>" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Ina Hayes</a></h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                            <p class="comment">
                                                Never say goodbye till the end comes!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                           <a href="" class="btn-reply text-uppercase text-light" style="background-color: #1d3163;">reply</a> 
                                    </div>
                                </div>
                            </div>	                                             				
                        </div>
<!-- 
                        <div class="comment-form"> -->

                        <?php
                            // if(isset($this->session->name) || isset($this->session->email)) {
                            //     echo 
                            //     '
                            //     <h4>Faites un commentaire</h4>
                            //     <form method="POST" action="'.site_url('user/comment').'" novalidate="novalidate">  
                            //         <div class="form-group">
                            //             <textarea class="form-control mb-10" rows="5" name="comment" placeholder="Votre commentaire .... " onfocus="this.placeholder = " onblur="this.placeholder = '."comment".'" required=""></textarea>
                            //         </div>
                            //         <button type="submit" class="btn btn-lg btn-block text-light border-0" style="background-color: #1d3163;">Commenter</button>	
                            //     </form>
                            //     ';
                            // } else {
                            //     echo 
                            //     '
                            //     <h4>Connectez-vous pour faire un commentaire.</h4>
                            //     <a href="'.site_url('user/login').'" type="button" class="btn btn-lg btn-block text-light" style="background-color: #1d3163;">Se connecter</a>
                            //     ';
                            // }
                        ?>

                            
                        <!-- </div> -->
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar"> 
                            <aside class="single_sidebar_widget popular_post_widget">
                                
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
                                <div class="br"></div>
                            </aside>
                            <aside class="single-sidebar-widget tag_cloud_widget">
                               
                                <ul class="list">
                                   
                                <?php
                                        if(isset($domains)) 
                                        {
                                            if($domains -> num_rows() > 0) 
                                            {
                                                foreach ($domains -> result() as $row) 
                                                {
                                                    echo '<li><a href="'.site_url('activity/get_activity/' . $row->id ).'">'.$row->title.'</a></li>';
                                                }
                                            }
                                        } 
                                    ?> 				

                                </ul>
                            </aside>
                            <aside class="single_sidebar_widget ads_widget">
                                <a href="#"><img class="img-fluid" src="<?=base_url('assets/img/blog/add.jpg');?>" alt=""></a>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget post_category_widget">
                               
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
                                                        <a href="'.site_url('activity/get_activity/' . $row->id ).'" class="d-flex justify-content-between">
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
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
        
 
        
        
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