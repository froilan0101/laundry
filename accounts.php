<?php
  include_once 'include/dbconnect.php';
  ?>


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Responsive Table with FooTable</title>
  
    <link rel="stylesheet" href="css/normalize.min.css">

  <link rel='stylesheet prefetch' href='css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='css/footable.core.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <h2>MAMA GINA EMPLOYEE ACCOUNTS</h2>

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <table class="table table-bordered table-hover footable">
        <caption class="text-center"> <a href="function/addaccount.php">Add employee Account</a>:</caption>
        <thead>
          <tr>
            <th>Fullname</th> 
            <th data-hide="phone,tablet">Address</th>           
            <th data-hide="phone,tablet">Birthday</th>
            <th data-hide="phone,tablet">Age</th>
            <th data-hide="phone,tablet">Height</th>
            <th data-hide="phone,tablet">Weight</th>
            <th data-hide="phone,tablet">Username</th>
            <th data-hide="phone,tablet">Passwords</th>
            <th>Contact Number</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php           
            $selectemployee=mysql_query("select * from employee");
            while($res1=mysql_fetch_array($selectemployee))
            {

        ?>
          <tr>
            <td><?php echo $res1['fullname'] ?></td>
            <td><?php echo $res1['address'] ?></td>
            <td><?php echo $res1['birthday'] ?></td>
            <td><?php echo $res1['age'] ?></td>            
            <td><?php echo $res1['height'] ?></td>
            <td><?php echo $res1['weight'] ?></td>
            <td><?php echo $res1['username'] ?></td>
            <td><?php echo $res1['password'] ?></td>
            <td><?php echo $res1['contact'] ?></td>
            
            <td><a href = "function/editaccount.php">Edit</a> / <a href = "function/deleteaccount.php">delete</a></td>
          </tr>
          <?php }

 ?>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="10" class="text-center">List of Employee Account</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/123941/footable.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
