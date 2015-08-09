<body>

    <link href="<?php echo base_url("css/css/bootstrap.min.css"); ?>" rel="stylesheet">
    <div class="container"   >
        <div class="row">
        
           <a class="btn btn-primary" href="<?php echo site_url("backend_home/ChangeAccSetting"); ?>"> <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Back</a>          
            <div class="span12">
                    
                <legend style="text-align:center; font-size:40px;" >Change Password</legend>
             
                <form action="<?php echo site_url("backend_home/UpdateChangePassword"); ?>" method="post">   
                
                     <input type="hidden" size="20" id="Username" name="Username" class="form-control" value="<?php echo $username; ?>" required/>
                             
                    <div class="form-group">
                        <label for="name" class="col-sm-1 control-label"> Old Password</label>
                        <div class="col-sm-10">
                            <input type="password" size="20" id="Password" name="Password" class="form-control"  placeholder="Old Password" required/>
                        </div>
                    </div>
                    <br><br>   
                    <br>

                    <div class="form-group">
                        <label for="name" class="col-sm-1 control-label"> Old Password Check</label>
                        <div class="col-sm-9">
                            <input type="password" size="20" id="Password_Check" name="Password_Check" class="form-control" placeholder="Old Password Check" required/>
                        </div>
                    </div>
                    <br><br>  
                    <br>
                    
                    <div class="form-group">
                        <label for="name" class="col-sm-1 control-label"> New Password</label>
                        <div class="col-sm-9">
                            <input type="password" size="20" id="New_Password" name="New_Password" class="form-control" placeholder="New Password" required/>
                        </div>
                    </div>
                    <br><br>   
                    <br>

                    <div class="form-group">
                        <label for="name" class="col-sm-1 control-label"> New Password Check</label>
                        <div class="col-sm-9">
                            <input type="password" size="20" id="New_Password_Check" name="New_Password_Check" class="form-control" placeholder=" New Password Check" required/>
                        </div>
                    </div>
                    <br><br> 
                    

                    <div class="form-group">
                        <div class="col-sm-5">
                            <input type="submit" value="Change"  class="btn btn-success"/>
                        </div>
                    </div>
            </div>

            </form>

            </body>


            </html>

