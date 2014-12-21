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
    <a class="navbar-brand" href="#"><img src=""<?php echo base_url(); ?>/assets/img/logo.png" alt=""></a>
      
      
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
                   <li><a href="">Riwayat Pendidikan</a></li>
                   <li><a href="">Ubah Password</a></li>
                   <li class="active">Verifikasi Akun</li>
                 </ul>
                </div>
                <div class="col-md-10" style="padding-top:2rem;">
                <div class="alert alert-warning">Akun Anda membutuhkan proses verifikasi.</div>
                 <form action="" method="post" id="form_verifikasi">
                   <div class="form-group">
                   <label>Tahun Lulus:</label>
                    <input type='text' name="tahun_lulus" placeholder="Tahun Lulus" class="form-control"/>
                   </div>
                   <div class="form-group">
                   <label>Jurusan:</label>
                    <select name="jurusan" class="form-control">
                      <option value="">Teknik Permesinan</option>
                    </select>
                   </div>
                   <div class="form-group">
                   <label>Upload File * (.png)</label>
                   <div id="info_upload-area"><p>Drop dokumen bukti disini / klik untuk memilih file</p></div>
                    <p class="help-block">*scan ijazah/ kartu tanda pelajar/ raport</p>
                   </div>
                  <div class="form-group">
                    <button class="btn btn-primary">Proses</button>
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
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src=""<?php echo base_url(); ?>/assets/js/jquery-1.9.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=""<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
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