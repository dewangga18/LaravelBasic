@extends('layout.main')

@section('title', 'Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-7">
                <h1 class="mt-3 mb-3">Daftar Mahasiswa</h1>
                @if (session('status'))
                    <div class="alert alert-dark fade show alert-dismissible text-dark">
                        <strong>{{ session('status') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <a href="/msiswa/create" class="btn btn-outline-dark mb-2">Tambah data</a>
                @foreach($student as $student)
                <ul class="list-group mb-1">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $student->nama }}
                    <a href="/msiswa/{{$student->id}}" class="btn btn-outline-danger rounded-pill"><strong>></strong></a>
                </li>
                </ul>
                @endforeach
            </div>
        </div>
    </div>
@endsection