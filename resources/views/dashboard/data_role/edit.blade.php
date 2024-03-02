@extends('dashboard.master')

@section('title', 'Edit Role')
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
                        <h1 class="m-0">Role</h1>
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
                        <a href="{{ route('role.index') }}" type="button" class="btn btn-warning mb-3">Kembali</a>
                        <form action="{{ route('role.update', $data->id)}}" method="POST">
                            @csrf
                            @method('PUT')

                            <label for="">User</label>
                            <select name="id_user" id="user" class="form-control">
                                <option value="">Username</option>
                                @foreach ($user as $i)
                                    <option value="{{ $i->id == $data->id_user  ? $data->id_user : $i->id}}"
                                    {{ $i->id == $data->id_user  ? 'selected' : '' }} >
                                    {{ $i->id == $data->id_user  ? $i->username : $i->username  }} </option>
                                @endforeach
                            </select>

                            <label for="">Akses</label>
                            <select name="id_akses" id="akses" class="form-control">
                                <option value="">Akses</option>
                                @foreach ($akses as $i)
                                <option value="{{ $i->id == $data->id_akses  ? $data->id_akses : $i->id}}"
                                    {{ $i->id == $data->id_akses  ? 'selected' : '' }} >
                                    {{ $i->id == $data->id_akses  ? $i->menu : $i->menu  }} </option>
                                @endforeach
                            </select>

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
