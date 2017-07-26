<?php
$user = mysqli_query($conn,"select user_id,name,email,mobile,gender from user ");
 $r = mysqli_num_rows($user);
 if(!$r){
	 ?>
	 <h2  style="color:red;">No any user exists </h2>
<?php	 
	 }
	 else{
		 ?>
		 <script>
		  function deleteUser(id){
			  if(confirm("You want to delete this record ??")){
				  window.location.href="delete_user.php?id= "+id;
			  }
		  }
		 </script>
		 
<h2 style="color:#00FFCC"> All Users </h2>
<table class="table table-bordered">
     <tr class="success">
	    <th>Sr No.</th>
	    <th>User Name</th>
	    <th>Email</th>
	    <th>Mobile</th>
	    <th>Gender</th>
	    <th>Delete</th>
	 </tr>
<?php

$i=1;

while($row=mysqli_fetch_assoc($user)){
	
	echo '<tr>';
	echo '<td>'.$i.'</td>';
	echo '<td>'.$row['name'].'</td>';
	echo '<td>'.$row['email'].'</td>';
	echo '<td>'.$row['mobile'].'</td>';
	echo '<td>'.$row['gender'].'</td>';
	?>
	<td><a href="javascript:deleteUser( '<?php echo $row['user_id']; ?>')" style="color:red"><span class="glyphicon glyphicon-trash"></span></a></td><?php
	
	echo '</tr>';
	$i++;
}
?>
</table>
	 <?php } ?>

