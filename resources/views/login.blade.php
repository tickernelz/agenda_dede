@extends('layouts.simple')

@section('content')
    <!-- Page Content -->
    <div class="bg-body-dark bg-pattern" style="background-image: {{asset('media/various/bg-pattern-inverse.png')}};">
        <div class="row mx-0 justify-content-center">
            <div class="hero-static col-lg-6 col-xl-4">
                <div class="content content-full overflow-hidden">
                    <!-- Header -->
                    <div class="py-30 text-center">
                        <a class="link-effect font-w700" href="{{route('login')}}">
                            <i class="si si-book-open"></i>
                            <span class="font-size-xl text-primary-dark">AGENDA</span><span class="font-size-xl">KEGIATAN</span>
                        </a>
                        {{--                      <h1 class="h4 font-w700 mt-30 mb-10">Silahkan Login</h1>--}}
                        {{--                      <h2 class="h5 font-w400 text-muted mb-0">It’s a great day today!</h2>--}}
                    </div>
                    <!-- END Header -->

                    <!-- Sign In Form -->
                    <!-- jQuery Validation functionality is initialized with .js-validation-signin class in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js -->
                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    <form action="{{ route('post-login') }}" method="post">
                        <div class="block block-themed block-rounded block-shadow">
                            @csrf
                            <div class="block-header bg-gd-dusk">
                                <h3 class="block-title">Please Sign In</h3>
                                <div class="block-options">
                                </div>
                            </div>
                            <div class="block-content">
                                @if(session('errors'))
                                    <div class="alert alert-danger alert-dismissable" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <h3 class="alert-heading font-size-h5 font-w700 mb-5">Error</h3>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (Session::has('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                @if (Session::has('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ Session::get('error') }}
                                    </div>
                                @endif
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username"
                                               name="username">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password"
                                               name="password">
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-sm-6 d-sm-flex align-items-center push">
                                        <div class="custom-control custom-checkbox mr-auto ml-0 mb-0">
                                            <input type="checkbox" class="custom-control-input" id="remember"
                                                   name="remember">
                                            <label class="custom-control-label" for="remember">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-sm-right push">
                                        <button type="submit" class="btn btn-alt-primary">
                                            <i class="si si-login mr-10"></i> Sign In
                                        </button>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="block-content bg-body-light">--}}
{{--                                <div class="form-group text-center">--}}
{{--                                    <a class="link-effect text-muted mr-10 mb-5 d-inline-block"--}}
{{--                                       href="op_auth_signup3.html">--}}
{{--                                        <i class="fa fa-plus mr-5"></i> Create Account--}}
{{--                                    </a>--}}
{{--                                    <a class="link-effect text-muted mr-10 mb-5 d-inline-block"--}}
{{--                                       href="op_auth_reminder3.html">--}}
{{--                                        <i class="fa fa-warning mr-5"></i> Forgot Password--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </form>
                    <!-- END Sign In Form -->
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
