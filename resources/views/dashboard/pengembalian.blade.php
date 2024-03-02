@extends('dashboard.master')

@section('title', 'Data Pengembalian')
@section('content')
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">@yield('title')</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Data</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">@yield('title')</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="card-body">

                            <a href="{{ route('peminjaman.create') }}" class="btn btn-warning mb-3" type="button">Pinjam Buku</a>

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>username</th>
                                        <th>Judul Buku</th>
                                        <th>Status</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>tanggal Pengembalian</th>
                                        <th>jumlah Pinjam</th>
                                        <th>Fitur</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($data as $i)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $i->user->username }}</td>
                                            <td>{{ $i->buku->judul }} </td>
                                            <td>{{ $i->status }}</td>
                                            <td>{{ $i->tgl_pengajuan }} </td>
                                            <td>{{ $i->tgl_peminjaman }} </td>
                                            <td>{{ $i->tgl_pengembalian }} </td>
                                            <td>{{ $i->jumlah_peminjaman }} </td>
                                            <td>
                                                <a href="{{ route('pengembalian.edit', $i->id) }}" class="btn btn-warning mb-2"
                                                    type="button">Setujui</a>
                                                <!-- Tombol Delete -->
                                                {{-- <form method="POST" action="{{ route('peminjaman.destroy', $i->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger mb-2">Delete</button>
                                                </form> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
@endsection
