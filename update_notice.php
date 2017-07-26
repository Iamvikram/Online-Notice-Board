 <?php
 
 extract($_POST);
 if(isset($send)){
	 
		 mysqli_query($conn,"update  notice set subject='$subject',description='$details' where notice_id='$id' ");
	 
	 $msg = '<font colo="blue">Notice updated successfully  !! </font>';
 }
 
 ?>
 
 
 <h2 style="color:green">Update notice here </h2>
 <form method="post">
     <div class="row">
	    <div class="col-sm-4"></div>
		<div class="col-sm-3"><?php echo @$msg ; ?> </div>
	 </div>
	 <div class="row">
	    <div class="col-sm-2">Enter Notice Id</div>
		<div class="col-sm-4"><input type="number" name ="id" class="form-control" required /> </div>
	 </div>
	  <div class="row">
	    <div class="col-sm-2">Enter Your Subject</div>
		<div class="col-sm-4"><input type="text" name ="subject" class="form-control" required /> </div>
	 </div>
	 <br>
	 <div class="row">
	    <div class="col-sm-2">Enter Your Details</div>
		<div class="col-sm-4"><textarea  name ="details" class="form-control" rows="5" required /></textarea> </div>
	 </div>
     <br>
	
	 <br>
      <div class="row">
	     <div class="col-sm-4 col-sm-offset-2">
		    <button type="submit" name="send" class="btn btn-success btn-sm">Update Notice</button>
			<button type="reset"  class="btn btn-success btn-sm">Reset</button>
		  </div>
	  </div>
 
 </form>