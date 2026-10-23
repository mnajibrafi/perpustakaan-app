@extends('layouts.app')

@section('content')
    <h2>Daftar Kategori</h2>
    <table class="table table-striped table-bordered bg-white shadow-sm mt-3">
        <thead class="table-dark">
            <tr>
                <th>Nama Kategori</th>
                <th>Slug</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td><code>{{ $category->slug }}</code></td>
                    <td>{{ $category->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection