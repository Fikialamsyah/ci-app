<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-md-6">
           <div class="card">
            <div class="card-header">
                    <h3>Tambah Data Buku Baru</h3>
                </div>
            <div class="card-body">
                <form method="post">
                        <div id="judul">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" name="judul" class="form-control" id="name">
                            <div id="judul" class="form-text text-danger"><?= form_error('judul') ?></div>
                        </div>
                        <div id="harga">
                            <label for="harga" class="form-label">Harga</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Rp.</span>
                                <input type="number" name="harga" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                            <div id="harga" class="form-text text-danger"><?= form_error('harga') ?></div>
                        </div>
                        <div id="penerbit">
                            <label for="penerbit" class="form-label">Penerbit</label>
                            <input type="text" name="penerbit" class="form-control" id="name">
                            <div id="penerbit" class="form-text text-danger"><?= form_error('penerbit') ?></div>
                        </div>
                        <div id="deskripsi">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="exampleTextarea" rows="5"></textarea>
                            <div id="deskripsi" class="form-text text-danger"><?= form_error('deskripsi') ?></div>
                        </div>
                        <button type="submit" value="submit" class="btn btn-primary mt-3 float-right">Submit</button>
                    </form>
                </div>
           </div>
        </div>

        <div class="col-md6">
            <img src="https://assets.website-files.com/626f5d0ae6c15cea8c2dd5dd/633d1788d4952da4b9630dd4_3d-tb-education.png" alt="">
        </div>
    </div>
</div>