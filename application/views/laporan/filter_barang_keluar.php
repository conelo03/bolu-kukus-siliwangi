<?php $this->load->view('template/header');?>
<?php $this->load->view('template/sidebar');?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title?></h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Laporan Penjualan</a></div>
      </div>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4><?= $title2?></h4>
              <div class="card-header-action">
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="datatables-jabatan">
                  <thead>
                    <tr>
                      <th class="text-center">NO</th>
                      <th class="text-center">ID Transaksi</th>
                      <th class="text-center">Tanggal</th>
                      <th class="text-center">Nama Bolu</th>
                      <th class="text-center">Exp</th>
                      <th class="text-center">Jumlah</th>
                      <th class="text-center">Ket. Harga</th>
                      <th class="text-center">Harga</th>
                      <th class="text-center">Stok</th>
                      <th class="text-center">Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1; 
                    $keuntungan=0;
                    foreach($barang as $u):
                    ?>
                    <tr>
                        <td class="text-center"><?= $no++;?></td>
                        <td class="text-center"><?= $u['id_penjualan'];?></td>
                        <td class="text-center"><?= date('d/m/y', strtotime($u['tanggal']));?></td>
                        <td><?= $u['nama_bolu'];?></td>
                        <td class="text-center"><?= $u['exp'] != null ? date('d/m/y', strtotime($u['exp'])) : '-';?></td>
                        <td class="text-center"><?= $u['jumlah'];?></td>
                        <td class="text-left"><?= $u['keterangan'];?></td>
                        <td class="text-right"><?= number_format($u['jumlah']*$u['harga_jual'], 2, ',', '.');?></td>
                        <td class="text-center"><?= $u['sisa_stok'];?></td>
                        <td class="text-center"><?= $u['ket_diskon'];?></td>
                    </tr>
                    <?php endforeach;?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('template/footer');?>