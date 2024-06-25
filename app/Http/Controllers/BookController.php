<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    // public function create()
    // {
    //     return view('Book.create');
    // }

    public function listar()
    {
        $books = Book::orderBy('id')->get();
        return view('Book.listar', compact('books'));

    }

    public function create()
    {
        return view('Book.create');
    }

    public function store(Request $request)
    {
        $books = new Book();
        $books->codigo = $request->codigo;
        $books->titulo = $request->titulo;
        $books->isbn = $request->isbn;
        $books->editorial = $request->editorial;
        $books->paginas = $request->paginas;
        $books->save();

        return redirect()->route('book.listar');
    }

    public function show ($id)
    {
        $books=Book::find($id);
        return view('Book.show', compact('paq'));
    }

    public function destroy ( Book $books)
    {
        $books->delete();
        return redirect()->route('book.listar');
    }

    public function edit(Book $books)
    {
        return view('Book.edit', compact('books'));
    }

    public function update(Request $request, Book $books)
    {
        $books->codigo = $request->codigo;
        $books->titulo = $request->titulo;
        $books->isbn = $request->isbn;
        $books->editorial = $request->editorial;
        $books->paginas = $request->paginas;
        $books->save();

        return redirect()->route('book.listar');
    }
}
