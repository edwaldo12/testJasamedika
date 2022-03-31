@extends('layouts.index')

@section('content')
    <section class="content-header">
        <h1>
            Kelurahan
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Kelurahan</a></li>
            <li class="active">Edit</li>
        </ol>
    </section>

    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h4 class="box-title">Edit Kelurahan</h4>
                        </div>
                        <form action="{{ route('kelurahan.update', ['kelurahan' => $kelurahan->id]) }}" method="POST"
                            onsubmit="return confirm('Pastikan semua data sudah benar?')">
                            @csrf
                            @method('PUT')
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nama_kelurahan">Nama Kelurahan</label>
                                            <input type="text" id="nama_kelurahan" name="nama_kelurahan"
                                                class="form-control {{ $errors->has('nama_kelurahan') ? ' is-invalid' : '' }}"
                                                placeholder="Masukkan Nama Kelurahan"
                                                value="{{ old('nama_kelurahan') ? old('nama_kelurahan') : $kelurahan->nama_kelurahan }}">
                                            <small class="text-danger">{{ $errors->first('nama_kelurahan') }}</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_kecamatan">Nama Kecamatan</label>
                                            <input type="text" id="nama_kecamatan" name="nama_kecamatan"
                                                class="form-control {{ $errors->has('nama_kecamatan') ? ' is-invalid' : '' }}"
                                                placeholder="Masukkan Nama Kecamatan"
                                                value="{{ old('nama_kecamatan') ? old('nama_kecamatan') : $kelurahan->nama_kecamatan }}">
                                            <small class="text-danger">{{ $errors->first('nama_kecamatan') }}</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nama_kota">Nama Kota</label>
                                            <input type="text" id="nama_kota" name="nama_kota"
                                                class="form-control {{ $errors->has('nama_kota') ? ' is-invalid' : '' }}"
                                                placeholder="Masukkan nama_kota"
                                                value="{{ old('nama_kota') ? old('nama_kota') : $kelurahan->nama_kota }}"
                                                min="1">
                                            <small class="text-danger">{{ $errors->first('nama_kota') }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <a href="{{ route('kelurahan.index') }}">
                                    <button class="btn btn-default" type="button">Kembali</button>
                                </a>
                                <button class="btn btn-warning" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
