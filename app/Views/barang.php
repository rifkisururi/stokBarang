<?= $this->extend('template/stisla'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Barang</h1>
        </div>

        <div class="section-body">
            <table class="table dataTable">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php if(count($dtBarang) > 0 ){
                        foreach($dtBarang as $b) : ?>
                        <tr class="tr_<?= $b['id'] ?>">
                            <td class="kode"><?= $b['kode'] ?></td>
                            <td class="nama"><?= $b['nama'] ?></td>
                            <td class="stok"></td>
                            <td class="aksi"> 
                                <button class="btn btn-warning btnEdit" id="btnEdit_<?= $b['id'] ?>">Ubah</button>
                                <button class="btn btn-danger btnHapus" id="btnHapus_<?= $b['id'] ?>">Hapus</button>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
</div>

<script src="../assets/js/barang.js"></script>
<?= $this->endSection(); ?>
