<html>
    <head>
        <link href="<?php echo base_url("css/css/bootstrap.php"); ?>" type="text/css" rel="stylesheet">
    </head>
    <body>
      
 <?php
  $this->load->model('template','',TRUE);
 ?>

    
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       <li class="active"><a href="<?php echo site_url("frontend/index"); ?>"> Home <span class="sr-only">(current)</span></a></li>
       <li><a href="<?php echo site_url("frontend/login"); ?>"> Inbox(CHECK)</a></li>
       <li><a href="<?php echo site_url("frontend/login"); ?>"> Orders(CHECK)</a></li>
       <li><a href="<?php echo site_url("backend_home/products"); ?>"> Add/Change new product </a></li>
       <li><a href="<?php echo site_url("backend_home/ChangeAccSetting"); ?>"> Change Username/Password </a></li>
       <li><a href="<?php echo site_url("backend_home/accounts"); ?>"> Create/Delete Account </a></li>
       <li><a href="<?php echo site_url("backend_home/templatehome"); ?>"> Template </a></li>
       <li><a href="<?php echo site_url("backend_home/logout"); ?>"> Log out </a></li>
       <li><a href="#"> You logged in as <?php echo $username; ?> </a></li>
         
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
