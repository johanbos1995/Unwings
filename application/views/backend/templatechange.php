<body>

   
    <script type="text/javascript" src="<?php echo base_url("js/jscolor/jscolor.js"); ?>" ></script>
    <div class="container"   >
        <div class="row">
        
           <a class="btn btn-primary" href="<?php echo site_url("backend_home/templatehome"); ?>"> <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Back</a>          
            <div class="span12">
                    
                <legend style="text-align:center; font-size:40px;" >Change template</legend>
             
                <form action="<?php echo site_url("backend_home/UpdateTemplateChange"); ?>" method="post">   
           
     <?php        
       $bg_uitdb = $this->template->get_bg_color();
       
       foreach ($bg_uitdb as $row) {
           $bg_check = $row['temp_color'];
       }  
       ?>
                    <div class="form-group">
                        <label for="name" class="col-sm-1 control-label">Background color</label>
                        <div class="col-sm-11">
                            <input type="text" size="20" id="bg_color" name="bg_color" class="color form-control" value="<?php echo $bg_check; ?>"required/>
                        </div>
                    </div>
                    <br><br>   
                    <br>
        <?php            
         $h_uitdb = $this->template->get_h_color();
       
       foreach ($h_uitdb as $row) {
           $h_check = $row['temp_color'];
       }              
       ?>
                    <div class="form-group">
                        <label for="name" class="col-sm-1 control-label">Header color</label>
                        <div class="col-sm-11">
                            <input type="text" size="20" id="h_color" name="h_color" class=" color form-control"  value="<?php echo $h_check; ?>" required/>
                        </div>
                    </div>
                    <br><br>  
        <?php
         $c_uitdb = $this->template->get_c_color();
       
       foreach ($c_uitdb as $row) {
           $c_check = $row['temp_color'];
       }  
        ?>
                    <div class="form-group">
                        <label for="name" class="col-sm-1 control-label">Container color</label>
                        <div class="col-sm-11">
                            <input type="text" size="20" id="c_color" name="c_color" class="color form-control"  value="<?php echo $c_check; ?>" required/>
                        </div>
                    </div>

                    <br><br>  
         
                       <?php
         $text_uitdb = $this->template->get_text_color();
       
       foreach ($text_uitdb as $row) {
           $text_check = $row['temp_color'];
       }  
        ?>
                    <div class="form-group">
                        <label for="name" class="col-sm-1 control-label">Text color</label>
                        <div class="col-sm-11">
                            <input type="text" size="20" id="text_color" name="text_color" class="color form-control"  value="<?php echo $text_check; ?>" required/>
                        </div>
                    </div>

                    <br><br>    

                          <?php
         $border_uitdb = $this->template->get_border_color();
       
       foreach ($border_uitdb as $row) {
           $border_check = $row['temp_color'];
       }  
        ?>
                    <div class="form-group">
                        <label for="name" class="col-sm-1 control-label">Border color</label>
                        <div class="col-sm-11">
                            <input type="text" size="20" id="border_color" name="border_color" class="color form-control"  value="<?php echo $border_check; ?>" required/>
                        </div>
                    </div>

                    <br><br>
                          <?php
         $header_text_uitdb = $this->template->get_header_color();
       
       foreach ($header_text_uitdb as $row) {
           $header_text_check = $row['temp_color'];
       }  
        ?>
                    <div class="form-group">
                        <label for="name" class="col-sm-1 control-label">Header text and Button colors</label>
                        <div class="col-sm-11">
                            <input type="text" size="20" id="header_color" name="header_color" class="color form-control"  value="<?php echo $header_text_check; ?>" required/>
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

