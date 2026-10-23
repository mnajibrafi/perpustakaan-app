<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $books = Book::with(['author', 'category'])->get();

        if ($request->wantsJson()) {
            return response()->json($books);
        }

        return view('books.index', compact('books'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'isbn' => 'required|string|unique:books,isbn',
            'description' => 'nullable|string',
            'publication_year' => 'required|integer',
            'author_id' => 'required|exists:authors,id',
            'category_id' => 'required|exists:categories,id',
        ]);

        $book = Book::create($validated);
        return response()->json($book->load(['author', 'category']), 201);
    }

    public function show(Book $book)
    {
        return response()->json($book->load(['author', 'category']));
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'sometimes|string|max:255',
            'isbn' => 'sometimes|string|unique:books,isbn,' . $book->id,
            'description' => 'nullable|string',
            'publication_year' => 'sometimes|integer',
            'author_id' => 'sometimes|exists:authors,id',
            'category_id' => 'sometimes|exists:categories,id',
        ]);

        $book->update($validated);
        return response()->json($book->load(['author', 'category']));
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return response()->json(['message' => 'Book deleted successfully']);
    }
}