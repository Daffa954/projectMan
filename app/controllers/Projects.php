<?php
class Projects extends Controller
{
    public function seeDetails($id)
    {
        $data['title'] = 'Project';
        $this->view('templates/header', $data);
        $this->view('templates/navbar');

        $this->view('templates/footer');
    }

    public function create()
    {
        $data['title'] = 'Project';
        if (isset($_POST['submit'])) {
            if ($this->model('Projects_model')->addProject($_POST, $_SESSION['user']['id_user'])) {

                echo "<script>
                alert('berhasil ditambahkan');
                window.location.href = '" . BASEURL . "';
            </script>";
                exit();
            }

        }
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('projects/tambah');
        $this->view('templates/footer');
    }
}
?>