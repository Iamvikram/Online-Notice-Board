<?php

  $sql= mysqli_query($conn,"select * from notice where user = ' ".$_SESSION['user']." ' ");
  $rr = mysqli_num_rows($sql);
  if(!$rr){
	  echo '<h2 style="color:red;">No Notification for you </h2>';
  }
  else{
	  ?>
	  <h2>All Notification </h2>
         <table class="table table-bordered">
         <tr class="success">
     <th> Sr. no. </th>
	 <th> Subject </th>
	 <th> Details </th>
	 <th> Date </th>
    </tr>
	  <?php
	  $i=1;
	  while($row = mysqli_fetch_assoc($sql)){
		  echo '<tr>';
		  echo '<td>' .$i. '</td>';
		  echo '<td>' .$row['subject']. '</td>';
		  echo '<td>' .$row['description']. '</td>';
		  echo '<td>' .$row['date']. '</td>';
		  echo '</tr>';
		  $i++;
	  }
	  ?>
	  </table>
	  <?php
  }

?>
