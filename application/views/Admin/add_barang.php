            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                    <?php echo form_open_multipart('Admin/addBarang');  ?>
                    <?= $this->session->flashdata('file_update'); ?>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                                            <input type="text" class="form-control" aria-describedby="emailHelp" name="nama_barang">
                                    </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Harga Barang</label>
                                            <input type="text" class="form-control" name="harga_barang">
                                        </div>
                                        <div class=" mb-3">
                                        <label class="form-label">Tipe Barang</label>
                                        <select class="form-select" aria-label="Default select example" name="tipe_barang">
                                            <option selected>Makanan</option>
                                            <option>Alat</option>
                                            <option>Minuman</option>
                                            <option>Fashion</option>
                                            <option>Obat-Obatan</option>
                                        </select>
                                        </div>
                                        <div class=" mb-3">
                                        <label class="form-label" for="inputGroupFile02">Foto Produk</label>
                                            <input type="file" class="form-control" id="inputGroupFile02" name="images">
                                        </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <?php echo form_close() ?>
                                    </div>
                                </div>
                            </div>
                        </div>
