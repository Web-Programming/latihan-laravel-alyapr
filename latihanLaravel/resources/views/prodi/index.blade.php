@extends('layouts.master')

@section('title', 'Data Prodi')
@section('content')
    <div class="container">
        <h1>Data List Prodi</h1>
        <a href="{{ route('prodi.create') }}" class="btn btn-success">
            Tambah Prodi
        </a>
        <table class="table table-stripped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allmahasiswaprodi as $item)
                <tr>
                    <td>{{ $item->npm }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->nama_prodi }}</td>
                    <td>
                        <a href="{{ url('/prodi/'.$item->id) }}" class="btn btn-warning">
                            Detail
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection