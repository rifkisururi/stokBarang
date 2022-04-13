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
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Stok</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php if(count($dtBarang) > 0 ){
                        foreach($dtBarang as $b) ?>
                        <tr class="tr_<?= $b['id'] ?>">
                            <td class="kode"><?= $b['kode'] ?></td>
                            <td class="nama"><?= $b['nama'] ?></td>
                            <td class="stok"></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
</div>

<?= $this->endSection();