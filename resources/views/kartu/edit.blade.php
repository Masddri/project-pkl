@extends('layouts.include.frontend.admin')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>
{{-- <div class="container"> --}}
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Kartu
                    <a href="{{ route('kartu.index') }}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('kartu.update', $kartu->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                                <div class="mb-2">
                                    <label for="nama_kartu">Nama Kartu</label>
                                    <input type="text" class="form-control @error('nama_kartu') is-invalid @enderror"
                                        name="nama_kartu" value="{{ old('nama_kartu', $kartu->nama_kartu) }}">
                                    @error('nama_kartu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                {{-- <div class="mb-2">
                                    <label for="">Jenis Kartu</label>
                                    <select name="jenis_kartu" id="">
                                        <option value="Kartu Debit">Kartu Debit</option>
                                        <option value="Kartu Kredit">Kartu Kredit</option>
                                    </select>
                                    @error('jenis_kartu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}}</strong>
                                    </span>
                                    @enderror
                                </div> --}}
                                <div class="mb-2">
                                    <label for="isbn">Nomor</label>
                                    <input type="number" class="form-control @error('nomor') is-invalid @enderror"
                                        name="nomor" value="{{ old('nomor', $kartu->nomor) }}">
                                    @error('nomor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="isbn">Total</label>
                                    <input type="number" class="form-control @error('total') is-invalid @enderror"
                                        name="total" value="{{ old('nomor', $kartu->nomor) }}">
                                    @error('total')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        <div class="mb-2">
                            <button class="btn btn-sm btn-success" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{{-- </div> --}}
</div>
@endsection
