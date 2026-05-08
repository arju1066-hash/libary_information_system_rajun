<?php

namespace App\Controllers;
use App\Models\BookModel;

class BookController extends BaseController
{
    public function index(): string
    {
        $bookModel = new BookModel();
        $data['books'] = $bookModel->findAll(); // semua yang ada atau tidak dihapus
        $data['title'] = 'Daftar Buku';

        return view('books/index', $data);
    }
    
    public function create()
    {
        $data['title'] = 'Tambah Buku';
        return view('books/create', $data);
    }

    public function store()
    {
        $title = $this->request->getPost('judul');
        $code = $this->request->getPost('kode');
        $isbn = $this->request->getPost('isbn');
        $author = $this->request->getPost('penulis');
        $publisher = $this->request->getPost('penerbit');
        $published_year = $this->request->getPost('tahun_terbit');
        $description = $this->request->getPost('keterangan');

        $bookModel = new BookModel();
        $isSaved = $bookModel->save([
            'code_book' => $code,
            'isbn_book' => $isbn,
            'title_book' => $title,
            'author_book' => $author,
            'publisher_book' => $publisher,
            'published_year' => $published_year,
            'description_book' => $description,
        ]);

        if($isSaved) {
            session()->setFlashdata('success', 'Buku berhasil disimpan!');
        } else {
            session()->setFlashdata('error', 'Gagal menyimpan buku. Silakan coba lagi.');
        }

        return redirect()->to('/list/book');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Buku';
        // script php untuk load data dari database
        $bookModel = new BookModel();
        $data['detail_buku'] = $bookModel->find($id);
        $data['id'] = $id;
        // end of script
        return view('books/edit', $data);
    }

    public function update()
    {
        // dd($_POST);
        // script php untuk memperbarui data di database
        $id = $this->request->getPost('id');
        $title = $this->request->getPost('judul');
        $code = $this->request->getPost('kode');
        $isbn = $this->request->getPost('isbn');
        $author = $this->request->getPost('penulis');
        $publisher = $this->request->getPost('penerbit');
        $published_year = $this->request->getPost('tahun_terbit');
        $description = $this->request->getPost('keterangan');

        $bookModel = new BookModel();
        $detailBook = [
            'code_book' => $code,
            'isbn_book' => $isbn,
            'title_book' => $title,
            'author_book' => $author,
            'publisher_book' => $publisher,
            'published_year' => $published_year,
            'description_book' => $description,
        ];
        $isUpdated = $bookModel->update($id, $detailBook);

        if($isUpdated) {
            session()->setFlashdata('success', 'Buku berhasil diperbarui!');
        } else {
            session()->setFlashdata('error', 'Gagal memperbarui buku. Silakan coba lagi.');
        }

        // end of script
        return redirect()->to('/list/books');
    }

    public function delete($id)
    {
        $bookModel = new BookModel();
        $isDeleted = $bookModel->delete($id);

        if($isDeleted) {
            session()->setFlashdata('success', 'Buku berhasil dihapus!');
        } else {
            session()->setFlashdata('error', 'Gagal menghapus buku. Silakan coba lagi.');
        }

        return redirect()->to('/list/books');
    }
}