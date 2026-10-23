@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Daftar Buku</h2>
    </div>

    <table class="table table-striped table-bordered bg-white shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>Judul</th>
                <th>ISBN</th>
                <th>Tahun</th>
                <th>Penulis</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->isbn }}</td>
                    <td>{{ $book->publication_year }}</td>
                    <td>{{ $book->author->name }}</td>
                    <td><span class="badge bg-primary">{{ $book->category->name }}</span></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection