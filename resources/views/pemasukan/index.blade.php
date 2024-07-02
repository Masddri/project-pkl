@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if(session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{ session('success') }}
            </div>
            @endif
            <div class="card-border-secondary">
                <div class="card-header">Data Pemasukan
                    <a href="{{route('pemasukan.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                </div>
                <div class="card-boby">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jumlah Pemasukan</th>
                                    <th>Deskripsi</th>
                                    <th>Id Kartu</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            @php $no = 1; @endphp
                            <tbody>
                                @foreach ($pemasukan as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->jumlah_pemasukan}}</td>
                                    <td>{{$item->deskripsi}}</td>
                                    <td>{{$item->id_kartu}}</td>
                                    <td>
                                        <form action="{{route('pemasukan.destroy', $item->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <a href="{{route('pemasukan.edit', $item->id)}}"
                                                class="btn btn-sm btn-success">Edit
                                            </a>
                                            <a href="{{route('pemasukan.show', $item->id)}}"
                                                class="btn btn-sm btn-warning">Show
                                            </a>
                                            <button class="btn btn-sm btn-danger" type="submit"
                                                onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
