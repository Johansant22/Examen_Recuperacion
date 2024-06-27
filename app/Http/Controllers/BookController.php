<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
class BookController extends Controller
{
    public function index(){
        $libros = Book::orderBy('id', 'asc')->paginate();
        return view('libros.index', compact('libros'));
    }

    public function create(){
        return view('libros.create');
    }

    public function store(Request $request)
    {
        
        Book::create($request->all());

        return redirect()->route('libros.index')
            ->with('Exito', 'Libro creado correctamente.');
    }

    public function show($id)
    {
        $book = Book::find($id);
        return view('libros.show', compact('book'));
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('libros.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'codigo' => 'required',
            'titulo' => 'required',
            'ISBN' => 'required',
            'editorial' => 'required',
            'paginas' => 'required',
        ]);

        $book->update($request->all());

        return redirect()->route('libros.index')
            ->with('Genial', 'Libro actualizado correctamente.');
    }

    public function destroy($id){
        $book = Book::find($id);
        if(!$book){
            return response()->json(['message'=> 'No se encontró'], 404);
        }
        $book->delete();
        return redirect()->route('libros.index');
    }


}
