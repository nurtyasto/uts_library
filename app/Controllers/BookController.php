<?php

// Dibuat oleh : Nurtyasto Hadi

namespace App\Controllers;

use App\Models\BookModel;

class BookController extends BaseController
{
    protected $bookModel;

    public function __construct()
    {
        $this->bookModel = new BookModel();
    }

    public function index()
    {
        $data['books'] = $this->bookModel->findAll();

        return view('books/index', $data);
    }

    public function create()
    {
        return view('books/create');
    }

    public function store()
    {
        $this->bookModel->save([
            'title'     => $this->request->getPost('title'),
            'author'    => $this->request->getPost('author'),
            'publisher' => $this->request->getPost('publisher'),
            'year'      => $this->request->getPost('year'),
        ]);

        return redirect()->to('/books');
    }

    public function edit($id)
    {
        $data['book'] = $this->bookModel->find($id);

        return view('books/edit', $data);
    }

    public function update($id)
    {
        $this->bookModel->update($id, [
            'title'     => $this->request->getPost('title'),
            'author'    => $this->request->getPost('author'),
            'publisher' => $this->request->getPost('publisher'),
            'year'      => $this->request->getPost('year'),
        ]);

        return redirect()->to('/books');
    }

    public function delete($id)
    {
        $this->bookModel->delete($id);

        return redirect()->to('/books');
    }
}