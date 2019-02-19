<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>SMKN 13 BANDUNG</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('mdb/css/bootstrap.css') }}">  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{ asset('mdb/css/mdb.min.css') }}">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('mdb/css/style.css') }}">
  <style>
    #loading {
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background: url(../../img/pre.gif) 50% no-repeat #1aeab6;
    }
  </style>
</head>
<body>
  
  <div id="loading"></div>

 <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="#!">
        <strong>SMKN 13 BANDUNG</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="https:/instagram.com/smkn13bdg" class="nav-link text-center"
              target="_blank">
              <i class="fa fa-file-photo-o"></i> <b>Galeri</b>
            </a>
          </li>
          <li class="nav-item">
            <a href="/login" class="nav-link text-center"
              target="_blank">
              <i class="fa fa-user"></i> <b>Data Siswa</b>
            </a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          
          <!-- <li class="nav-item">
                   <button class="btn blue btn-rounded" data-toggle="modal" data-target="#elegantModalForm"><i class="fa fa-sign-in"></i> LOGIN</button>
                  </li>
                   --> 
          <li class="nav-item">
             <a class="btn btn-default btn-rounded border" href="{{ url('/login') }}">Login</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>
  <!-- Navbar -->
<!-- 
  Modal
<div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    Content
    <div class="modal-content form-elegant">
      Header
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>LOGIN</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      Body
      <div class="modal-body mx-4">
        Body
        <form action="{{ route('login') }}" method="post" role="form">
          <div class="md-form mb-5">
            <input type="text" id="Form-text1" class="form-control validate" value="{{ old('nomor_induk') }}">
            <label data-error="wrong" data-success="right" for="Form-text1">NIS/NIP</label>
             @if ($errors->has('nomor_induk'))
                <span class="help-block">
                    <strong>{{ $errors->first('nomor_induk') }}</strong>
                </span>
            @endif
          </div>

          <div class="md-form pb-3">
            <input type="password" id="Form-pass1" class="form-control validate">
            <label data-error="wrong" data-success="right" for="Form-pass1">PASSWORD</label>
            @if ($errors->has('password'))
              <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
          </div>

          <div class="text-center mb-3">
            <input type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-1a" value="LOGIN">
          </div>
        </form>
      </div>
    </div>
    /.Content
  </div>
</div>
Modal -->

<div class="text-center">
  
