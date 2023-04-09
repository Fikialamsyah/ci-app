<div class="container mb-5">
    <div class="row mt-3">
        <div class="col-md-6">
            <?php if ($this->session->flashdata()) : ?>
                <div class="alert alert-dismissible alert-success">
                    <button type="button" class="btn-close btn-success mr-3" data-bs-dismiss="alert">X</button>
                    Data buku <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <a class="btn btn-outline-primary" href="<?= base_url() ?>book/insert">Tambah Data</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <form class="d-flex" role="search" method="post">
                <input class="form-control me-2" type="search" placeholder="Cari buku apa.." aria-label="Search" name="keyword">
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="bg-primary text-white">
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($buku as $row) : ?>
                        <tr>
                            <th scope="row"><?= $no; ?></th>
                            <td><?= $row['judul']; ?></td>
                            <td><?= $row['harga']; ?></td>
                            <td><?= $row['penerbit']; ?></td>
                            <td>
                                <a class="btn btn-outline-success" href="<?= base_url();?>book/detail/<?= $row['buku_id'] ?>">Detail</a>
                                <a class="btn btn-outline-secondary" href="<?= base_url();?>book/update/<?= $row['buku_id'] ?>">Ubah</a>
                                <a class="btn btn-outline-danger" href="<?= base_url();?>book/delete/<?= $row['buku_id'] ?>" onclick="return confirm('Yakin ingin dihapus?');">Hapus</a>
                            </td>
                        </tr>
                    <?php $no++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>