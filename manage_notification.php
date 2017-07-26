
           
			 
			 
			 
			 <?php
				    $sql = mysqli_query($conn,"select * from notice");
					$r = mysqli_num_rows($sql);
					if(!$r){
						echo '<font color="red">No notification found </font>';
					}
					else{
					
				?>
				<script>
			     function deleteNotice(id){
					 if(confirm('You want to delete this record?')){
						 window.location.href="delete_notice.php?id ="+id;
						 
					 }
				 }
			 </script>
				 <h2 style="color:#00FFCC;">All Notice </h2>
			         <table class="table table-bordered">
					    <tr>
						    <td colspan="7"><a href ="index.php?page=add_notice" > Add New Notice </a> </td>
						</tr>
					 <tr class="success">
					    <td>Sr No.</td>
					    <td>Subject</td>
					    <td>Details</td>
					    <td>user</td>
					    <td>Date</td>
					    <td>Delete</td>
					    <td>Update</td>
					 </tr>
					 
					 <?php
					 
                        $i=1;
                        while($row=mysqli_fetch_assoc($sql)){
							echo '<tr>';
							echo '<td>'.$i.'</td>';
							echo '<td>'.$row['subject'].'</td>';
							echo '<td>'.$row['description'].'</td>';
							echo '<td>'.$row['user'].'</td>';
							echo '<td>'.$row['date'].'</td>';
						?>
                     <td><a href="javascript:deleteNotice('<?php echo $row['notice_id']; ?>')" style="color:red;"><span class="glyphicon glyphicon-trash"></span></a></td>
                  <?php					 
                     echo '<td><a href="index.php?page=update_notice" style="color:green;"><span class="glyphicon glyphicon-edit"></span></a></td>';	
                         echo '</tr>';
                         $i++;							  
						}						
					 
					 ?>
					 
					 </table>
			 
					<?php } ?>