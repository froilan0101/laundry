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

  </script>
</head>

<body>

  <h2>MAMA GINA LAUNDRY SERVICES</h2>

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <table class="table table-bordered table-hover footable">
        <caption class="text-center"> <a  href="function/addservice.php">Add new Service</a></caption>
        <thead>        
          <tr>
            <th>Laundry Type</th> 
            <th data-hide="phone,tablet">Washtype</th>           
            <th data-hide="phone,tablet">Pricing</th>
            <th data-hide="phone,tablet">Price</th>            
            <th data-hide="phone,tablet">Minimum Weight</th>
            <th data-hide="phone,tablet">Minimum size</th>            
            <th data-hide="phone,tablet">Laundry Step</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php           
            $selectservices=mysql_query("select * from services");
            while($res1=mysql_fetch_array($selectservices))
            {
            	$serviceid =  $res1['id'];

        ?>
          <tr>
            <td><?php echo $res1['laundrytype'] ?></td>
            <td><?php echo $res1['washtype'] ?></td>
            <td><?php echo $res1['pricecomputation'] ?></td>
            <td><?php echo $res1['price'] ?></td>
            <td>
              <?php 
                $Weight1 = $res1['minweight'];
                if ($Weight1 != "0" ){

                  echo $Weight1 ;
                }


                else{

                  echo '-';
                }


                ?>
            </td>

            <td>
              <?php 
                $sizex1 = $res1['minsizex'];
                $sizey1 = $res1['minsizey'];
                if ($sizey1 != "0" & $sizex1 != "0"){

                  echo $sizex1 , ' x ' ,$sizey1;
                }


                else{

                  echo '-';
                }

             
              ?>
            </td>
            <td><?php echo $res1['step1'] ?> - <?php echo $res1['step2'] ?> - <?php echo $res1['step3'] ?> - <?php echo $res1['step4'] ?> - <?php echo $res1['step5'] ?></td> 
            <td><?php echo '<a href = "function/updateservice.php?id=' .$res1['id'].'">Edit</a> / <a href = "function/deleteservice.php?id=' .$res1['id'].'">delete</a>' ?></td>
          </tr>
          <?php }

 ?>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="10" class="text-center">Updated list of laundry service.</td>
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
