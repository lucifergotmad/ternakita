<?php

class Ternak extends Controller
{
    public function index()
    {
        $data['judul'] = 'Data Ternak';
        $data['ternak'] = $this->model('Ternak_model')->getDataTernak();
        $this->view('templates/header', $data);
        $this->view('ternak/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Ternak';
        $data['ternak'] = $this->model('Ternak_model')->getTernakById($id);
        $this->view('templates/header', $data);
        $this->view('ternak/details', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Ternak_model')->tambahDataTernak($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'Ditambahkan', "success");
            header('Location: ' . BASEURL . '/ternak');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Ditambahkan', "danger");
            header('Location: ' . BASEURL . '/ternak');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Ternak_model')->hapusTernakById($id) > 0) {
            Flasher::setFlash('Berhasil', 'Dihapus', "success");
            header('Location: ' . BASEURL . '/ternak');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Dihapus', "danger");
            header('Location: ' . BASEURL . '/ternak');
            exit;
        }
    }

    public function ubah()
    {
        if ($this->model('Ternak_model')->ubahDataTernak($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'Diubah', "success");
            header('Location: ' . BASEURL . '/ternak');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Diubah', "danger");
            header('Location: ' . BASEURL . '/ternak');
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model('Ternak_model')->getTernakById($_POST['id']));
    }
}
