
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login form</title>
  <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>

<link href='https://fonts.googleapis.com/css?family=Raleway:300,200' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets2/scss/style.scss">
<link rel="stylesheet" href="<?php echo base_url() ?>assets2/css/style.css" type='text/css'>

<?php { ?> <a class="fa fa-address-card-o" href="<?php echo site_url('admin/login_admin'); ?>"><img src="<?php echo base_url() ?>assets/img/noavatarn.png" width=10 height=10></a> <?php } ?>

</head>
<body>
  <img src="<?php echo base_url() ?>assets/img/advokesma.jpg" width=1350 height=700>
<div class="form">
  <form role="form" action="<?php echo base_url('Login') ?>" method="POST">
    <div class="forceColor"></div>
  <div class="topbar">
    <div class="spanColor"></div>
    <input name="nim" type="text" class="input" id="nim" placeholder="Masukkan NIM Anda"/>
  <button class="submit" id="submit" value="Login">Login</button>
</div>
  </form>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="<?php echo base_url() ?>assets2/js/index.js"></script>

</body>

</html>
