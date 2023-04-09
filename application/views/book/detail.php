<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Detail Data Buku</h5>
                <div class="card-body">
                <h5 class="card-title"><?= $buku['judul']?></h5>
                <p class="card-text"><strong>Harga:</strong> <?= $buku['harga']?></p>
                <p class="card-text"><strong>Penerbit:</strong> <?= $buku['penerbit']?></p>
                <p class="card-text"><strong>Deskripsi:</strong> <?= $buku['deskripsi']?></p>
                <a href="<?= base_url()?>book/index" class="btn btn-primary" >Kembali</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
            <img src="https://cdn3d.iconscout.com/3d/premium/thumb/male-character-sitting-on-chair-and-reading-a-book-4638153-3855699.png?f=webp" alt="">
        </div>
</div>
</div>