<body>

    <link href="<?php echo base_url("css/css/bootstrap.min.css"); ?>" rel="stylesheet">
    <div class="container"   >
        <div class="row">
        
           <a class="btn btn-primary" href="<?php echo site_url("backend_home/accounts"); ?>"> <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Back</a>          
            <div class="span12">
                    
                <legend style="text-align:center; font-size:40px;" >Add account</legend>
             
                <form action="<?php echo site_url("backend_home/InsertAccountBackend"); ?>" method="post">   
                        
                     
                    <div class="form-group">
                        <label for="name" class="col-sm-1 control-label">Name</label>
                        <div class="col-sm-11">
                            <input type="text" size="20" id="Name" name="Name" class="form-control" placeholder="Name" required/>
                        </div>
                    </div>
                    <br><br>   
                    <br>

                    <div class="form-group">
                        <label for="name" class="col-sm-1 control-label">Password</label>
                        <div class="col-sm-11">
                            <input type="password" size="20" id="Password" name="Password" class="form-control" placeholder="Password" required/>
                        </div>
                    </div>
                    <br><br>  
                    <div class="form-group">
                        <label for="name" class="col-sm-1 control-label">Password check</label>
                        <div class="col-sm-11">
                            <input type="password" size="20" id="Password" name="Password_check" class="form-control" placeholder="Password check" required/>
                        </div>
                    </div>

                    <br><br>    


                    <div class="form-group">
                        <label for="name" class="col-sm-1 control-label">SuperAdmin</label>
                        <div class="col-sm-11">
                            <select id="SuperAdmin" name="SuperAdmin" class="form-control">
                                <option value="1">Yes</option>
                                <option value="0" selected>No</option>
                            </select>
                        </div>
                    </div>                

                    <br><br>

                    <div class="form-group">
                        <div class="col-sm-5">
                            <input type="submit" value="Create"  class="btn btn-success"/>
                        </div>
                    </div>
            </div>

            </form>

            </body>


            </html>

