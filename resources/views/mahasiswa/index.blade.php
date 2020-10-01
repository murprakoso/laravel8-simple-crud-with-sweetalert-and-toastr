@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-3">Mahasiswa</h1>

    <div class="justify-content-end">
        <a href="/mahasiswa/create" class="btn btn-info">Tambah data</a>
    </div>

    <div class="row">
        <div class="col-md-6">
            <ul class="list-group mt-2">
                @if(count($mahasiswa) > 0)
                @foreach($mahasiswa as $row)
                <li class="list-group-item"><a href="/mahasiswa/detail/{{$row->id}}">{{$row->nama}}</a>
                    {{-- delete --}}
                    <form action="mahasiswa/{{ $row->id }}" method="POST" style="display: inline;"
                        id="data-{{ $row->id }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" onclick="deleteRow({{$row->id}});" class=" ml-1 float-right btn btn-sm
                            btn-danger">Delete</button>
                    </form>
                    {{-- edit --}}
                    <a href="/mahasiswa/{{$row->id}}/edit" class="btn btn-sm btn-warning float-right">Edit</a>
                </li>
                @endforeach
                @else
                <div class="alert alert-warning">
                    Data empty.
                </div>
                @endif

            </ul>


            {{-- <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav> --}}
        </div>
    </div>
    {{ $mahasiswa->links() }}

</div>
@endsection