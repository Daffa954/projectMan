<?php
class User_model
{
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function login($data)
    {
        $conn = $this->db->bukaKoneksi();
        $email = htmlspecialchars($data['email']);
        $password = htmlspecialchars($data['password']);

        // Prepare statement to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM $this->table WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        // Verify password
        if ($user && password_verify($password, $user['password'])) {
            $stmt->close();
            $this->db->tutupKoneksi($conn);
            return $user;
        } else {
            $stmt->close();
            $this->db->tutupKoneksi($conn);
            return false;
        }
    }

    public function register($data)
    {
        $conn = $this->db->bukaKoneksi();
        $name = htmlspecialchars($data['name']);
        $email = htmlspecialchars($data['email']);
        $password = password_hash($data['password'], PASSWORD_BCRYPT);

        // Check email
        $checkEmail = "SELECT email FROM user WHERE email = '$email'";
        $checking = mysqli_query($conn, $checkEmail);
        $row = mysqli_fetch_assoc($checking);

        if ($row != null) {
            echo "<script>
                alert('Email sudah digunakan');
                document.location.href = 'register.php';
              </script>";
            return false;
        }

        // Upload gambar
        $photo = $this->upload();
        if (!$photo) {
            $photo = null; // Tetapkan null jika tidak ada foto yang diunggah
        }

        // Menggunakan prepared statements untuk mencegah SQL injection
        $stmt = $conn->prepare("INSERT INTO $this->table (name, email, password, photo) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $password, $photo);

        if ($stmt->execute()) {
            // Jika berhasil
            $stmt->close();
            $query = "SELECT * FROM user WHERE email = '$email'";
            $user = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($user);
            $this->db->tutupKoneksi($conn);
            return $row;
        } else {
            // Jika gagal
            echo "Error: " . $stmt->error;
            $stmt->close();
            $this->db->tutupKoneksi($conn);
            return false;
        }
    }

    function upload()
    {
        $filename = $_FILES['photo']['name'];
        $filesize = $_FILES['photo']['size'];
        $error = $_FILES['photo']['error'];
        $tmpname = $_FILES['photo']['tmp_name'];

        // Cek apakah gambar tidak ada yang diupload
        if ($error === 4) {
            return false; // Mengembalikan false jika tidak ada gambar yang diunggah
        }

        // Cek apakah yang di-upload adalah gambar
        $fileExtension = ['jpg', 'jpeg', 'png', 'gif'];
        $getExtension = explode('.', $filename);
        $getExtension = strtolower(end($getExtension));
        if (!in_array($getExtension, $fileExtension)) {
            echo "<script>alert('Yang Anda pilih bukan gambar');</script>";
            return false;
        }

        // Cek jika ukuran file terlalu besar
        if ($filesize >= 1000000) { // 1MB
            echo "<script>alert('Ukuran terlalu besar');</script>";
            return false;
        }

        // Ganti nama file menjadi unik
        $newFileName = uniqid() . '.' . $getExtension;
        $destination = '../app/uploads/' . $newFileName;

        // Lolos pengecekan, gambar siap di-upload
        if (move_uploaded_file($tmpname, $destination)) {
            // Mengembalikan path relatif untuk disimpan di database
            return $newFileName;
        } else {
            echo "<script>alert('Error dalam mengupload gambar');</script>";
            return false;
        }
    }

    public function cookieCheck($id)
    {
        $conn = $this->db->bukaKoneksi();

        // Prepare statement to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM $this->table WHERE id_user = ?");
        $stmt->bind_param("i", $id); // Bind $id as an integer
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        $stmt->close();
        $this->db->tutupKoneksi($conn);

        return $user ? $user : false;
    }

    
   
}


?>