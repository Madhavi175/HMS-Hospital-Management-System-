<?php 
$con=new mysqli("localhost","root","","hospital");

$query="SELECT * FROM bill";
$result=$con->query($query);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity=" sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>HMS MAIN PAGE</title>
   
    </head>
   <body>
         <div class="container-fluid ">
       <div class="row header">
         <div class="col-md-2  headone">
           <h3>HMS</h3>
         </div>
          <div class="col-md-6 headone">
           <h1 style="text-align:center">Hospital Management System</h1>
           </div>
           <div class="col-md-4">
                <span style="color:orange;">Welcome!<span><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>&nbsp&nbsp&nbsp <button type="button" class="btn btn-light"><a href="index.php">Logout</button>
                </span></a>
            </div>
         </div>
       </div>
         <nav aria-label="breadcrumb">
             <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Print Bill Information</li>
            </ol>
           </nav>
         <div class="container-fluid">
        <table id="example" class="display" style="width:100%" class="table table-striped ">
        <thead>
            <tr style="width: ">
                
                <th>Date</th>
                <th>Rect.No</th>
                <th>Pateint Name</th>
                <th>Address</th>
                <th>Contact No</th>
                <th>Admit Date</th>
                <th>Discharge Date</th>
                <th>Bed No</th>
                <th>Payment mod</th>
                <th>Description</th>
                <th>Amount</th>
                <th>Action</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>

           <?php 
            while($data=$result->fetch_assoc())
             {
             
             echo "<tr>";
             echo "<td>".$data ['date1']."</td>";
             echo "<td>".$data ['Receiptno']."</td>";  
             echo "<td>".$data ['pateint_name']."</td>";
             echo "<td>".$data ['address']."</td>";
             echo "<td>".$data ['contno']."</td>";
             echo "<td>".$data ['admit_dt']."</td>";
             echo "<td>".$data ['discharge_dt']."</td>";
             echo "<td>".$data ['bedno']."</td>";
             echo "<td>".$data ['paymod']."</td>";
              echo "<td>".$data ['discrip']."</td>";
             echo "<td>".$data ['amt']."</td>";
            echo "<td>" ?><a href="print.php?id=<?php echo $data["id"];?>"  < button type="button" class="btn btn-primary" style="border-radius:30px;">print</button></a><?php echo "</td>";
             echo "<td>" ?><a href="delete_view.php?id=<?php echo $data["id"];?>"< button type="button" class="btn btn-danger" style="border-radius:30px;">DELETE</button></a><?php echo "</td>";
             echo "</tr>"; 

            
            
              }
             
              ?>
         
        </tbody>
       
    </table>
          
          </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
    $('#example').DataTable();
    } );
    </script>
    <script type="text/javascript">
             
        function myFunction() {
          window.print();
        }
       
    </script>
  </body>
</html>