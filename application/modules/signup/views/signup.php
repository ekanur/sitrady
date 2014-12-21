<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Tracer Study - SMKN 1 Jenangan Ponorogo</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
	<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css"/>


  </head>
  <body>
  
  <!-- Header -->

  <!-- EOF Header -->

  <!-- Sign-up -->
 
    <div id="sign-up">
    
      <form id="form-signup">
      <div id="judul-form">
      <h4>Sign Up</h4>
      <?php 
        echo $tgl;
       ?>
      </div>
      <div id="konten-form">
        <div class="form-group">
          <!-- <label for="nama_lengkap">Nama Lengkap</label> -->
          <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" class="form-control"/>
        </div>
        <div class="form-group has-feedback has-error">
        <span class="pesan_error text-danger">error messages</span>
          <!-- <label for="username">Username </label> -->
          <input type="text" name="username" placeholder="Username" class="form-control"/>
        </div>
        <div class="form-group">
          <!-- <label for="email">Email</label> -->
          <input type="text" name="email" placeholder="Email" class="form-control"/>
        </div>
        <div class="form-group">
          <!-- <label for="password">Password</label> -->
          <input type="password" name="password" placeholder="Password" class="form-control"/>
        </div>
        <div class="form-group">
          <!-- <label for="retype_password">Ulangi Password</label> -->
          <input type="password" name="retype_password" placeholder="Ulangi Password" class="form-control"/>
        </div>
        <div class="form-group">
          <button class="btn btn-primary form-control " name="signup">SIGN UP</button>
          <!-- <input type="submit" name="signup" value="Sign Up" class="form-control"/> -->
        </div>
        <div class="form-group">
          Sudah punya akun? Silakan <a href="">Login</a>
        </div>
      </div>
      </form>

    </div>
    
  <!-- EOF Sign-up -->

  <!-- Footer -->
  <!-- <footer>
  <div class="container">
    <div class="row">
    <div class="col-md-12">
      
      <p><small>Create with <span class="glyphicon glyphicon-heart"></span> by <a href="">@eka_nur</a></small></p>
      
    </div>
  </div>
  </div>
	</footer> -->
<!-- EOF Footer -->
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
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