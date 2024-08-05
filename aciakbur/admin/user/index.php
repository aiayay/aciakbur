

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
                        <a href="?page=user/tambah" class="btn btn-primary">tambah data</a>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Password </th>
                                        <th>Nama Lengkap</th>
                                        <th>Foto</th>
                                        <th>Level</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no=1;
                                    $user = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id_admin DESC");
                                    while ($item = mysqli_fetch_array($user)){

                                    
                                    ?>
                                    <tr>
                                        <td><?= $no++?></td>
                                        <td><?= $item ['username']?></td>
                                        <td><?= $item ['password']?></td>
                                        <td><?= $item ['nama_lengkap']?></td>
                                        <td><img src="assets/images/user/<?=$item ['foto']?>" width="100"></td>
                                        <td><a href="?page=user/ubah&id_admin=<?php echo $item["id_admin"];?>" class="btn btn-success">ubah</a>
                                            <a onclick="return confirm('yakin mau dihapus??')" href="user/hapus.php?id_admin=<?php echo $item["id_admin"];?>" class="btn btn-danger">hapus</a></td>
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