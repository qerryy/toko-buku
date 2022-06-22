<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::latest()->get();

        return view('books.index', [
            'books' => $books,
        ]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required',
            'publisher' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'description' => 'nullable',
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')->with('success', 'Berhasil Menambahkan Buku');
    }

    public function show(Book $book)
    {
        return view('books.show', [
            'book' => $book,
        ]);
    }

    public function edit(Book $book)
    {
        return view('books.edit', [
            'book' => $book,
        ]);
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required',
            'publisher' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'description' => 'nullable',
        ]);

        $book->update($request->all());
        return redirect()->route('books.index')->with('success', 'Berhasil Mengubah data Buku');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Berhasil Menghapus Buku');
    }
}
