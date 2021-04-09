<?php

class Ternak_model
{
    private $table = 'hewan_ternak';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getDataTernak()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function getTernakById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataTernak($data)
    {
        $query = "INSERT INTO hewan_ternak (nama_ternak, jumlah, modal) VALUES ( :nama_ternak, :jumlah, :modal)";

        $this->db->query($query);
        $this->db->bind('nama_ternak', $data['nama']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('modal', $data['modal']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusTernakById($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id=:id";

        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataTernak($data)
    {
        $query = "UPDATE hewan_ternak set nama_ternak = :nama_ternak, jumlah = :jumlah, modal = :modal WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama_ternak', $data['nama']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('modal', $data['modal']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
