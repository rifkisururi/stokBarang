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
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php if(count($dtPengguna) > 0 ){
                        foreach($dtPengguna as $p): ?>
                        <tr class="tr_<?= $p['id'] ?>">
                            <td class="nama"><?= $p['nama'] ?></td>
                            <td class="email"><?= $p['email'] ?></td>
                            <td class="role"><?= $p['role'] ?></td>
                            <td class="aksi"> 
                                <button class="btn btn-warning">Ubah</button>
                                <button class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
</div>

<script src="../assets/js/pengguna.js"></script>
<?= $this->endSection();