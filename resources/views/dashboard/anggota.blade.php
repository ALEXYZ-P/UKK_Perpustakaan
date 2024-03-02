@extends('dashboard.master')

@section('title', 'Data Anggota')
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
                            <a href="{{ route('user.create') }}" class="btn btn-warning mb-3" type="button">Daftar
                                Pegawai</a>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Nama</th>
                                        <th>Fitur</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($data as $i)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $i->username }} </td>
                                            <td>{{ $i->email }} </td>
                                            <td>{{ $i->nama }} </td>
                                            <td>
                                                <a href="{{ route('user.edit', $i->id) }}" class="btn btn-warning mb-2"
                                                    type="button">Edit</a>
                                                <!-- Tombol Delete -->
                                                <form method="POST" action="{{ route('user.destroy', $i->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger mb-2">Delete</button>
                                                </form>
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
