<!-- kurang daftar alumni yg sudah mendaftar & aktif di sistem informasi -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Tracer Study - SMKN 1 Jenangan Ponorogo</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
	<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> -->
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
        
        <li><a href="#">Sign Up</a></li>
        <li><a href="#" class="" data-toggle="modal" data-target="#loginModal" id="link_login">Login</a></li>
      </ul>

        <!-- modal -->
  <div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true"><small>x</small></span>
            <span class="sr-only">Keluar</span>
          </button>
          <h4 class="modal-title">Login</h4>
        </div>
        <form action="" method="post">
        <div class="modal-body">
          <div class="form-group">
            
            <input type="text" class="form-control" id="username" placeholder="Username...">
          </div>
          <div class="form-group">
            
            <input type="password" class="form-control" id="password" placeholder="Password...">
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" href="" id="btn_login">LOGIN</button>
          <div class="row">
            <div class="col-md-6 text-left"><a href="">Sign Up</a></div>
            <div class="col-md-6"><a href="">Lupa akun??</a></div>
          </div>
          
        </div>
        </form>
      </div>
    </div>  

  </div>
  <!-- EOF modal -->
 
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </header>
  <!-- EOF Header -->

  <!-- Main -->
  <div id="content" >
    <div class="container">
      <div class="row" >
        <div class="col-md-9">
        <div class="main">
        <div class="main_content">
          <p class="bg-warning">Silakan mendaftar untuk mengikuti perekrutan, klik <a href="">disini</a> untuk mendaftar</p>

          <h3>Judul Lowongan Kerja</h3>
           <div id="info_short-desc">
             <span id="posted-on">Dipostingkan 3 hari lalu</span>
            <span id="end-registration"><strong>Batas Pendaftaran : 14 Juli 2014</strong></span>
            <span id="download-form"><strong><a href="">Download Formulir</a></strong></span>
          </div>
          <div id="body-container">
            <h4>Deskripsi</h4>
            <div id="info_desc"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem sapiente accusantium culpa id pariatur eum corporis temporibus quas doloremque voluptatibus. Accusantium, maiores incidunt dolor odit quasi. Illum, sequi mollitia commodi!</p></div>

            
          </div>

          <div id="info_jurusan">
            <h4>Jurusan</h4>
            <a href="" class="label label-default">Rekayasa Perangkat Lunak</a> <a href="" class="label label-default">Otomasi Industri</a>
          </div>
        </div>
        </div>
        </div>
        <div class="col-md-3">
      <div class="widget">
            <div class="widget_content">
              <h5 class="widget_title">Tentang Industri</h5>
              <div class="widget_body">
                <ul id="info_instansi">
                  <li id="info_instansi-title"><strong>PT. Sumber Agung Jaya</strong></li>
                  <li id="info_instansi-alamat"><em>Jl. Simpang Balapan no.9, Surabaya</em></li>
                  <li id="info_instansi-telp"><small>(0341) 330-330</small></li>
                  <li id="info_instansi-url"><a href="" target="_new">www.sumberagung.biz</a></li>
                  <li id="info_instansi-bidang"><strong>Bidang Usaha :</strong><em>kategori 1, kategori 2</em></li>
                </ul>
              </div>
            </div>
                      
              <div class="divider"></div>
            <div class="widget_content" id="tips">
              <h5 class="widget_title">Bagikan</h5>
              <div class="widget_body">
                <ul id="share_content">
                  <li><a href="">Facebook</a></li>
                  <li><a href="">Twitter</a></li>
                </ul>
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
    </script>

    
  </body>
</html>