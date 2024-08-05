
        
        <!--================Home Banner Area =================-->
        <!-- <section class="home_banner_areay blog_bannery">
            <div class="banner_innery d-flex align-items-center">
            	<div class="overlayy bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="blog_b_texty text-center">
						<h2>Dude You’re Getting <br /> a Telescope</h2>
						<p>There is a moment in the life of any aspiring astronomer that it is time to buy that first</p>
						<a class="white_bg_btn" href="#">View More</a>
					</div>
				</div>
            </div>
        </section> -->


		<section class="home_banner_area blog_banner">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="blog_b_text text-center">
						<h2>LIHAT KEGIATAN<br />ACIAK BUR</h2>
						<!-- <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first</p> -->
						<!-- <a class="white_bg_btn" href="#">View More</a> -->
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
			<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">
					<div class="section-top-border">
						<!-- <h3 class="title_color">Galeri Suhatri Bur</h3> -->
						<div class="row gallery-item">
                        <?php
					$foto = mysqli_query($koneksi, "SELECT * FROM dokumentasi ORDER BY id_foto DESC LIMIT 20");
					while($item1= mysqli_fetch_array($foto)):
					?>
							<div class="col-md-4">
								<a href="admin/assets/images/dokumentasi/<?= $item1['foto']?>" class="img-gal" title="<?= $item1['keterangan']?>">
                                    <div class="single-gallery-image" style="background: url(admin/assets/images/dokumentasi/<?= $item1['foto']?>);"></div>
                                </a>
							</div>
                            <?php endwhile; ?>
						</div>
					</div>
				</div>
			</div>
			<!-- End Align Area -->
 