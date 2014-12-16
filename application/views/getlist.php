<?php require_once 'header.php';?>

  <div class="container">
  	<h1> List of available Domains: </h1>
  	<div class="table-responsive">
  	
  	<table class="table table-bordered table-hover">
  	<thead>
  	<tr>
  	<th>Domain Name</th>
  	<th>Registration Date</th>
  	<th>Expiry date</th>
  	<th>Client Name </th>
  	<th>Username</th>
  	<th>Password</th>
  	</thead>
  	</tr>
  	<tbody>
  	<?php
  	foreach($records as $row):
  	?>
  	    <tr>
  	        <td><?=$row->Domain_name?></td>
  	        <td><?=$row->Register_date?></td>
  	        <td><?=$row->Expire_date?></td>
  	        <td><?=$row->Client_name?></td>
  	        <td><?=$row->User_name?></td>
  	        <td><?=$row->Password?></td>
  	        
  	    </tr>
  	    <?php
  	        endforeach;
  	    ?>
  	    </tbody>
  	    </table>
  	</div>
 </div>
        
 
  
 <?php require_once 'footer.php';?>