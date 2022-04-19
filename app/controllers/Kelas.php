<?php

class Kelas extends Controller
{

    public function index()
    {
        // Configturation Page
        $data["title"] = "Daftar Kelas";
        $data["active"] = str_replace(" ", "-", strtolower($data["title"]));
        $data["bg-body"] = "bg-light";

        $data["tingkat_kelas"] = array("X", "XI", "XII");
        $data["jurusan"] = array(
            "Perawatan Sosial",
            "Teknik Komputer Jaringan",
            "Rekayasa Perangkat Lunak",
            "Multimedia",
            "Desain Komunikasi Visual",
            "Animasi"
        );
        $this->view("templates/header", $data);
        $this->view("templates/components/navbar", $data);
        $this->view("kelas/index", $data);
        $this->view("templates/footer");
    }

    public function tambah()
    {
        if (isset($_POST)) {
        }
    }
}