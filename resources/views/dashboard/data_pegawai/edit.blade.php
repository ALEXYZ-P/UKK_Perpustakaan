@extends('dashboard.master')

@section('title', 'Edit Pegawai')
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
                        <a href="{{ route('user.index') }}" type="button" class="btn btn-warning mb-3">Kembali</a>
                        <form action="{{ route('user.update', $data->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="username" value="{{ $data->username }}">

                            <label for="">NIK</label>
                            <input type="text" class="form-control" name="nik" id="" value="{{ $data->nik }}" minlength="15" minlength="16">

                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama" id="" value="{{ $data->nama }}">

                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" id="" value="{{ $data->email }}">

                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password" id="" value="{{ $data->password }}" minlength="8">

                            <label for="">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="" value="{{ $data->alamat }}">

                            <label for="">No Telepon</label>
                            <input type="text" class="form-control" name="nohp" id="" value="{{ $data->nohp }}" minlength="9" maxlength="15">

                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir" id="" value="{{ $data->tgl_lahir }}">

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
