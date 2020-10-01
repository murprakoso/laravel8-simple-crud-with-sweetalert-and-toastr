@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mt-3">Edit Mahasiswa</h3>

    <div class="row">
        <div class="col-md-6">

            <div class="card card-body">
                <form action="{{ url('mahasiswa/'.$mahasiswa->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="{{$mahasiswa->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" name="nim" id="nim" value="{{$mahasiswa->nim}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp"
                            value="{{$mahasiswa->email}}">
                        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> --}}
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" id="jurusan"
                            value="{{$mahasiswa->jurusan}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>

</div>
@endsection