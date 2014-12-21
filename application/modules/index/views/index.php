
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
   <!-- icon font by pixeden -->
   <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugin/pe-icon-social/css/pe-icon-social.css">

    <!-- Optional - Adds useful class to manipulate icon font display -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugin/pe-icon-social/css/helper.css">


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
          <button class="btn btn-primary form-control" href="" id="btn_login">LOGIN</button>
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
  <div id="main-index">
	<div class="container">
		
		<div class="row">
			<div class="col-md-12">
        <div id="deskripsi">
          <div class="text-center">
			     <h1 class="entry-title">Kami melacak & merekapitulasi data alumni</h1>
            <p id="slogan">Kami menyediakan info lowongan kerja, info pelatihan, dan info studi lanjut</p>

          </div>
        </div>
			</div>
		</div>

	</div>
  </div>

  <div id="share">
      <div class="container">
                <div class="row">
                  <div class="col-md-12 text-center"></div>
                </div>
              </div>        
  </div>  
  <!-- EOF Main -->
  <!-- info Baru -->
  <div id="info_baru">
    <div class="container">
         <h3 class="text-center title">Informasi Terbaru</h3>
      <div class="row">
        <div class="col-md-3 info_baru_content">
          <div id="judul_info"><strong><a href="">Judul Lowongan Kerja</a></strong></div>
          <div id="judul_instansi"><strong>PT. Maju Karya</strong></div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, doloremque, eos perspiciatis labore ab fuga modi iusto eligendi enim pariatur natus est...</p>
        </div>
        <div class="col-md-3 info_baru_content">
          <div id="judul_info"><strong><a href="">Judul Info Pelatihan</a></strong></div>
          <div id="judul_instansi"><strong>PPPTK VEDC Malang</strong></div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, doloremque, eos perspiciatis labore ab fuga modi iusto eligendi enim pariatur natus est...</p>
        </div>
        <div class="col-md-3 info_baru_content">
          <div id="judul_info"><strong><a href="">Judul Lowongan Kerja</a></strong></div>
          <div id="judul_instansi"><strong>PT. Maju Karya</strong></div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, doloremque, eos perspiciatis labore ab fuga modi iusto eligendi enim pariatur natus est...</p>
        </div>
        <div class="col-md-3 info_baru_content">
          <div id="judul_info"><strong><a href="">Judul Lowongan Kerja</a></strong></div>
          <div id="judul_instansi"><strong>PT. Maju Karya</strong></div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, doloremque, eos perspiciatis labore ab fuga modi iusto eligendi enim pariatur natus est...</p>
        </div>
        
      </div>
      <div class="row">
        <div class="col-md-1 col-md-offset-11"><a href="">Lainnya &raquo;</a></div>
      </div>
    </div>
  </div>
  <!-- eof info baru -->
  <!-- telah mendaftar -->
  <div id="telah_mendaftar">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

           <h3 class="title text-center">Lebih Dari 2000 Alumni Telah Mendaftar</h3>
           <ul id="img_user">
           <li><a href=""><img src="<?php echo base_url(); ?>/assets/img/user/1.jpg" alt="" class="telah_daftar_img"></a></li>
           <li><a href=""><img src="<?php echo base_url(); ?>/assets/img/user/2.jpg" alt="" class="telah_daftar_img"></a></li>
           <li><a href=""><img src="<?php echo base_url(); ?>/assets/img/user/3.jpg" alt="" class="telah_daftar_img"></a></li>
           <li><a href=""><img src="<?php echo base_url(); ?>/assets/img/user/4.jpg" alt="" class="telah_daftar_img"></a></li>
           <li><a href=""><img src="<?php echo base_url(); ?>/assets/img/user/5.jpg" alt="" class="telah_daftar_img"></a></li>
           <li><a href=""><img src="<?php echo base_url(); ?>/assets/img/user/6.jpg" alt="" class="telah_daftar_img"></a></li>
           <li><a href=""><img src="<?php echo base_url(); ?>/assets/img/user/7.jpg" alt="" class="telah_daftar_img"></a></li>
           <li><a href=""><img src="<?php echo base_url(); ?>/assets/img/user/8.jpg" alt="" class="telah_daftar_img"></a></li>
           <li><a href=""><img src="<?php echo base_url(); ?>/assets/img/user/9.jpg" alt="" class="telah_daftar_img"></a></li>
           <li><a href=""><img src="<?php echo base_url(); ?>/assets/img/user/3.jpg" alt="" class="telah_daftar_img"></a></li>
           <li><a href=""><img src="<?php echo base_url(); ?>/assets/img/user/5.jpg" alt="" class="telah_daftar_img"></a></li>
           <li><a href=""><img src="<?php echo base_url(); ?>/assets/img/user/8.jpg" alt="" class="telah_daftar_img"></a></li>
           <li><a href=""><img src="<?php echo base_url(); ?>/assets/img/user/10.jpg" alt="" class="telah_daftar_img"></a></li>
           <li><a href=""><img src="<?php echo base_url(); ?>/assets/img/user/7.jpg" alt="" class="telah_daftar_img"></a></li>
           <li><a href=""><img src="<?php echo base_url(); ?>/assets/img/user/6.jpg" alt="" class="telah_daftar_img"></a></li>
           <li><a href=""><img src="<?php echo base_url(); ?>/assets/img/user/2.jpg" alt="" class="telah_daftar_img"></a></li>
           <li><a href=""><img src="<?php echo base_url(); ?>/assets/img/user/9.jpg" alt="" class="telah_daftar_img"></a></li>
           <li><a href=""><img src="<?php echo base_url(); ?>/assets/img/user/10.jpg" alt="" class="telah_daftar_img"></a></li>
           <li><a href=""><img src="<?php echo base_url(); ?>/assets/img/user/3.jpg" alt="" class="telah_daftar_img"></a></li>

           </ul>
            <h4 class="title text-center" id="cara_daftar">Bagaimana Cara Mendaftar?</h4>
           <div class="row" id="opsi_daftar">
             <div class="col-md-6">
               <h4 class="title text-center opsi_daftar_title">"Saya lulus pada tahun 2012 s/d 2014"</h4>
               <p class="text-center">Jika anda lulus pada tahun 2012 s/d 2014. Anda tidak perlu mendaftar. Silakan login dengan memasukan <strong>Nomor Induk Siswa</strong> Anda untuk username dan password.</p>
              
             </div>
             <div class="col-md-6">
               <h4 class="title text-center opsi_daftar_title">"Saya lulus sebelum tahun 2012"</h4>
               <p class="text-center">Jika anda lulus sebelum tahun 2012. Silakan mendaftar sebagai anggota baru.</p>
               
             </div>
            </div>
           
        </div>
      </div>
    </div>
</div>
  <!-- EOF telah mendaftar -->
  <aside id=""></aside>
  <!-- Footer -->
  <footer>
  <div class="container">
    <div class="row">
    <div class="col-md-12">
      
      <p class="text-center"><small>Copyright &copy; 2014 sitrady | Create with <span class="glyphicon glyphicon-heart"></span> by <a href="http://www.twitter.com/eka_nur">Eka nur A</a></small></p>
      
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