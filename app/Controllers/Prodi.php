<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdiModel;
class Prodi extends BaseController
{
    protected $pm;
    private  $menu;
    public function __construct()
    {
        $this->pm = new ProdiModel();

        $this->menu = [
                'beranda' => [
                    'title' => 'Beranda',
                    'link' => base_url(),
                    'icon' => 'fa-solid fa-house',
                    'aktif'=>'',
                ],
                'prodi' => [
                    'title' => 'Program Studi',
                    'link' => base_url() . '/prodi',
                    'icon' => 'fa-solid fa-building-columns',
                    'aktif'=>'active',
                ],
                'semester' => [
                    'title' => 'Semester',
                    'link' => base_url() . '/semester',
                    'icon' => 'fa-solid fa-list',
                    'aktif'=>'',
                ],
                'mahasiswa' => [
                    'title' => 'Mahasiswa',
                    'link' => base_url() . '/mahasiswa',
                    'icon' => 'fa-solid fa-users',
                    'aktif'=>'',
                ],
            ];
    }
    public function index()
    { 

    $breadcrumb = '<div class="col-sm-6">
                        <h1 class="m-0">Prodi</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="' . base_url() . '">Beranda</a</li>
                        <li class="breadcrumb-item active">Prodi</li>
                        </ol>
                    </div>';
    $data['menu'] = $this->menu;
    $data['breadcrumb'] = $breadcrumb;
    $data['title_card'] = "Data Prodi";  
    $query =  $this->pm->find();
    $data['data_prodi'] = $query;
    return view('prodi/content', $data);
    }

    public function tambah()
    {
        $breadcrumb = '<div class="col-sm-6">
                        <h1 class="m-0">Prodi</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="' . base_url() . '">Beranda</a</li>
                        <li class="breadcrumb-item"><a href="' . base_url() . '">Prodi</a</li>
                        <li class="breadcrumb-item active">Tambah Prodi</li>
                        </ol>
                    </div>';
        $data['menu'] = $this->menu;
        $data['breadcrumb'] = $breadcrumb;
        $data['title_card'] = 'Tambah Prodi';
        $data['action'] = base_url() . '/prodi/simpan';
        return view('prodi/input', $data);
    }
}
 