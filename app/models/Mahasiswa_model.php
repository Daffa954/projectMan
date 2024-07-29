<?php
class Mahasiswa_model
{
    private $table = "mahasiswa";
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

   

    public function getMahasiswaById($id)
    {
        $conn = $this->db->bukaKoneksi();
        $sql = "SELECT * FROM mahasiswa WHERE id = ?";

        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            die('Prepare failed: ' . htmlspecialchars($conn->error));
        }

        // Bind the parameter
        $stmt->bind_param("i", $id);  // "i" stands for integer
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        // Close the statement and the connection
        $stmt->close();
        $this->db->tutupKoneksi($conn);

        return $row;
    }

    function addMahasiswa($data)
    {
        $conn = $this->db->bukaKoneksi();
        $nama = htmlspecialchars($data['nama']);
        $jurusan = htmlspecialchars($data['jurusan']);
        $email = htmlspecialchars($data['email']);
        $nrp = htmlspecialchars($data['nrp']);

        // Upload gambar
        $photo = $this->upload();
        if (!$photo) {
            return false;
        }

        // Menggunakan prepared statements untuk mencegah SQL injection
        $stmt = $conn->prepare("INSERT INTO $this->table (id, nama, nrp, email, jurusan, gambar) VALUES (NULL, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $nama, $nrp, $email, $jurusan, $photo);

        if ($stmt->execute()) {
            // Jika berhasil
            $stmt->close();
            $this->db->tutupKoneksi($conn);
            return true;
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

        // Cek apakah gambar tidak ada yg diupload
        if ($error === 4) {
            echo "<script>alert('Pilih gambar terlebih dahulu');</script>";
            return false;
        }

        // Cek apakah yang di-upload adalah gambar
        $fileExtension = ['jpg', 'jpeg', 'png', 'gif'];
        $getExtension = explode('.', $filename);
        $getExtension = strtolower(end($getExtension));
        if (!in_array($getExtension, $fileExtension)) {
            echo "<script>alert('Yang anda pilih bukan gambar');</script>";
            return false;
        }

        // Cek jika ukuran file terlalu besar
        if ($filesize >= 1000000) { // 1MB
            echo "<script>alert('Ukuran terlalu besar');</script>";
            return false;
        }

        // Ganti nama file menjadi unik
        $newFileName = uniqid() . '.' . $getExtension;
        $destination = '../public/img/' . $newFileName;
        // $destination1 = '../uploads/' . $newFileName;

        // Lolos pengecekan, gambar siap di-upload
        if (move_uploaded_file($tmpname, $destination)) {
            return BASEURL . '/img/' . $newFileName;

        } else {
            echo "<script>alert('Error dalam mengupload gambar');</script>";
            return false;
        }
    }
    public function deleteMahasiswa($id)
    {
        $conn = $this->db->bukaKoneksi();
        $sql = "DELETE FROM mahasiswa WHERE id = ?";

        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            die('Prepare failed: ' . htmlspecialchars($conn->error));
        }

        $stmt->bind_param("i", $id);
        $stmt->execute();

        $affectedRows = $stmt->affected_rows;

        $stmt->close();
        $this->db->tutupKoneksi($conn);

        return $affectedRows;
    }
}

?>

<script>

</script>