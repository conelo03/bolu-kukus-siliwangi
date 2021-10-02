<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title?></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid mt-2">
        <div class="mt-2">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title mb-4 text-center"><?= $title2 ?></h3>
                            <table class="" border="1" width="100%">
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
                                <tbody style="font-size: 11pt;">
                                    <?php if($barang): ?>
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
                                    <?php else: ?>
                                        <tr>
                                            <td class="bg-light" colspan="7">Tidak ada data izin</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
