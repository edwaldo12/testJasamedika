@extends('layouts.index')

@section('content')
    <section class="content-header">
        <h1>
            Pasien
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Pasien</a></li>
            <li class="active">Tambah</li>
        </ol>
    </section>

    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h4 class="box-title">Tambah Pasien</h4>
                        </div>
                        <form action="{{ route('pasien.store') }}" method="POST"
                            onsubmit="return confirm('Pastikan semua data sudah benar?')">
                            @csrf
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nama_pasien">Nama Pasien</label>
                                            <input type="text" id="nama_pasien" name="nama_pasien"
                                                class="form-control {{ $errors->has('nama_pasien') ? 'is-invalid' : '' }}"
                                                placeholder="Masukkan Nama Pasien" value="{{ old('nama_pasien') }}">
                                            <small class="text-danger">{{ $errors->first('nama_pasien') }}</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea name="alamat" id="alamat" cols="30" rows="5"
                                                class="form-control {{ $errors->has('alamat') ? 'is-invalid' : '' }}"
                                                placeholder="Masukkan Alamat" value="{{ old('alamat') }}"></textarea>
                                            <small class="text-danger">{{ $errors->first('alamat') }}</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="rw">Rw</label>
                                            <input type="text" id="rw" name="rw"
                                                class="form-control {{ $errors->has('rw') ? 'is-invalid' : '' }}"
                                                placeholder="Masukkan Rw" value="{{ old('rw') }}">
                                            <small class="text-danger">{{ $errors->first('rw') }}</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="kelurahan_id">Nama Kelurahan</label>
                                            <select name="kelurahan_id" id="kelurahan_id" class="form-control">
                                                @foreach ($kelurahan as $kelurahan)
                                                    <option value="{{ $kelurahan->id }}">
                                                        {{ $kelurahan->nama_kelurahan }}</option>
                                                @endforeach
                                            </select>
                                            <small class="text-danger">{{ $errors->first('kelurahan_id') }}</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="no_hp">No Hp</label>
                                            <input type="number" id="no_hp" name="no_hp"
                                                class="form-control {{ $errors->has('no_hp') ? 'is-invalid' : '' }}"
                                                placeholder="Masukkan No HP" value="{{ old('no_hp') }}">
                                            <small class="text-danger">{{ $errors->first('no_hp') }}</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="rt">RT</label>
                                            <input type="text" id="rt" name="rt"
                                                class="form-control {{ $errors->has('rt') ? 'is-invalid' : '' }}"
                                                placeholder="Masukkan Rt" value="{{ old('rt') }}">
                                            <small class="text-danger">{{ $errors->first('rt') }}</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                            <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                                                class="form-control {{ $errors->has('tanggal_lahir') ? 'is-invalid' : '' }}"
                                                placeholder="Masukkan Tanggal Lahir" value="{{ old('tanggal_lahir') }}">
                                            <small class="text-danger">{{ $errors->first('tanggal_lahir') }}</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                            <small class="text-danger">{{ $errors->first('jenis_kelamin') }}</small>
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
