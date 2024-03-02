@extends('dashboard.master')

@section('title', 'Tambah Buku')
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
                        <a href="{{ route('buku.index') }}" type="button" class="btn btn-warning mb-3">Kembali</a>
                        <form action="{{ route('buku.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label for="">Petugas</label>
                            <input type="text" class="form-control" name="nama" value="{{ Auth::user()->nama }}" readonly>
                            <input type="hidden" class="form-control" name="id_user" value="{{ Auth::user()->id }}">

                            <label for="">Sampul</label>
                            <input type="file" class="form-control" name="sampul">

                            <label for="">Judul</label>
                            <input type="text" class="form-control" name="judul" id="">

                            <label for="">Penulis</label>
                            <input type="text" class="form-control" name="penulis" id="">

                            <label for="">Penerbit</label>
                            <input type="text" class="form-control" name="penerbit" id="">

                            <label for="">Tahun Terbit</label>
                            <input type="text" class="form-control" name="tahun_terbit" id="">

                            <label for="">Sinopsis</label>
                            <input type="text" class="form-control" name="sinopsis" id="">

                            <label for="">Kategori</label>
                            <select name="id_kategori" id="id_kategori" class="form-control">
                                <option value="">Kategori</option>
                                @foreach ($kategori as $i)
                                    <option value="{{ $i->id }}">{{ $i->nama }}</option>
                                @endforeach
                            </select>

                            <label for="">Stok</label>
                            <input type="text" class="form-control" name="stok" id="">

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
