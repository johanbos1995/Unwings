 <body>

    <link href="<?php echo base_url("css/css/bootstrap.min.css"); ?>" rel="stylesheet">
 <div class="container"   >
    <div class="row">
		<div class="span12">
                    <legend style="text-align:center; font-size:40px;" >Add products</legend>
      
                    <div class="form-horizontal">
   <div class="form-group">
        <label for="name" class="col-sm-1 control-label">Image</label>
        <div class="col-sm-11">
            <input type="file" name="userfile" size="20"  class="form-control" autofocus />
        </div>
    </div>
    
   <div class="form-group">
        <label for="name" class="col-sm-1 control-label">Name</label>
        <div class="col-sm-11">
            <input type="password" size="20" id="password" name="password" class="form-control" placeholder="Name"/>
        </div>
    </div>
                        
     <div class="form-group">
        <label for="name" class="col-sm-1 control-label">Details</label>
        <div class="col-sm-11">
            <!--<input type="password" size="20" id="password" name="password" class="form-control" placeholder="Password"/>
            -->
            <textarea name="content" style="width:100%"></textarea>
            </div>
    </div>
                        
    <div class="form-group">
        <label for="name" class="col-sm-1 control-label">Price</label>
        <div class="col-sm-11">
            <input type="number" size="20" id="password" name="password" class="form-control" placeholder="Price"/>
        </div>
    </div>
    
     <div class="form-group">
        <label for="name" class="col-sm-1 control-label">Quantity</label>
        <div class="col-sm-11">
            <input type="password" size="20" id="password" name="number" class="form-control" placeholder="Quantity"/>
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
 <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
 <script type="text/javascript">
tinymce.init({
    selector: "textarea",
    theme: "modern",
    menubar: false,   
});
</script>
</html>

		