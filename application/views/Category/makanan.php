            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <?php echo form_open('Admin/searchProduk') ?>
    <input type="text" name="keyword" placeholder="Cari produk...">
    <button type="submit">Cari</button>
<?php echo form_close() ?>
                            <br>
                            <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 style="margin-bottom:40px;">Daftar Barang</h3>

                                    <table id="datatable1" class="table table-bordered" style="border: black;">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Harga Barang</th>
      <th scope="col">Tipe Barang</th>
      <th scope="col">Foto Barang</th>
    </tr>
  </thead>
  <tbody>
  <?php $i = 1?>
                                                        <?php foreach ($produk as $b): ?>
    <tr>
      <th scope="row"><?=$i?></th>
      <td><?=$b['nama_barang']?></td>
      <td>Rp <?=$b['harga_barang']?></td>
      <td><?=$b['tipe_barang']?></td>
      <td><img src="<?=base_url() . '/assets/images/' . $b['gambar_barang'];?>" width="100"></td>
    </tr>
    <?php $i++;
endforeach?>
  </tbody>
</table>



                                    </div>
                                </div>
                            </div>
                        </div>
