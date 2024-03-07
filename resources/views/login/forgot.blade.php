@extends('login.master')

@section('title', 'Forget')

@section('content')

    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="index.html"><img src="{{ asset('evara') }}/assets/imgs/theme/alibraryLogo.png"
                        alt="logo" height="170px"></a>
                    <p><a href="#" class="h1"><b>{{ env('APP_NAME') }}</b></a></p>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
                    <form action="{{route('reset')}}" method="post">
                        @csrf
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="password" minlength="8">
                            <label for="">Re-Type Password</label>
                            <input type="password" name="retypepassword" placeholder="retype password" class="form-control" id="">

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block mt-2">Request new password</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                    <p class="mt-3 mb-1">
                        <a href="{{route('login')}}">Login</a>
                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->
    @endsection
