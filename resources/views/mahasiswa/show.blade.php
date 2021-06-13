@extends('layout.main')

@section('title', 'Detail')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1 class="mt-5 mb-3">Detail Mahasiswa</h1>
                <div class="card bg-dark text-light">
                <div class="card-body">
                    <h5 class="card-title">{{ $student->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $student->nrp }}</h6>
                    <p class="card-text mb-1">{{ $student->email }}</p>
                    <p class="card-text">{{ $student->jurusan }}</p>
                    <a href="{{$student->id}}/edit" class="btn btn-primary">Edit</a>
                    <form action="{{$student->id}}" method="post" class=" mx-2 d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="\msiswa" class="btn btn-outline-light card-link">Kembali</a>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    