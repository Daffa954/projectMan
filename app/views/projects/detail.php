<div class="container">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['student']['nama']?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data['student']['nrp']?></h6>
            <p class="card-text"><?= $data['student']['email']?></p>
            <a href="#" class="card-link"><?= $data['student']['jurusan']?></a>
            <a href="<?= BASEURL?>/mahasiswa" class="card-link">Kembali</a>
        </div>
    </div>
</div>