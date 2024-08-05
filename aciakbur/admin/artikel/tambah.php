

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
                        <form action="artikel/proses_tambah.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Judul Artikel</label>
                                                <input type="text" class="form-control" name="judul_artikel"
                                                    placeholder=" Masukan Judul Artikel">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Isi Artikel</label>
                                                <textarea name="isi_artikel" id="" id="editor" cols="3" rows="13" class="form-control" required></textarea>
                                            </div>
                                            <button type="submit" class="btn  btn-primary">Submit</button>
                                </div>
                                <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Gambar Artikel</label>
                                                <input type="file" class="form-control" name="gambar_artikel">
                                            </div>
                                </div>
                            </div>
                        </form>
                        <!-- [ form-element ] end -->
                    </div>
                    <!-- [ Main Content ] end -->
                </div>
            </div>
</section>
