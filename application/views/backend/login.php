 <body>
    <link href="<?php echo base_url("css/css/bootstrap.min.css"); ?>" rel="stylesheet">
 <div class="container"   >
    <div class="row">
		<div class="span12">
                    <legend style="text-align:center; font-size:40px;" >Unwings - CMS for webshops - Login</legend>
      
                    <div class="form-horizontal">
                                       <?php echo validation_errors(); ?>
                                       <?php echo form_open('verifylogin'); ?>
			   <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Username</label>
        <div class="col-sm-5">
            <input type="text" size="20" id="username" name="username"  placeholder="Username" class="form-control" autofocus/>
        </div>
    </div>
                             <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-5">
            <input type="password" size="20" id="password" name="password" class="form-control" placeholder="Password"/>
        </div>
    </div>
         
                            <div class="form-group">
        <div class="col-sm-5 col-sm-offset-2">
               <input type="submit" value="Login"  class="btn btn-primary"/>
        </div>
    </div>
                    </div>
                            
			</form>

 </body>
</html>

		