@extends('landingPage.master')

@section('title','Profile')
@section('content')

    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('landingPage.index')}}" rel="nofollow">Home</a>
                    <span></span> Profile
                    {{-- <span></span> Account --}}
                </div>
            </div>
        </div>
        <section class="pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="dashboard-menu">
                                    <ul class="nav flex-column" role="tablist">
                                        {{-- <li class="nav-item">
                                            <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false"><i class="fi-rs-settings-sliders mr-10"></i>Dashboard</a>
                                        </li> --}}
                                        <li class="nav-item">
                                            <a class="nav-link active" id="account-detail-tab" data-bs-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i class="fi-rs-user mr-10"></i>Account details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="fi-rs-shopping-bag mr-10"></i>Peminjaman</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="track-orders-tab" data-bs-toggle="tab" href="#track-orders" role="tab" aria-controls="track-orders" aria-selected="false"><i class="fi-rs-shopping-cart-check mr-10"></i>History Peminjaman</a>
                                        </li>
                                        {{-- <li class="nav-item">
                                            <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="true"><i class="fi-rs-marker mr-10"></i>My Address</a>
                                        </li> --}}

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('logout')}}"><i class="fi-rs-sign-out mr-10"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content dashboard-content">
                                    {{-- <div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">Hello {{ $user->username}} </h5>
                                            </div>
                                            <div class="card-body">
                                                <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">edit your password and account details.</a></p>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">Your Orders</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>Judul</th>
                                                                <th>Status</th>
                                                                <th>Jumlah</th>
                                                                <th>Tanggal pengajuan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php $no = 1; @endphp
                                                            {{ $pinjam = false}}

                                                                @foreach ($peminjaman as $p)
                                                                    @if ($p->id_user == Auth::user()->id)
                                                                        {{-- @if ($p->id_buku == $buku->id) --}}
                                                                            @php
                                                                                $pinjam = true;
                                                                            @endphp
                                                                            <tr>
                                                                                <td>{{ $no++ }}</td>
                                                                                <td>{{ $p->buku->judul }}</td>
                                                                                <td>{{ $p->status }}</td>
                                                                                <td>{{ $p->jumlah_peminjaman }}</td>
                                                                                <td>{{ $p->tgl_pengajuan }}</td>
                                                                            </tr>
                                                                        {{-- @break --}}

                                                                        <!-- Menghentikan perulangan setelah menemukan satu tombol "Like" -->
                                                                    {{-- @endif --}}
                                                                @endif
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="tab-pane fade" id="track-orders" role="tabpanel" aria-labelledby="track-orders-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">History</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>Judul</th>
                                                                <th>Status</th>
                                                                <th>Jumlah</th>
                                                                <th>Tanggal pengajuan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php $no = 1; @endphp
                                                            {{ $pinjam = false}}

                                                                @foreach ($history as $p)
                                                                    @if ($p->id_user == Auth::user()->id)
                                                                        {{-- @if ($p->id_buku == $buku->id) --}}
                                                                            @php
                                                                                $pinjam = true;
                                                                            @endphp
                                                                            <tr>
                                                                                <td>{{ $no++ }}</td>
                                                                                <td>{{ $p->buku->judul }}</td>
                                                                                <td>{{ $p->status }}</td>
                                                                                <td>{{ $p->jumlah_peminjaman }}</td>
                                                                                <td>{{ $p->tgl_pengajuan }}</td>
                                                                            </tr>
                                                                        {{-- @break --}}

                                                                        <!-- Menghentikan perulangan setelah menemukan satu tombol "Like" -->
                                                                    {{-- @endif --}}
                                                                @endif
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card mb-3 mb-lg-0">
                                                    <div class="card-header">
                                                        <h5 class="mb-0">Billing Address</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <address>3522 Interstate<br> 75 Business Spur,<br> Sault Ste. <br>Marie, MI 49783</address>
                                                        <p>New York</p>
                                                        <a href="#" class="btn-small">Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="mb-0">Shipping Address</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <address>4299 Express Lane<br>
                                                            Sarasota, <br>FL 34249 USA <br>Phone: 1.941.227.4444</address>
                                                        <p>Sarasota</p>
                                                        <a href="#" class="btn-small">Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="tab-pane fade active show" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Account Details</h5>
                                            </div>
                                            <div class="card-body">
                                                {{-- <p>Already have an account? <a href="{{ route('login')}}">Log in instead!</a></p> --}}
                                                <form action="{{ route('update_profile', $user->id) }}" method="POST" name="enq">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="row">
                                                        {{-- <div class="form-group col-md-6">
                                                            <label>First Name <span class="required">*</span></label>
                                                            <input class="form-control square" name="name" type="text" value="{{ $user->nama }}" >
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Last Name <span class="required">*</span></label>
                                                            <input class="form-control square" name="phone" value="{{ $user->nama }}">
                                                        </div> --}}
                                                        <div class="form-group col-md-6">
                                                            <label>NIK <span class="required">*</span></label>
                                                            <input class="form-control square" name="nik" type="text" value="{{ $user->nik }}" maxlength="16">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Nama <span class="required">*</span></label>
                                                            <input class="form-control square" name="nama" type="text" value="{{ $user->nama }}">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Username <span class="required">*</span></label>
                                                            <input class="form-control square" name="username" type="text" value="{{ $user->username }}">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Email <span class="required">*</span></label>
                                                            <input class="form-control square" name="email" type="email" value="{{ $user->email }}">
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label>Nomor Handphone <span class="required">*</span></label>
                                                            <input class="form-control square" name="nohp" type="text" value="{{ $user->nohp }}" maxlength="15">
                                                        </div>

                                                        <input class="form-control square" name="password" type="hidden" value="{{ $user->password }}" >

                                                        {{-- <div class="form-group col-md-12">
                                                            <label>Jenis Kelamin <span class="required">*</span></label>
                                                            <input required="" class="form-control square" name="phone" value="{{ $user->jenis_kelamin }}">
                                                        </div> --}}
                                                        <div class="form-group col-md-12">
                                                            <label>Alamat <span class="required">*</span></label>
                                                            <input class="form-control square" name="alamat" type="text" value="{{ $user->alamat }}">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Tnaggal Lahir <span class="required">*</span></label>
                                                            <input class="form-control square" name="tgl_lahir" type="date" value="{{ $user->tgl_lahir }}">
                                                        </div>

                                                        <div class="col-md-12">
                                                            <button type="submit" class="btn btn-fill-out submit" name="submit" value="Submit">Save</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @endsection
