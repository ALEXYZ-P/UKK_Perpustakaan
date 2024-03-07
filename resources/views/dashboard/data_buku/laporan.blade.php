@extends('dashboard.master')

@section('title', 'Laporan Barang')

@section('content')
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
                            <li class="breadcrumb-item"><a href="#">Data Master</a></li>
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
                        <form class="form-inline mb-1" action="{{ route('cetak') }}" method="post">
                            @csrf
                            <label for="" class="mr-2">Pencarian</label>
                            <input type="text" name="bulan_tahun" class="form-control mr-2" id="datepicker">
                            <button class="btn btn-primary">Cetak</button>
                        </form>


                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Petugas</th>
                                    <th>Stok</th>
                                    <th>Foto</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($buku as $i)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $i->judul}}</td>
                                    <td>{{ $i->user->nama }}</td>
                                    <td>{{ $i->stok }}</td>
                                    <td> <img src="{{ asset('storage/images/'.$i->sampul) }}" alt="photo" height="100"> </td>

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
@endsection
<!-- Content Wrapper. Contains page content -->


<!-- /.content-wrapper -->
