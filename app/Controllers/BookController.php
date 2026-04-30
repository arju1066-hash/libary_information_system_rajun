<?php

namespace App\Controllers;

class BookController extends BaseController
{
    public function index(): string
    {
        return view('books/index');
    }
    
    public function create()
    {
        return view('books/create');
    }

    public function store()
    {
        return redirect()->to('/list/books');
    }

    public function edit($id)
    {
        // script php untuk load data dari database
        $data = [
            'id'   => $id,
            'title' => 'Judul Buku '.$id,
            'author' => 'Penulis Buku '.$id,
            'publisher' => 'Penerbit Buku '.$id,
            'year' => '2023',
            'stock' => '10'
        ];
        // end of script
        return view('books/edit', $data);
    }

    public function update($id)
    {
        // script php untuk memperbarui data di database
        // end of script
        return redirect()->to('/list/books');
    }
}