<?php
class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;
    private $conn, $stmt;



    public function bukaKoneksi()
    {
        $conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db_name) or die("Koneksi ke database gagal: " . mysqli_connect_error());
        return $conn;
    }

    public function tutupKoneksi($conn)
    {
        mysqli_close($conn);
    }

   

}

?>