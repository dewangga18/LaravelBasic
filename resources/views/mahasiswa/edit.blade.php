@extends('layout.main')

@section('title', 'Form Ubah Data')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3 mb-3">Form Ubah Data Mahasiswa</h1>
                <form method="post" action="/msiswa/{{$student->id}}/p">
                    @method('put')
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width : 4.5rem;" id="basic-addon1" for="nama">Nama</span>
                        <input type="text" value="{{ $student->nama }}" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukan Nama Lengkap" >
                        @error('nama')<div class="invalid-feedback" >{{ $message }}</div>@enderror
                        </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width : 4.5rem;" id="basic-addon1" for="nrp">NRP</span>
                        <input type="text" type="text" value="{{ $student->nrp }}" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp" placeholder="Masukan Nomor NRP">
                        @error('nrp')<div class="invalid-feedback" >{{ $message }}</div>@enderror
                        </div>
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width : 4.5rem;" id="basic-addon1" for="email">Email</span>
                        <input type="text" type="text" value="{{ $student->email }}" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukan Email">
                        @error('email')<div class="invalid-feedback" >{{ $message }}</div>@enderror
                        </div>
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width : 4.5rem;" id="basic-addon1" for="jurusan">Jurusan</span>
                        <input type="text" type="text" value="{{ $student->jurusan }}" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" placeholder="Masukan Jurusan">
                        @error('jurusan')<div class="invalid-feedback" >{{ $message }}</div>@enderror
                        </div>

                    <button type="submit" class="btn btn-primary">Ubah Data</button>
                        
                </form>
            </div>
        </div>
    </div>
@endsection
    