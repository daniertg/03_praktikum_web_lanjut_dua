@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Profile</h1>
@stop

@section('content')
<div class="d-flex">
    <div class="col-12 col-md-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Mahasiswa
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Maulidio Farhan Rizkullah</b></h2>
                      <p class="text-muted text-sm"><b>About: </b> Saya menyukai bidang teknologi dan IT</p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Kembang Permai Blok BB 05, Bondowoso</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 62 852 8958 9391</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="{{ asset('img/Dio.jpg') }}" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            {{-- carousel --}}
            <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="https://placehold.it/900x500/39CCCC/ffffff&text=I+Love+Bootstrap" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="https://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="https://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                      <i class="fas fa-chevron-left"></i>
                    </span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                      <i class="fas fa-chevron-right"></i>
                    </span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
</div>
<div>
  {{-- card --}}

            <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="{{ asset('img/foto.jpg') }}" alt="Dist Photo 2">
                  <div class="card-img-overlay d-flex flex-column justify-content-center">
                    <h5 class="card-title text-white mt-5 pt-2">Hobby</h5>
                    <p class="card-text pb-2 pt-1 text-white">
                      Saya memiliki hobby fotografi menggunakan smartphone
                    </p>
                  </div>
                </div>
              </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop