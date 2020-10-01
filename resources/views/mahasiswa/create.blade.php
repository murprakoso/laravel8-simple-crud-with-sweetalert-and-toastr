@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mt-3">Add Mahasiswa</h3>

    <div class="row">
        <div class="col-md-6">

            <div class="card card-body">
                <form action="{{ url('mahasiswa') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" name="nim" id="nim">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> --}}
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" id="jurusan">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>

</div>
@endsection