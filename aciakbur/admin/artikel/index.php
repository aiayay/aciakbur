

<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Bootstrap Basic Tables</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Bootstrap Table</a></li>
                            <li class="breadcrumb-item"><a href="#!">Basic Tables</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
 
            <!-- [ stiped-table ] start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                    <a href="?page=artikel/tambah" class="btn btn-primary">Tambah Data</a>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Artikel</th>
                                        <th>Isi Artikel</th>
                                        <th>Tanggal Artikel</th>
                                        <th>Gambar Artikel</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                $no =1;
                                $artikel = mysqli_query($koneksi, "SELECT * FROM artikel ORDER BY id_artikel DESC");
                                while($item = mysqli_fetch_array($artikel)){
                                    ?>
                                    <tr>
                                        <td><?=  $no++; ?></td>
                                        <td class="isi"><?= $item['judul_artikel']; ?></td>
                                        <td class="isi"><?= $item['isi_artikel']; ?></td>                                        
                                        <td><?= $item['tanggal_artikel']?></td>
                                        <td><img src="assets/images/artikel/<?= $item['gambar_artikel']?>" width="100px"></td>
                                        <td><a href="?page=artikel/ubah&id_artikel=<?php echo $item["id_artikel"];?>" class="btn btn-success">Ubah</a>
                                            <a onclick="return confirm('yakin mau dihapus??')" href="artikel/hapus.php?id_artikel=<?php echo $item["id_artikel"];?>" class="btn btn-danger">Hapus</a></td>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ stiped-table ] end -->
          
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
