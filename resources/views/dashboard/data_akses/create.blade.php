@extends('dashboard.master')

@section('title', 'Tambah Akses')
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
                        <h1 class="m-0">Akses</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                        <a href="{{ route('akses.index') }}" type="button" class="btn btn-warning mb-3">Kembali</a>
                        <form action="{{ route('akses.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- <label for="">Petugas</label>
                            <input type="text" class="form-control" name="nama" value="{{ Auth::user()->nama }}" readonly>
                            <input type="hidden" class="form-control" name="id_user" value="{{ Auth::user()->id }}"> --}}

                            <label for="">Menu</label>
                            <input type="text" class="form-control" name="menu">

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
