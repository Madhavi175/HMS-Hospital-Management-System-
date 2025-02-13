
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
     

     <center style="border:1px solid black; width:700px;margin:0 auto;">
     <h3 style="text-align:center;">Payment Receipt of Hospital:</h3><br><br>
     <div class="row">
	<div class="col-md-12">
	 <h5>Receipt No:<?php echo mt_rand(1000000,9999999)?></h5>	
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<h6>Date: <?php echo date("d-F,Y",time());?></h6>
	</div>
	</div>
</div>
    <?php 
		$con=new mysqli("localhost","root","","hospital");
        $id=$_GET['id'];
		$query="SELECT * FROM bill where id='$id'";
		$result=$con->query($query);
		while($data=$result->fetch_assoc())
		{
      ?>
     <center>
     <table class="table table-striped   " style="width:600px;margin-top:3px;" >
     	
     
     	<tr>
     		<th>Pateint Name:</th>
     		<td><?php echo $data['pateint_name']?></td>
     	</tr>
     	<tr>
     		<th>Address:</th>
     		<td><?php echo $data['address']?></td>
     	</tr>
     	
     	<tr>
     		<th>Contact No</th>
     		<td><?php echo $data['contno']?></td>
     	</tr>
     	<tr>
     		<th>Admit Date</th>
     		<td><?php echo $data['admit_dt']?></td>
     	</tr>
     	
     	<tr>
     		<th>Discharge Date</th>
     		<td><?php echo $data['discharge_dt']?></td>
     	</tr>
     	<tr>
     		<th>Bed No</th>
     		<td><?php echo $data['bedno']?></td>
     	</tr>
     	<tr>
     		<th>Payment Mode</th>
     		<td><?php echo $data['paymod']?></td>
     	</tr>
     	<tr>
     		<th>Discription</th>
     		<td><?php echo $data['discrip']?></td>
     	</tr>
     	<tr>
     		<th>Total Amount</th>
     		<td><?php echo $data['amt']?></td>
     	</tr>
     	
     	
     	
     </table>
     <?php


      }
     ?>
</center>
</center>
<script type="text/javascript">
	print();
	window.close();
</script>