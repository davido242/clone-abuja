<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Cloning Uniabuja Portal</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="icon"  href="company-logo.jpg">
  <!-- font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css');?>">
</head>
<body>
  <div class="left-wrap"></div>
  <div class="right-wrap">
    <div class="image-container">
      <img src="https://portal.uniabuja.edu.ng/assets/images/banner.png">
    </div>
    <div class="divider"></div>
    <div class="container-wrap">
        <form class="main-form" action="#" method="GET">
          <label class="lab1">Please sign in to your account below.</label>
          <input type="text" name="username" placeholder="Application No. / Reg. No. / Matric No." max="12" min="5" required>
          <input type="password" name="password" placeholder="Password here..." max="10" min="8" required>
          <label class="lab1">New Application? <a href="https://portal.uniabuja.edu.ng/app_guide.php">Click here to Apply</a></label>
        </form>
        <div class="below-form">
          <button> <a href="#">Recover Application No.</a></button>
          <button> <a href="#">Recover Password</a></button>
          <button> <a href="#">Login to Dashboard</a></button>
        </div>
    </div>
    <div class="divider divider2"></div>
</div>
<script src="<?php echo base_url('js/main.js');?>"></script>
</body>
</html>