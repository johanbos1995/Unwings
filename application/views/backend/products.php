  <body>
    <div class="container">
      <h2>Producten</h2>
       
      
      <a class="btn btn-success" href="<?php echo site_url("backend_home/AddProductsLanding"); ?>"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add</a>
      <div class="table-responsive">          
      <table class="table">
 
        <thead>
          <tr>
            <th>Product - ID</th>
            <th>Product - Image</th>
            <th>Product - Name</th>
            <th>Product - Details</th>
            <th>Product - Price</th>
            <th>Product - Quantity</th>
            <th></th>
            <th></th>
           
          </tr>
        </thead>
        
        <tbody>
         <?php foreach ($result as $row) { ?>   
          <tr>
            <td><?php echo $row['products_id'];  ?></td>
            <td><?php echo $row['Image'];  ?></td>
            <td><?php echo $row['Name'];  ?></td>
            <td><?php echo $row['Details'];  ?></td>
            <td><?php echo $row['Prijs'];  ?></td>
            <td><input type="number" name="quantity" value="<?php echo $row['Quantity']; ?>"></td>
            <td><input type="submit" value="Change"  class="btn btn-warning"/></td>
            <td><input type="submit" value="Delete"  class="btn btn-danger"/></td>
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