</div>

  <!-- Body -->
  <section>
    <div class="konten text-center white-text py-5" id="banner">
      <div class="container py-5">
        <div class="row">
          <div class="col-md-6 py-4">
            <img id="svg" src="{{ asset('img/pendopo.svg') }}" >
          </div>
          <div class="col-md-6 py-4">
            <h1 style="font-weight: bold;">SMKN 13 BANDUNG</h1>
            <br>
            <h5 style="font-weight: bold">Sekolah yang lumayan rame Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio omnis soluta quibusdam deleniti sequi sed, minima aliquam impedit, minus, eos iusto magnam nulla. Iste in assumenda deserunt, odio cumque maxime.</h5>
          </div>
        </div>
      </div>
    </div>
    <div class="konten text-center white py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 wow slideInLeft">
            <img id="svg" src="{{ asset('img/ak.svg') }}" >
          </div>
          <div class="col-md-6 py-5 wow fadeIn">
            <h1 class="black-text">ANALISIS KIMIA</h1>
            <h5 class="black-text">Jurusan yang suka goyang gelas Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepyuri nulla eveniet veniam tempora. Quae itaque eos qui vero reprehenderit. Blanditiis ullam quibusdam enim praesentium officia fuga, saepe repellendus animi iure!</h5>
          </div>
        </div>
      </div>
    </div>
    <div class="konten text-center orange accent-3 py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 wow slideInLeft">
            <img id="svg" class="py-4" src="{{ asset('img/tkj.svg') }}" >
          </div>
          <div class="col-md-6 py-5 wow fadeIn">
            <h1 class="white-text">TEKNIK KOMPUTER JARINGAN</h1>
            <h5 class="white-text">Jurusan yang paling santai Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepyuri nulla eveniet veniam tempora. Quae itaque eos qui vero reprehenderit. Blanditiis ullam quibusdam enim praesentium officia fuga, saepe repellendus animi iure!</h5>
          </div>
        </div>
      </div>
    </div>
    <div class="konten text-center py-5 blue-grey lighten-4"">
      <div class="container">
        <div class="row">
          <div class="col-md-6 wow slideInLeft">
            <img class="py-4" id="svg" src="{{ asset('img/rpl.svg') }}" >
          </div>
          <div class="col-md-6 py-5 wow fadeIn">
            <h1 class="black-text">REKAYASA PERANGKAT LUNAK</h1>
            <h5 class="black-text">Jurusan yang orangnya autis Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepyuri nulla eveniet veniam tempora. Quae itaque eos qui vero reprehenderit. Blanditiis ullam quibusdam enim praesentium officia fuga, saepe repellendus animi iure!</h5>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end body -->

  <!-- kontak -->
  <section class="kontak">
    <div class="container my-5">
      <div class="row text-center">
        <div class="col-md-12">
          <h3 class="wow fadeIn">Hubungi Kami</h3>
          <hr class="wow slideInLeft" width="240px" style="border: 1px solid black;">
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-3 wow fadeIn">
          <i class="fa fa-phone ic-big"></i>
          <h4 class="mt-2">Telp / Fax</h4>
          <h5>+62227318960</h5>
        </div>
        <div class="col-md-3 wow fadeIn">
          <i class="fa fa-map-marker ic-big"></i>
          <h4 class="mt-2">Alamat</h4>
          <h5><a href="https://goo.gl/maps/AMdRT9n46vH2" target="_blank">Jl. Soekarno-Hatta Km.10, Bandung 40286 Jawa Barat, Indonesia.</a></h5>
        </div>
        <div class="col-md-3 wow fadeIn">
          <i class="fa fa-envelope ic-big"></i>
          <h4 class="mt-2">Email</h4>
          <h5><a href="mailto:smkn13bdg@gmail.com" target="_blank">smkn13bdg@gmail.com</a></h5>
        </div>
        <div class="col-md-3 wow fadeIn">
          <i class="fa fa-instagram ic-big"></i>
          <h4 class="mt-2">Instagram</h4>
          <h5><a href="https:/instagram.com/smkn13bdg" target="_blank">smkn13bdg</a></h5>
        </div>
      </div>
    </div>
  </section>
  <!-- end kontak -->

  <!--Footer-->
  <footer class="page-footer text-center bg-primary wow fadeIn">
    <div class="container p-5">
    <div class="row">
      <div class="col-md-4 wow fadeIn">
        <img src="{{ asset('img/default.png') }}" width="80">
        <br><br>
        <h4 class="white-text">Ino Soprano S.pd M.M.pd</h4>
        <h5 class=" white-text">Kepala Sekolah SMKN 13 BANDUNG</h5>
      </div>
      <div class="col-md-4 wow fadeIn">
        <img src="{{ asset('img/smk13.png') }}" width="80">
        <br><br>
        <h4 class="white-text">SMKN 13 BANDUNG</h4>
        <h5 class="white-text">"Bisa, Bisa, Bisa, Mantap !"</h5>
      </div>
      <div class="col-md-4 wow fadeIn">
        <img src="{{ asset('img/disdik.PNG') }}" width="70">
        <br><br>
        <h4 class="white-text">Dinas Pendidikan</h4>
        <h5 class="white-text">Provinsi Jawa Barat</h5>
      </div>
    </div>
  </div>
    <!--Copyright-->
    <div class="footer-copyright py-3 white black-text">
      © 2019 Copyright  :
      <a href="#!" target="_blank" class="black-text"> THE GOWORK TEAM </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->
      
  <!-- scriptS -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{ asset('mdb/js/jquery-3.3.1.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('mdb/js/popper.min.js') }}"></script>
  <!-- Bootstrap core Javascript -->
  <script type="text/javascript" src="{{ asset('mdb/js/bootstrap.min.js') }}"></script>
  <!-- MDB core Javascript -->
  <script type="text/javascript" src="{{ asset('mdb/js/mdb.min.js') }}"></script>
  <script>
    $(window).on('load',function() { 
      setInterval( function() { 
        $('#loading').fadeOut(); 
      }, 3000);
    });
    //inisialisasi animasi
    new WOW().init();
  </script>

</body>
</html>