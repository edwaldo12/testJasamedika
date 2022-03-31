@extends('layouts.index')

@section('content')
    <section class="content-header">
        <h1>
            Kelurahan
        </h1>
        <ol class="breadcrumb">
            {{-- <li><a href="#"><i class="fa fa-dashboard"></i> Kelurahan</a></li> --}}
            <li class="active">Kelurahan</li>
        </ol>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h4 class="box-title">Data Kelurahan</h4>
                        </div>
                        {{-- @if (Auth::user()->tipe_pengguna == 'Admin' || Auth::user()->tipe_pengguna == 'Super_Admin') --}}
                        <div class="box-header">
                            <button type="button" class="btn btn-success">
                                <a href="{{ route('kelurahan.create') }}" style="color:white">Tambah</a>
                            </button>
                        </div>
                        {{-- @endif --}}
                        <div class="box-body">
                            <table id="table_kelurahan" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nama Kelurahan</th>
                                        <th>Nama Kecamatan</th>
                                        <th>Nama Kota</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kelurahan as $kelurahan)
                                        <tr>
                                            <td>{{ $kelurahan->nama_kelurahan }}</td>
                                            <td>{{ $kelurahan->nama_kecamatan }}</td>
                                            <td>{{ $kelurahan->nama_kota }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-default dropdown-toggle"
                                                        data-toggle="dropdown">
                                                        <span class="fa fa-cog"></span>
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a
                                                                href="{{ route('kelurahan.edit', ['kelurahan' => $kelurahan->id]) }}">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" onclick="this.nextElementSibling.submit()">
                                                                Hapus
                                                            </a>
                                                            <form
                                                                action="{{ route('kelurahan.destroy', ['kelurahan' => $kelurahan->id]) }}"
                                                                class="d-inline"
                                                                onsubmit="return confirm('Ingin menghapus kelurahan?')"
                                                                method="POST">
                                                                @csrf
                                                                @method('delete')
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $("#table_kelurahan").DataTable()
    </script>

    @if (session('store_kelurahan') === true)
        <script>
            alert('Kelurahan telah ditambah...')
        </script>
    @endif
    @if (session('update_kelurahan') === true)
        <script>
            alert('Kelurahan telah diubah...')
        </script>
    @endif
    @if (session('destroy_kelurahan') === true)
        <script>
            alert('Kelurahan telah dihapus...')
        </script>
    @endif
@endpush
