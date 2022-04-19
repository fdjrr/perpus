<?php

class Buku_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getData()
    {
        $query = "SELECT * FROM `books` WHERE `books`.`deleted_at` IS NULL ORDER BY `books`.`name` ASC;";
        $this->db->query($query);
        $this->db->execute();
        return array("data" =>  $this->db->resultSet());
    }

    public function getDataById($id)
    {
        $query = "SELECT * FROM `books` WHERE `books`.`id` = :id AND `books`.`deleted_at` IS NULL;";
        $this->db->query($query);
        $this->db->bind(":id", $id);
        $this->db->execute();
        if ($this->db->rowCount() > 0) {
            return $this->db->single();
        } else {
            return $this->db->rowCount();
        }
    }

    public function cekNamaBuku($nama)
    {
        $query = "SELECT * FROM `books` WHERE `name` LIKE :nama";
        $this->db->query($query);
        $this->db->bind(":nama", "%$nama%");
        $this->db->execute();
        if ($this->db->rowCount() > 0) {
            return $this->db->resultSet();
        } else {
            return $this->db->rowCount();
        }
    }

    public function tambahBuku($nama)
    {
        if ($this->cekNamaBuku($nama) == 0) {
            $query = "INSERT INTO `books` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES (NULL, :nama, current_timestamp(), current_timestamp(), NULL);";
            $this->db->query($query);
            $this->db->bind(":nama", $nama);
            $this->db->execute();
            return $this->db->rowCount();
        } else {
            return 0;
        }
    }

    public function hapusBuku($id)
    {
        $query = "UPDATE `books` SET `deleted_at` = current_timestamp() WHERE `books`.`id` = :id;";
        $this->db->query($query);
        $this->db->bind(":id", $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateBuku($id, $nama)
    {
        $query = "UPDATE `books` SET `name` = :nama WHERE `books`.`id` = :id;";
        $this->db->query($query);
        $this->db->bind(":id", $id);
        $this->db->bind(":nama", $nama);
        $this->db->execute();
        return $this->db->rowCount();
    }
}