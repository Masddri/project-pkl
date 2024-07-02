@extends('layouts.include.frontend.admin')
@section('content')
{{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if(session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{ session('success') }}
            </div>
            @endif
            <div class="card-border-secondary">
                <div class="card-header">Data Kartu
                    <a href="{{route('kartu.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                </div>
                <div class="card-boby">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kartu</th>
                                    <th>Nomor</th>
                                    <th>Total</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            @php $no = 1; @endphp
                            <tbody>
                                @foreach ($kartu as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->nama_kartu}}</td>
                                    <td>{{$item->nomor}}</td>
                                    <td>{{$item->total}}</td>
                                    <td>
                                        <form action="{{route('kartu.destroy', $item->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <a href="{{route('kartu.edit', $item->id)}}"
                                                class="btn btn-sm btn-success">Edit
                                            </a>
                                            <a href="{{route('kartu.show', $item->id)}}"
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
</div> --}}
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Kartu</h4>
<div class="card">
    <h5 class="card-header">Table Kartu</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Dompet</th>
            <th>Nomor</th>
            <th>Total</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($kartu as $item)
            <tr>
                <td>{{$loop->index + 1}}</td>
                <td>{{$item->nama_kartu}}</td>
                <td>{{$item->nomor}}</td>
                <td>{{$item->total}}</td>
                <td>
                    <form action="{{route('kartu.destroy', $item->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a href="{{route('kartu.edit', $item->id)}}"
                            class="btn btn-sm btn-success">Edit
                        </a>
                        <a href="{{route('kartu.show', $item->id)}}"
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
@endsection
