<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $faker = \Faker\Factory::create();
        $data = [
            'judul' => 'HOME',
            'nama' => 'Arif'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'judul' => 'About'
        ];
        //echo digunakan untuk memanggil view lebih dari 1
        echo view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'judul' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Samberan, Kanor',
                    'kota' => 'Bojonegoro'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Samberan, Kanor',
                    'kota' => 'Bojonegoro'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
