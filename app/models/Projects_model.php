<?php
class Projects_model
{
    private $table = 'projects';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    public function check()
    {
        echo "aku";
    }
    public function pagination($activePage, $dataPerPage, $id_user)
    {
        $conn = $this->db->bukaKoneksi();


        $query = mysqli_query($conn, "SELECT * FROM $this->table");
        $row = mysqli_fetch_assoc($query);
        $allData = count($row);
        $pageTotal = ceil($allData / $dataPerPage);
        $awalData = ($dataPerPage * $activePage) - $dataPerPage;

        $result = mysqli_query($conn, "SELECT * FROM $this->table WHERE user_id = $id_user 
        LIMIT $awalData, $dataPerPage ");
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function pageTotal($dataPerPage, $id_user)
    {
        $conn = $this->db->bukaKoneksi();
        $query = mysqli_query($conn, "SELECT * FROM projects WHERE user_id = $id_user ");
        $rows = [];
        while ($row = mysqli_fetch_assoc($query)) {
            $rows[] = $row;
        }
        $allData = count($rows);
       
        $pageTotal = ceil($allData / $dataPerPage);

        return $pageTotal;
    }

    public function getAllProjects()
    {
        $conn = $this->db->bukaKoneksi();
        $sql = "SELECT * FROM $this->table";

        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            die('Prepare failed: ' . htmlspecialchars($conn->error));
        }

        $stmt->execute();

        $result = $stmt->get_result();
        $projects = [];

        while ($row = $result->fetch_assoc()) {
            $projects[] = $row;
        }

        $stmt->close();
        $this->db->tutupKoneksi($conn);

        return $projects;
    }

    public function cari($keyword)
    {
        $conn = $this->db->bukaKoneksi();


        $sql = "SELECT * FROM $this->table WHERE 
    name LIKE '%$keyword%' OR
    description LIKE '%$keyword%' 
    ";

        $result = mysqli_query($conn, $sql);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        $this->db->tutupKoneksi($conn);

        return $rows;
    }

    public function addProject($data, $user_id)
    {
        $conn = $this->db->bukaKoneksi();
        $name = htmlspecialchars($data['name']);
        $description = htmlspecialchars($data['description']);
        $start_date = htmlspecialchars($data['start']);
        $end_date = htmlspecialchars($data['end']);

        // Menggunakan prepared statements untuk mencegah SQL injection
        $stmt = $conn->prepare("INSERT INTO $this->table (name, description, start_date, end_date, created_at, user_id) VALUES (?, ?, ?, ?, current_timestamp(), ?)");

        if ($stmt === false) {
            die('Prepare failed: ' . htmlspecialchars($conn->error));
        }

        $stmt->bind_param("ssssi", $name, $description, $start_date, $end_date, $user_id);

        if ($stmt->execute()) {
            $stmt->close();
            $this->db->tutupKoneksi($conn);
            return true;

        } else {
            echo "Error: " . $stmt->error;
            $stmt->close();
            $this->db->tutupKoneksi($conn);
            return false;
        }

    }



}
?>