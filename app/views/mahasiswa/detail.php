<div class="container mt-3">
    <div class="row">
        <div class="col-sm-6">
            <h3>Detail Mahasiswa</h3>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2"><?= $data['mhs']['nrp']; ?></h6>
                    <h6 class="card-subtitle"><?= $data['mhs']['email']; ?></h6>
                    <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
                    <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>