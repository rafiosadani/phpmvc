<?php

class Mahasiswa_model
{
    // private $mhs = [
    //     [
    //         "nama" => "Rafio Sadani",
    //         "nrp" => "2040201070",
    //         "email" => "rafiosadany1111@gmail.com",
    //         "jurusan" => "Teknologi Rekayasa Otomasi"
    //     ],
    //     [
    //         "nama" => "Joel Credo Benedic Muste Sconda",
    //         "nrp" => "2040201071",
    //         "email" => "joelcredo@gmail.com",
    //         "jurusan" => "Teknologi Rekayasa Otomasi"
    //     ],
    //     [
    //         "nama" => "Bahtiar Rifa'i",
    //         "nrp" => "2040201069",
    //         "email" => "bahtiarrifai@gmail.com",
    //         "jurusan" => "Rekayasa Perangkat Lunak"
    //     ]
    // ];
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllMahasiswa()
    {
        $this->db->query("SELECT * FROM mahasiswa");
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query("SELECT * FROM mahasiswa WHERE id = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa VALUES('', :nama, :nrp, :email, :jurusan)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editDataMahasiswa($data)
    {
        $query = "UPDATE mahasiswa SET nama = :nama, nrp = :nrp, email = :email, jurusan = :jurusan WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataMahasiswa($data)
    {
        $keyword = $data['keyword'];
        $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
