<?php
$getid = $_GET['id_foto'];

$search = mysqli_query($koneksi,"SELECT * FROM dokumentasi WHERE id_foto ='$getid'");
$item = mysqli_fetch_array($search);

?>

<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Form Elements</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Elements</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">

            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Component</h5>
                    </div>
                    <div class="card-body">
                        <h5>Form controls</h5>
                        <hr>
                        <form action="dokumentasi/proses_ubah.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_foto" value="<?=$item['id_foto']?>">
                            <div class="row">
                                <div class="col-md-6">

                                <div class="form-group">
                                        <label for="exampleInputPassword1">Foto</label><br>
                                        <img src="assets/images/dokumentasi/<?=$item ['foto']?>" width="100px">
                                        <input type="hidden" name="foto_lama" value="<?= $item['foto']?>">
                                        <input type="file" name="foto" class="form-control">
                                    </div>
                                    <div class="form-group">

                                    <label for="exampleInputEmail1">Keterangan</label>
                                    <input type="text" class="form-control" name="keterangan"
                                        value="<?php echo $item ['keterangan'];?>">
                                    </div>
                                    <button type="submit" class="btn  btn-primary" name="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                        <!-- [ form-element ] end -->
                    </div>
                    <!-- [ Main Content ] end -->

                </div>
            </div>
</section>
<!-- [ Main Content ] end -->
