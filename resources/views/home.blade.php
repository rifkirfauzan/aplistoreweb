@extends('layouts.app')
@section('title','Dashboard Admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> --}}

                @if (auth()->user()->level==1)
                <div class="jumbotron">
                    <h1 class="display-6">Halo, Selamat datang admin {{ Auth::user()->name }}!</h1>
                    <p class="lead">Ini adalah halaman admin untuk mengelola postingan. disini admin bisa melakukan posting penjualan baru, edit penjualan dan hapus postingan penjualan</p>
                    <hr class="my-4">
                    <p>Untuk melakukan tambah postingan baru, silahkan klik tombol dibawah ini.</p>
                    <a class="btn btn-primary btn-lg" href="{{route('post.create')}}" role="button">Buat Postingan!</a>
                  </div>
                  @elseif (auth()->user()->level==2)
                  <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
