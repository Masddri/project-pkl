@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Data Kartu
                    <a href="{{route('pemasukan.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('pemasukan.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                                <div class="mb-2">
                                    <label for="">jumlah pemasukan</label>
                                    <input type="number" class="form-control @error('jumlah_pemasukan') is-invalid @enderror"
                                        name="jumlah_pemasukan">
                                    @error('jumlah_pemasukan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}}</strong>
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
                                    <label for="">Deskripsi</label>
                                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror"
                                        name="deskripsi">
                                    @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="">Id Kartu</label>
                                    <input type="number" class="form-control @error('id_kartu') is-invalid @enderror"
                                        name="id_kartu">
                                    @error('id_kartu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                        <div class="mb-2">
                            <button class="btn btn-sm btn-success" type="submit">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
