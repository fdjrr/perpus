<?php

class Buku extends Controller
{
    public function index()
    {
        // Configturation Page
        $data["title"] = "Daftar Buku";
        $data["active"] = str_replace(" ", "-", strtolower($data["title"]));
        $data["bg-body"] = "bg-light";

        $data["buku"] = $this->model("Buku_model")->getData();
        $this->view("templates/header", $data);
        $this->view("templates/components/navbar", $data);
        $this->view("buku/index", $data);
        $this->view("templates/footer");
    }

    public function tambah()
    {
        if (isset($_POST)) {
            $nama = filter_input(INPUT_POST, "nama", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            echo json_encode($this->model("Buku_model")->tambahBuku($nama));
        }
    }

    public function delete()
    {
        if (isset($_POST)) {
            $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
            echo json_encode($this->model("Buku_model")->hapusBuku($id));
        }
    }

    public function get()
    {
        if (isset($_POST["id"])) {
            $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
            echo json_encode($this->model("Buku_model")->getDataById($id));
        }
    }

    public function update()
    {
        if (isset($_POST["id"])) {
            $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
            $nama = filter_input(INPUT_POST, "nama", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            echo json_encode($this->model("Buku_model")->updateBuku($id, $nama));
        }
    }
}