<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HelmetsModel;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController {
    public function index() {
        return view('admin/dashboard');
    }

    public function daftarHelm() {
        $helmModel = new HelmetsModel();
        $data['helms'] = $helmModel->findAll();
        return view('admin/daftar-helm', $data);
    }

    public function daftarHelmTambah() {
        return view('admin/daftar-helm-tambah');
    }

    public function createHelm() {
        $data = $this->request->getPost();
        $file = $this->request->getFile('gambar');

        if(!$file->hasMoved()) {
            $path = $file->store('images');
            $data['gambar'] = $path;
        }

        $helmModel = new HelmetsModel();

        if($helmModel->insert($data,false)) {
            return redirect()->to('admin/daftar-helm')->with('berhasil','data berhasil disimpan!');
        } else {
            return redirect()->to('admin/daftar-helm')->with('gagal','data gagal disimpan!');
        }
    }

    public function daftarHelmEdit($id) {
        $helmModel = new HelmetsModel();
        $data['helm'] = $helmModel->find($id);
        
        if ($data['helm']) {
            return view('admin/daftar-helm-edit', $data);
        }
        return redirect()->to('admin/daftar-helm')->with('gagal', 'Data HELM tidak ditemukan.');
    }

    public function updateHelm($id) {
        $helmModel = new HelmetsModel();
        $data = $this->request->getPost();
        
        // Handle image upload if new image is provided
        $file = $this->request->getFile('gambar');
        if ($file->isValid() && !$file->hasMoved()) {
            $path = $file->store('images');
            $data['gambar'] = $path;
        }

        if ($helmModel->update($id, $data)) {
            return redirect()->to('admin/daftar-helm')->with('berhasil', 'Data HELM berhasil diupdate!');
        }
        return redirect()->to('admin/daftar-helm')->with('gagal', 'Data HELM gagal diupdate!');
    }

    public function hapusHelm($id) {
        $helmModel = new HelmetsModel();
        $helm = $helmModel->find($id);

        if ($helmModel) {
            $helmModel->delete($id);
            return redirect()->to('/admin/daftar-helm')->with('berhasil', 'Data HELM berhasil dihapus.');
        }
        return redirect()->to('/admin/daftar-helm')->with('gagal', 'Data HELM tidak ditemukan.');
    }

    public function transaksi() {
        return view('admin/transaksi');
    }

    public function transaksiUbahStatus() {
        return view('admin/transaksi-ubah-status');
    }

    public function transaksiHapus() {
        return view('admin/transaksi-hapus');
    }

    public function pelanggan() {
        return view('admin/pelanggan');
    }

    public function pelangganHapus() {
        return view('admin/pelanggan-hapus');
    }
}