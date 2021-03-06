<!-- kurang daftar alumni yg sudah mendaftar & aktif di sistem lokerrmasi -->
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
        <div class="col-md-9">
          <div class="main">
          <div class="main_content">
            <h3>Judul Pelatihan</h3>
            <div class="row">
              <div class="col-md-5">
              <i class="glyphicon glyphicon-calendar loker_pelatihan-icon"></i>
              <div class="detail">
                <strong>Dilaksanakan pada 20 Agustus 2014</strong>
                <div class="more_detail">07.30-13.00</div>
              </div>
              </div>
         
               <div class="col-md-5">
                  <i class="glyphicon glyphicon-map-marker loker_pelatihan-icon"></i>
              <div class="detail">
                <strong>Lokasi : Ruang 8 SMKN 1 Jenangan Ponorogo</strong>
                <div class="more_detail">Jl. Niken Gandini no 9 Jenangan Ponorogo</div>
              </div>
               </div>
             </div>
             
           
           

          </div>
          
      <div id="feedback_container">
        <div class="row">
          <div class="col-md-12">
              <h4>Feedback</h4>
            
            <div id="feedback_body">
             
              <form  class="form-horizontal" action="" method="post" role="form">
                <div class="form-group">
                  <label for="tgl_terakhir" class="col-sm-3">Tanggal Terakhir Kerja</label>
                  <div class="col-sm-3">
                    <input type="date" class="form-control">
                  </div>
              </div>
              <div class="form-group">
                  <label for="jabatan" class="col-sm-3">Jabatan</label>
                  <div class="col-sm-3">
                    <select name="jabatan" id="" class="form-control">
                      <option value="tanggal terakhir">Administrator</option>
                    </select>
                  </div>
              </div>
              <div class="form-group">
                  <label for="gaji" class="col-sm-3">Gaji</label>
                  <div class="col-sm-3">
                    <select name="gaji" id="" class="form-control">
                      <option value="tanggal terakhir">1.000.000 s/d 2.000.000</option>
                    </select>
                  </div>
               </div>
              <div class="form-group">
                  <label for="pesan" class="col-sm-3">Pesan & Kesan</label>
                  <div class="col-sm-9"><textarea name="pesan" id="" cols="30" rows="10" class="form-control" placeholder="Pesan & kesan selama bekerja"></textarea></div>
              </div>
              <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                <p>Skill & ilmu yang saya dapat selama belajar di SMKN 1 Jenangan Ponorogo membantu saya dalam bekerja</p>
                <div class="checkbox-inline">
                  <input type="checkbox" name="setuju" value="y"> Ya 
                </div>
                <div class="checkbox-inline">
                  <input type="checkbox" name="setuju" value="n"> Tidak 
                </div>
                </div>
              </div>
              <div class="form-group">
                <div class=" col-sm-offset-9 col-sm-3 text-right">
                <button class="btn btn-default" name="submit">Clear</button> <button class="btn btn-success" name="submit">Submit</button> 
                </div>
              </div>
              <hr width="100%"/>
              </form>
            </div>

        
            
          </div>
        
        
      </div>
       
          </div>

          </div>
          <div class="row">
            <div class="col-md-6 text-left"><a href="">&laquo; Judul pelatihan sebelum...</a></div>
            <div class="col-md-6 text-right"><a href="">Judul pelatihan selanjut... &raquo; </a></div>
          </div>
        </div> 
        <!-- eof col-md-9 -->
        <div class="col-md-3">
          <div class="widget" style="background:white">
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
               <div class="widget_content">
              <h5 class="widget_title">Partisipan</h5>
              <div class="widget_body">
              <ul id="partisipan">
           <li><a href=""><img src="<?php echo base_url(); ?>/assets/img/user/1.jpg" alt="" class="telah_daftar_img"></a></li>
           <li><a href=""><img src="<?php echo base_url(); ?>/assets/img/user/2.jpg" alt="" class="telah_daftar_img"></a></li>
           <li><a href=""><img src="<?php echo base_url(); ?>/assets/img/user/3.jpg" alt="" class="telah_daftar_img"></a></li>
           <li><a href=""><img src="<?php echo base_url(); ?>/assets/img/user/4.jpg" alt="" class="telah_daftar_img"></a></li>
           <li><a href=""><img src="<?php echo base_url(); ?>/assets/img/user/5.jpg" alt="" class="telah_daftar_img"></a></li>
           <li><a href=""><img src="<?php echo base_url(); ?>/assets/img/user/9.jpg" alt="" class="telah_daftar_img"></a></li>
            <li><a href="">lihat semua</a></li>

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