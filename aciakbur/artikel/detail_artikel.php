<?php

include "../koneksi.php";

$getid = $_GET['id_artikel'];


$search = mysqli_query($koneksi,"SELECT * FROM artikel where slug ='$getid'");
$item = mysqli_fetch_array($search);

?>    


<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="../assets/img/adiak-aciak.png" type="image/png">
        <title>Suhatri Bur</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../assets/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/vendors/linericon/style.css">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="../assets/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="../assets/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="../assets/vendors/animate-css/animate.css">
        <link rel="stylesheet" href="../assets/vendors/flaticon/flaticon.css">
        <!-- main css -->
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/responsive.css">
    </head>

    <!--================Header Menu Area =================-->
    <header class="header_area">
            <div class="main_menu" id="mainNav">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h d-none d-md-block" href="?page=home/index"><img src="../assets/img/logo-aciak.png" alt="" width="90px"></a>
                        <a class="navbar-brand logo_h" href="?page=home/index"><img src="../assets/img/adiak-aciak.png" alt="" width="90px"></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="../?page=home/index">Beranda</a></li> 
								<li class="nav-item"><a class="nav-link" href="../?page=home/profil">Profil</a></li> 
								<li class="nav-item"><a class="nav-link" href="../?page=artikel/index">Artikel</a>
								<li class="nav-item"><a class="nav-link" href="../?page=pengalaman/index">Pengalaman</a>
								<li class="nav-item"><a class="nav-link" href="../?page=kegiatan/index">Kegiatan</a></li>
								<li class="nav-item"><a class="nav-link" href="../admin/login/index.php">Login</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->

         <!--================Home Banner Area =================-->
         <section class="home_banner_area blog_banner">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="blog_b_text text-center">
						<h2>TETAP DISINI DAN<br /> LANJUTKAN!</h2>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Blog Categorie Area =================-->
        <section class="blog_categorie_area">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </section>
        <!--================Blog Categorie Area =================-->
        
        <!--================Blog Area =================-->
        <section class="blog_area single-post-area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post row">
                            <div class="col-lg-12">
                                <div class="feature-img">
                                    <img class="img-fluid" src="../admin/assets/images/artikel/<?= $item['gambar_artikel']?>" alt="">
                                </div>									
                            </div>
                            <div class="col-lg-9 col-md-9 blog_details">
                                <h2><?= $item['judul_artikel']?></h2>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12 mt-25">
                                        <p><?= $item['isi_artikel']?></p>											
                                    </div>									
                                </div>
                            </div>
                        </div>
                        <div class="navigation-area">
                            <div class="row">
                                <!-- <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                    <div class="detials">
                                        <a href="#"><p>Prev Post</p></a>
                                    </div>
                                </div> -->
                                <!-- <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                    <div class="detials">
                                        <a href="#"><p>Next Post</p></a>
                                    </div>									
                                </div>									 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
      
        
        <!--================Footer Area =================-->
        <footer class="footer_area p_120">
        	<div class="container">
        		<div class="row footer_inner">
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget ab_widget">
        					<div class="f_title">
        						<h3>Suhatri Bur, S.E., M.M.</h3>
        					</div>
        					<p>Suhatri Bur, S.E., M.M. gelar Datuak Putiah (lahir 11 Oktober 1970) adalah politikus yang menjabat Bupati Padang Pariaman periode 2021-2024</p>
        					<p>&copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Powered  by <a href="https://metrosoftware.id" target="_blank" style ="color : black">PT Metro Indonesian Software</a></p>
        				</aside>
        			</div>
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3>EMAIL</h3>
        					</div>
        					<!-- <p>Stay updated with our latest trends</p> -->
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
        						<h3>Social Media</h3>
        					</div>
        					<!-- <p>Let us be social</p> -->
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
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../assets/js/jquery-3.2.1.min.js"></script>
        <script src="../assets/js/popper.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/stellar.js"></script>
        <script src="../assets/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="../assets/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="../assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="../assets/vendors/isotope/isotope-min.js"></script>
        <script src="../assets/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="../assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="../assets/vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="../assets/vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="../assets/js/mail-script.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="../assets/js/gmaps.min.js"></script>
        <script src="../assets/js/theme.js"></script>
    </body>
</html>