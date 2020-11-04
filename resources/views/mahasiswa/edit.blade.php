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
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                            id="nama" value="{{ !empty(old('nama')) ? old('nama') : $mahasiswa->nama  }}">
                        @error('nama')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" id="nim"
                            value="{{ !empty(old('nim')) ? old('nim') : $mahasiswa->nim  }}">
                        @error('nim')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            id="email" aria-describedby="emailHelp"
                            value="{{ !empty(old('email')) ? old('email') : $mahasiswa->email  }}">
                        @error('email')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan"
                            id="jurusan" value="{{ !empty(old('jurusan')) ? old('jurusan') : $mahasiswa->jurusan  }}">
                        @error('jurusan')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>

</div>
@endsection
