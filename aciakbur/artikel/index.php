
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
        <section class="blog_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">
                            <article class="row blog_item">
                            <?php

                            include_once __DIR__ . '/../koneksi.php';
                            $halamanperpage = 4;
                            $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                            $halamanselanjutnya = ($currentPage - 1) * $halamanperpage;

                            $query = "SELECT COUNT(*) as total FROM artikel";
                            $result = mysqli_query($koneksi, $query);
                            $totalArtikel = mysqli_fetch_assoc($result)['total'];
                            $totalhalaman = ceil($totalArtikel / $halamanperpage);

                            $cari = '';
                            $artikel = "SELECT * FROM artikel JOIN user ON artikel.id_admin=user.id_admin ORDER BY id_artikel DESC";
                            if (isset($_POST['tombolcari'])) {
                                $cari = mysqli_real_escape_string($koneksi, $_POST['cari']);
                                $artikel = "SELECT * FROM artikel JOIN user ON artikel.id_admin=user.id_admin 
                                          WHERE artikel.judul_artikel LIKE '%$cari%' 
                                          OR artikel.isi_artikel LIKE '%$cari%' 
                                          ORDER BY id_artikel DESC";
                            }
                            
                            $tampil = mysqli_query($koneksi, $artikel);
                            while ($data = mysqli_fetch_array($tampil)):
                                ?>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                    <a href="artikel/<?php echo $data['slug'];?>"><img class="img-fluid" src="admin/assets/images/artikel/<?= $data['gambar_artikel']?>" alt=""></a>
                                        <div class="blog_details">
                                            <a href="artikel/<?php echo $data['slug'];?>"><h2><?= $data['judul_artikel']?></h2></a>
                                            <p><?= $data['tanggal_artikel']?> | Oleh : <?= $data['nama_lengkap']?></p>
                                            <p><?= substr($data['isi_artikel'], 0, 100); ?>...</p>
                                            <a href="artikel/<?php echo $data['slug'];?>" class="blog_btn">View More</a>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <br>
                                <?php endwhile; ?>
                            </article>
                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <?php if($currentPage > 1): ?>
                                        <li class="page-item">
                                            <a href="artikel/index?page=<?= $currentPage - 1 ?>" class="page-link" aria-label="Previous">
                                                <span aria-hidden="true">
                                                    <span class="lnr lnr-chevron-left"></span>
                                                </span>
                                            </a>
                                        </li>
                                    <?php endif; ?>

                                    <?php for($i = 1; $i <= $totalhalaman; $i++): ?>
                                        <?php if($i == $currentPage): ?>
                                        <li class="page-item <?= ($i == $currentPage) ? 'active' : '' ?>">
                                            <a href="#" class="page-link"><?php echo $i; ?></a>
                                        </li>
                                        <?php else : ?>
                                        <li class="page-item <?= ($i == $currentPage) ? 'active' : '' ?>">
                                            <a href="#" class="page-link"><?php echo $i; ?></a>
                                        </li>
                                        <?php endif; ?>
                                    <?php endfor; ?>

                                    <?php if($currentPage < $totalhalaman): ?>
                                        <li class="page-item">
                                            <a href="#" class="page-link" aria-label="Next">
                                                <span aria-hidden="true">
                                                    <span class="lnr lnr-chevron-right"></span>
                                                </span>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </nav>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <form action="" method="post">
                            <aside class="single_sidebar_widget search_widget">
                                <div class="input-group">
                                    <input type="text" name="cari" class="form-control" placeholder="Search Posts">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit" name="tombolcari"><i class="lnr lnr-magnifier"></i></button>
                                    </span>
                                </div><!-- /input-group -->
                                <div class="br"></div>
                            </aside>
                            </form>
                            
                           
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Recent Posts</h3>
                        <?php
                            $artikelsamping = mysqli_query($koneksi, "SELECT * FROM artikel ORDER BY id_artikel DESC LIMIT 4");
                            while ($data = mysqli_fetch_array($artikelsamping)):
                        ?>
                        <div class="media post_item">
                            <a href="artikel/<?php echo $data['slug'];?>"><img src="admin/assets/images/artikel/<?=$data['gambar_artikel']?>" width="100px" height="100px"></a>
                            <div class="media-body">
                                <a href="artikel/<?php echo $data['slug'];?>"><h3><?= $data['judul_artikel']?></h3></a>
                                <p><?=$data['tanggal_artikel']?></p>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <div class="br"></div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->
