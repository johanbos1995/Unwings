  <body>
    <div class="container">
      <h2>Admin - Accounts</h2>
       
      <a class="btn btn-primary" href="<?php echo site_url("backend_home/AddAccountLanding"); ?>"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> See customer accounts</a>
      <br><br>
      <a class="btn btn-success" href="<?php echo site_url("backend_home/AddAccountLanding"); ?>"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create</a>
      <div class="table-responsive">          
      <table class="table">
 
        <thead>
          <tr>
            <th>Account - ID</th>
            <th>Account - Name</th>
            <th>Account - Admin</th>
            <th></th>
           
          </tr>
        </thead>
        
        <tbody>
         <?php foreach ($result as $row) { ?>   
          <tr>
            <td><?php echo $row['id'];  ?></td>
            <td><?php echo $row['Naam_Backend'];  ?></td>
            <td><?php if( $row['SuperAdmin'] == 1 ){ echo "Yes"; }else { echo "No"; };  ?></td>
            <td><form action="<?php echo site_url("backend_home/DeleteAccountBackend"); ?>" method="post" onsubmit="return confirm('Are you sure you want to delete this record?')">  <input type="hidden" name="id_delete" id="id_delete" value="<?php echo $row['id'];  ?>"> <input type="submit" value="Delete" class="btn btn-danger"/> </form></td>
          </tr>
         <?php } ?> 
        </tbody>
      </table>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
<?php
