<?php
require_once '../app/init.php';
require_once "../app/models/Projects_model.php";
session_start();
$project = new Projects_model();
$result = $project->cari($_GET['keyword'], $_SESSION['user']['id_user']);


?>
<?php for ($i = 0; $i < count($result); $i++) { ?>
    <?php if ($result[$i]['name'] !== null) { ?>
        <div class=" w-full p-2 rounded-lg border-2 border-sky-500 ">
            <img src="<?= BASEURL ?>/img/66863230218b0.png" alt="" srcset="" class="w-full h-[240px]">
            <p class="ml-1 mt-1 mb-1"><?= $result[$i]['name'] ?></p>
            <a class="ml-1 mt-1 mb-1" href="<?= BASEURL ?>/projects/seeDetails/<?= $result[$i]['id_project'] ?>">see details</a>
        </div>
    <?php } ?>
<?php } ?>