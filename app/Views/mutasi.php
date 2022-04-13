<?= $this->extend('template/stisla'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Barang</h1>
        </div>

        <div class="section-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Tanggal</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Jenis Transaksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(count($dtMutasi) > 0 ){
                    foreach($dtMutasi as $m); ?>
                        <tr class="tr_<?= $m['id'] ?>">
                            <td class="id_barang"><?= $m['id_barang'] ?></td>
                            <td class="tanggal"><?= $m['tanggal'] ?></td>
                            <td class="jumlah"><?= $m['jumlah'] ?></td>
                            <td class="harga"><?= $m['harga'] ?></td>
                            <td class="jenisTransaksi"><?= $m['jenisTransaksi'] ?></td>
                        </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </section>
</div>

<?= $this->endSection();