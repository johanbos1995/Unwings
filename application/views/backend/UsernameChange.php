<body>

    <link href="<?php echo base_url("css/css/bootstrap.min.css"); ?>" rel="stylesheet">
    <div class="container"   >
        <div class="row">
        
           <a class="btn btn-primary" href="<?php echo site_url("backend_home/ChangeAccSetting"); ?>"> <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Back</a>          
            <div class="span12">
                    
                <legend style="text-align:center; font-size:40px;" >Change Username</legend>
             
                <form action="<?php echo site_url("backend_home/ChangeUsername_Check"); ?>" method="post">   
                        
                    <input type="hidden" size="20" id="Name_Session" name="Name_Session" class="form-control" value="<?php echo $username; ?>" />
                     
                    <div class="form-group">
                        <label for="name" class="col-sm-1 control-label"> Old Name</label>
                        <div class="col-sm-11">
                            <input type="text" size="20" id="Name" name="Name" class="form-control" value="<?php echo $username; ?>" placeholder="Old Name" required/>
                        </div>
                    </div>
                    <br><br>   
                    <br>

                    <div class="form-group">
                        <label for="name" class="col-sm-1 control-label"> Old Name Check</label>
                        <div class="col-sm-11">
                            <input type="text" size="20" id="Name_Check" name="Name_Check" class="form-control" placeholder="Old Name Check" required/>
                        </div>
                    </div>
                    <br><br>  
                    
                    <div class="form-group">
                        <label for="name" class="col-sm-1 control-label"> New Name</label>
                        <div class="col-sm-11">
                            <input type="text" size="20" id="New_Name" name="New_Name" class="form-control" placeholder="New Name" required/>
                        </div>
                    </div>
                    <br><br>   
                    <br>

                    <div class="form-group">
                        <label for="name" class="col-sm-1 control-label"> New Name Check</label>
                        <div class="col-sm-11">
                            <input type="text" size="20" id="New_Name_Check" name="New_Name_Check" class="form-control" placeholder=" New Name Check" required/>
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

