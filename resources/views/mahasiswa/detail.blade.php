@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mt-3">Detail Mahasiswa</h3>

    <div class="row">
        <div class="col-md-6">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$mahasiswa->nama}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$mahasiswa->nim}}</h6>
                    <p class="card-text">{{$mahasiswa->email}}</p>
                    <p class="card-text">{{$mahasiswa->jurusan}}</p>
                    <a href="/mahasiswa" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
