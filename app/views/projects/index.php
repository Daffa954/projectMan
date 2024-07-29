<div class="container">

    <button type="button" class="btn btn-primary mt-2"><a href="<?= BASEURL ?>/mahasiswa/tambah">tambah data
            mahasiswa</a></button>
    <h1>Daftar Mahasiswa</h1>
    <ul class="list-group">
        <?php for ($i = 0; $i < count($data['students']); $i++) { ?>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <?= $data['students'][$i]['gambar'] ?>
                <td><img src="<?= $data['students'][$i]['gambar'] ?>" alt="" srcset="" width="300" height="300"></td>
                <td><?= $data['students'][$i]['nama'] ?><a class="badge text-bg-secondary bg-primary"
                        href="<?= BASEURL; ?>/mahasiswa/detail/<?= $data['students'][$i]['id'] ?>">detail</a>
                <td><a class="badge text-bg-secondary bg-danger"
                        href="<?= BASEURL; ?>/mahasiswa/delete/<?= $data['students'][$i]['id'] ?>"
                        onclick="return confirm('yakin?')">delete</a>
                <td><a class="badge text-bg-secondary bg-warning"
                        href="<?= BASEURL; ?>/mahasiswa/update/<?= $data['students'][$i]['id'] ?>">update</a>
                        <td><a class="badge text-bg-secondary bg-warning"
                        href="<?= BASEURL; ?>/models">update</a>
            </li>
        <?php } ?>
    </ul>




</div>