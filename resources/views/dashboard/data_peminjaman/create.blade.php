@extends('dashboard.master')

@section('title', 'Peminjaman')
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
                        <h1 class="m-0">Pegawai</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Pegawai</li>
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
                        <a href="{{ route('peminjaman.index') }}" type="button" class="btn btn-warning mb-3">Kembali</a>
                        <form action="{{ route('peminjaman.store') }}" method="POST">
                            @csrf
                            <label for="">Username</label>
                            <select name="id_user" id="id_user" class="form-control ">
                                <option value="">Username</option>
                                @foreach ($user as $i)
                                    <option value="{{ $i->id }}">{{ $i->username }}</option>
                                @endforeach
                            </select>
                            <label for="">Buku</label>
                            <select name="id_buku" id="id_buku" class="form-control">
                                <option value="">Judul Buku</option>
                                @foreach ($buku as $i)
                                    <option value="{{ $i->id }}">{{ $i->judul }}</option>
                                @endforeach
                            </select>
                            <label for="">Jumlah Peminjaman</label>
                            <input type="text" name="jumlah_peminjaman" class="form-control" placeholder="Jumlah Peminjaman">
                            <button class="btn btn-success mt-3" type="submit">Simpan</button>
                        </form>
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
