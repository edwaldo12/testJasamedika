@extends('layouts.index')

@section('content')
    <section class="content-header">
        <h1>
            Pasien
        </h1>
        <ol class="breadcrumb">
            <li class="active">Pasien</li>
        </ol>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h4 class="box-title">Data Pasien</h4>
                        </div>
                        {{-- @if (Auth::user()->tipe_pengguna == 'Admin' || Auth::user()->tipe_pengguna == 'Super_Admin') --}}
                        <div class="box-header">
                            <button type="button" class="btn btn-success">
                                <a href="{{ route('pasien.create') }}" style="color:white">Tambah</a>
                            </button>
                        </div>
                        {{-- @endif --}}
                        <div class="box-body">
                            <table id="table_pasien" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID Pasien</th>
                                        <th>Nama Pasien</th>
                                        <th>Alamat</th>
                                        <th>No Hp</th>
                                        <th>Rt</th>
                                        <th>Rw</th>
                                        <th>Nama Kelurahan</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($patient as $patient)
                                        <tr>
                                            <td> {{ $patient->id }}</td>
                                            <td>{{ $patient->nama_pasien }}</td>
                                            <td>{{ $patient->alamat }}</td>
                                            <td>{{ $patient->no_hp }}</td>
                                            <td>{{ $patient->rt }}</td>
                                            <td>{{ $patient->rw }}</td>
                                            <td>{{ $patient->kelurahan->nama_kelurahan }}</td>
                                            <td>{{ $patient->tanggal_lahir }}</td>
                                            <td>{{ $patient->jenis_kelamin }}</td>
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
                                                                href="{{ route('pasien.edit', ['pasien' => $patient->id]) }}">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" onclick="this.nextElementSibling.submit()">
                                                                Hapus
                                                            </a>
                                                            <form
                                                                action="{{ route('pasien.destroy', ['pasien' => $patient->id]) }}"
                                                                class="d-inline"
                                                                onsubmit="return confirm('Ingin menghapus pasien?')"
                                                                method="POST">
                                                                @csrf
                                                                @method('delete')
                                                            </form>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ route('pasien.show', ['pasien' => $patient->id]) }}">Print</a>
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
        $("#table_pasien").DataTable()
    </script>

    @if (session('store_pasien') === true)
        <script>
            alert('Pasien telah ditambah...')
        </script>
    @endif
    @if (session('update_pasien') === true)
        <script>
            alert('Pasien telah diubah...')
        </script>
    @endif
    @if (session('destroy_pasien') === true)
        <script>
            alert('Pasien telah dihapus...')
        </script>
    @endif
@endpush
