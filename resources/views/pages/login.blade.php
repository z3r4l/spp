@extends('layouts.default')

@section('content')
    @if (Auth::guard('siswa')->check())
        Hi {{ Auth::guard('siswa')->user()->nama }}
    @endif
    <section class="d-flex justify-content-center align-items-center login-page" style="background-color: #65C18C;">
        <div class="card rounded-3 text-black container mb-0" style="max-width: 860px; background-color:#ffff !important;">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="card-body p-md-3 mx-md-4">

                        <div class="text-center">
                            <img src="{{ asset('assets/img/logo.png') }}" style="width: 100px;" alt="logo">
                            <h4 class="mt-1 mb-5 pb-1" style="font-size: 25px;">Aplikasi Pembayaran SPP SD AL-Muhajirin</h4>
                        </div>

                        <form method="post" class="login100-form validate-form" action="{{ route('proses_login') }}">
                            @csrf
                            <p>Silahkan Masukan Akun Anda</p>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="username">Username</label>
                                <input type="text" id="username" class="form-control"
                                    placeholder="Username" name="username" required />
                                <p class="mt-1 text-info" style="font-size: 12px;">Note: <em>Untuk siswa masukan username dengan NISN!</em></p>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" id="password" class="form-control"
                                    placeholder="Password" name="password" required />
                            </div>

                            <div class="text-center pt-1 mb-5 pb-1">
                                <button class="btn  btn-block mb-3" style="background-color: #65C18C" type="submit">Masuk</button>
                            </div>

                        </form>

                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <img src="{{ asset('assets/img/gambaranaksd.jpeg') }}" width="400" height="400" alt="">
                    {{-- <div style="background-image: url({{ asset('assets/img/gambaranaksd.jpeg') }}); background-repeat: no-repeat; display:flex; justify-content: center; align-items: center;"></div> --}}
                </div>
            </div>
        </div>
    </section>
@stop
