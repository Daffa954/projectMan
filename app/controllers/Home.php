<?php
class Home extends Controller
{
    public function cetak() {
        $this->view('templates/header');
        $this->view('home/cetak');
        $this->view('templates/footer');
    }
    public function index($page = 1)
    {
        $data['title'] = 'index';
        $data['actPage'] = $page;
        $dataPerPage = 10;
        $data['dpp'] = $dataPerPage;

        // Dapatkan total halaman
        $data['pageTotal'] = $this->model('Projects_model')->pageTotal($dataPerPage, $_SESSION['user']['id_user']);
        // Konversi halaman ke integer
        $intPage = intval($page);

        // Periksa apakah halaman yang diminta melebihi total halaman
        if ($intPage > $data['pageTotal']) {
            $page = 1;

        }



        // Dapatkan data proyek untuk halaman yang diminta
        $data['projects'] = $this->model('Projects_model')->pagination($page, $dataPerPage, $_SESSION['user']['id_user']);
        if (isset($_POST['search'])) {          
            $data['projects'] = $this->model('Projects_model')->cari($_POST['keyword']);
        }
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }


    public function login()
    {
        //cek cookie
        if (isset($_COOKIE['id']) && isset($_COOKIE['email'])) {
            $row = $this->model('User_model')->cookieCheck($_COOKIE['id']);
            if (hash('sha256', $row['email']) === $_COOKIE['email']) {
                $_SESSION['user'] = $row;
                header("Location: " . BASEURL . "/home/index");
                exit();
            }
        }

        if (isset($_POST['login'])) {
            $login = $this->model('User_model')->login($_POST);
            if ($login) {
                // Set the user session data
                $_SESSION['user'] = $login;

                if (isset($_POST['remember'])) {
                    // Set cookies to remember user with secure flags and best practices
                    setcookie('id', $login['id_user'], time() + 3600, "/", "", true, true); // Path, Secure, HttpOnly
                    setcookie('email', hash('sha256', $login['email']), time() + 3600, "/", "", true, true); // Path, Secure, HttpOnly
                }

                header("Location: " . BASEURL . "/home/index");
                exit();
            } else {
                // Set a flash message for failed login attempt
                Flasher::setFlash('Login failed', 'Invalid email or password', 'danger');
                echo "<script>alert('gagal')</script>";
            }
        }

        $data['title'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('login/index');
        $this->view('templates/footer');
    }


    public function register()
    {
        $data['title'] = 'Register';
        if (isset($_POST['submit'])) {
            // Attempt to register the user
            $registeredUser = $this->model('User_model')->register($_POST);

            if ($registeredUser) {
                // Registration successful
                Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
                $_SESSION['user'] = $registeredUser; // Set the user in session
                header("Location: " . BASEURL); // Redirect to homepage or dashboard
                exit(); // Ensure script stops execution after redirect
            } else {
                // Registration failed
                Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            }
        }

        // Load the registration form view
        $this->view('templates/header', $data);
        $this->view('login/register');
    }
    

    public function logout()
    {
        setcookie('id', '', time() - 3600, "/", "", true, true); // Path, Secure, HttpOnly
        setcookie('email', '', time() - 3600, "/", "", true, true); // Path,
        unset($_SESSION['user']);
        session_destroy();
        // Redirect ke halaman login atau home setelah logout
        header("Location: " . BASEURL . "/login");
        exit();
    }
}


?>