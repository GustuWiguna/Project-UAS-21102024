<!DOCTYPE html>
<html lang="en">
<head>
  
<link rel="stylesheet" href="css/style.css">
<nav class="navbar navbar-expand-lg bg-warning">
<img
          src="img/kisspng-arduino-ide-logo-computer-icons-font-5bf6bc9b12f892.5123237715428967950777.png"
          height="80px"
          loading="lazy"
        />
  <div class="container-fluid">
  
    <h3><a class="navbar-brand" href="{{url('/')}}">HOME</a></h3>
    <h3><a class="navbar-brand" aria-current="page" href="{{url('code')}}">CODE</a></h3>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">

        
        <h3><a class="nav-link active" aria-current="page" href="{{url('komponenTBL')}}">TABLE KOMPONEN
        <img src="img/Arduino_uno_prev_ui.png" height="20px" />
          </a></h3>
        <li class="nav-item">

        
        
          </li>
        
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="text-bg-secondary p-3">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project UAS</title>
    

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
  
</head>
  
<body>
@include('layouts.baru')
                <mb-9><center><h1>PROJECT UAS WEB PROGRAMING</h></center></mb-9>
    <center><h3> pembuatan crud dan database menggunakan laravel dengan project sensor and tranduser</h3></center>
    <center><img src="img/stiki_prev_ui.png" height="590px" /></center>
    <center><img src="img/alat 1.jpeg" height="390px" alt=" foto alat pengaman kartu" /></center>
    <h3> cara kerja Alat pengaman kartu atau Dokument
alat pengaman kartu ini memiliki konsep kerja sama seperti FlowChart yang
sudah dibuat dimana ketika Light Blocking mendapatkan input dan tap modul di
sentuh dangan setuhan kejut maka lampu akan berubah hijau dari lampu yang
awalnya mati dan bersamaan dengan itu alarm pun sudah diaktifkan dan ketika
kartu atau document itu di cabut alarm akan berbunyi dan lampu berubah menjadi
warna merah
konsep ini bisa di gunakan untuk mengaman kan document yang masih
berbenduk kertas dan juga kartu sehingga bisa mengurangi tingkat kehilangan
terhadap barang tersebut.</h3>
    <div class="container text-center"></div>
   
    <div class ="row">
        @stack('before-content')
        @yield('content')
        @stack('after-content')
    </div>

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/88y8ggw1yrpr2u8d18th02iceyad2cc267qn0cyqunvmiu5w/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
</body>

</html>