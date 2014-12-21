<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Tracer Study - SMKN 1 Jenangan Ponorogo</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/img/icon.png">
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
  <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> -->
    <!-- more fontawesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/font-awesome.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css"/>
  


  </head>
  <body>
  
  <!-- Header -->
  <header class="navbar navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>/assets/img/logo.png" alt=""></a>
      
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav  navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-globe"></span></a></li>
        <li class="dropdown"><a href="">Username <span class="caret"></span></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </header>
  <!-- EOF Header -->

  <!-- Main -->
  <div id="content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="main">
            <div class="main_content">
            <div id="judul-form">
              <h4>Pengaturan</h4>
            </div>
            <div id="pengaturan_body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-2" style="border-right:1px solid #c2c2c2; padding-left:0px; padding-right:0px">
                 <ul id="pengaturan_menu">
                   <li><a href="">Profile</a></li>
                   <li><a href="">Pengalaman Kerja</a></li>
                   <li class="active">Riwayat Pendidikan</li>
                   <li><a href="">Ubah Password</a></li>
                   <li><a href="">Verifikasi Akun</a></li>
                 </ul>
                </div>
                <div class="col-md-10" style="padding:0px;">
                 <ul id="list_riwayat">
                   <li>
                     <h4>Universitas Gadjah Mada <a class="fa fa-pencil btn-edit pull-right" href=""></a></h4>
                     <small>2015-2017</small>
                     <p>S2 Sistem Informasi</p>
                   </li>
                   <li>
                     <h4>Universitas Negeri Malang <a class="fa fa-pencil btn-edit pull-right" href=""></a></h4>
                     <small>2011-2015</small>
                     <p>S1 Pendidikan Teknik Informatika</p>
                   </li>
                   <li>
                     <h4>SMK Negeri 1 Jenangan Ponorogo <a class="fa fa-pencil btn-edit pull-right" href=""></a></h4>
                     <small>2008-2011</small>
                     <p>Jurusan Rekayasa Perangkat Lunak</p>
                   </li>
                   <li class="tambah_riwayat">
                     <a href="#" class="" data-toggle="modal" data-target="#tambahRiwayat">Tambah Riwayat Pendidikan</a>
                   </li>
                 </ul>
                </div>
              </div>
            </div>
              
            </div>  
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  <!-- EOF Main -->

  <!-- Footer -->
  <footer>
  <div class="container">
    <div class="row">
    <div class="col-md-12">
      
      <p><small>Create with <span class="glyphicon glyphicon-heart"></span> by <a href="">@eka_nur</a></small></p>
      
    </div>
  </div>
  </div>
  </footer>
<!-- EOF Footer -->
<div id="tambahRiwayat" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true"><small>x</small></span>
          <span class="sr-only">Keluar</span>
        </button>
        <h4>Tambah Riwayat Pendidikan</h4>
      </div>
      <form action="" method="post" class="form-horizontal">
      <div class="modal-body">
        
          <div class="form-group">
          <label class="col-sm-3">Nama Lembaga</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="jurusan" id="nama" placeholder="Nama"/>
          </div>
          </div>
          <div class="form-group">
          <label class="col-sm-3">Jenjang</label>
          <div class="col-sm-9">
            <select name="jenjang" class="form-control">
              <option value="">D1</option>
              <option value="">D2</option>
              <option value="">D3</option>
              <option value="">D4</option>
              <option value="">S1</option>
              <option value="">S2</option>
              <option value="">S3</option>
            </select>
          </div>
          </div>

          <div class="form-group">
          <label class="col-sm-3">Jurusan</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan"/>
          </div>
          </div>

          <div class="form-group">
          <label class="col-sm-3">Sejak</label>
          <div class="col-sm-3">
            <select name="sejak" class="form-control">
              <option value="">2008</option>
              <option value="">2009</option>
              <option value="">2010</option>
              <option value="">2011</option>
            </select>
          </div>
          <label class="col-sm-1">s/d</label>
          <div class="col-sm-3">
            <select name="sampai" class="form-control">
              <option value="">2012</option>
              <option value="">2013</option>
              <option value="">2014</option>
            </select>
          </div>
          </div>
        
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" name="tambahriwayatpendidikan">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/jquery-1.9.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
    <script type="text/javascript">
          // $('#sidebar').affix();
          
          // $("#login").click(function(){
          //   $("#username").focus();
          // });

        $('.dropdown-toggle').dropdown()
    </script>

    
  </body>
</html>