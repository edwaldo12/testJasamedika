@extends('layouts.index')

@section('content')
    <section class="content-header">
        <h1>
            Kelurahan
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Kelurahan</a></li>
            <li class="active">Tambah</li>
        </ol>
    </section>

    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h4 class="box-title">Tambah Kelurahan</h4>
                        </div>
                        <form action="{{ route('kelurahan.store') }}" method="POST"
                            onsubmit="return confirm('Pastikan semua data sudah benar?')">
                            @csrf
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nama_kelurahan">Nama Kelurahan</label>
                                            <input type="text" id="nama_kelurahan" name="nama_kelurahan"
                                                class="form-control {{ $errors->has('nama_kelurahan') ? 'is-invalid' : '' }}"
                                                placeholder="Masukkan Nama Kelurahan" value="{{ old('nama_kelurahan') }}">
                                            <small class="text-danger">{{ $errors->first('nama_kelurahan') }}</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_kecamatan">Nama Kecamatan</label>
                                            <input type="text" id="nama_kecamatan" name="nama_kecamatan"
                                                class="form-control {{ $errors->has('nama_kecamatan') ? 'is-invalid' : '' }}"
                                                placeholder="Masukkan Nama Kecamatan" value="{{ old('nama_kecamatan') }}">
                                            <small class="text-danger">{{ $errors->first('nama_kecamatan') }}</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nama_kota">Nama Kota</label>
                                            <input type="text" id="nama_kota" name="nama_kota"
                                                class="form-control {{ $errors->has('nama_kota') ? 'is-invalid' : '' }}"
                                                placeholder="Masukkan Nama Kota" value="{{ old('nama_kota') }}">
                                            <small class="text-danger">{{ $errors->first('nama_kota') }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
