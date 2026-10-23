@extends('layouts.app')

@section('content')
    <h2>Daftar Penulis</h2>
    <table class="table table-striped table-bordered bg-white shadow-sm mt-3">
        <thead class="table-dark">
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Bio</th>
            </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
                <tr>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->email }}</td>
                    <td>{{ $author->bio }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection