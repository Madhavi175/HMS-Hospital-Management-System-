
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
    <title>HMS MAIN PAGE</title>
    <style type="text/css">
      .main{
        width:700px;
        height: 1000px;
        border:1px solid black;
        padding:30px;
        margin:0 auto;
        
      }
      body {
  background-image: url('images/receipt.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
    </style>
    </head>
   <body>
      <div class="container" >
         <div class="main">
            <div class="row">
              <div class="col-md-3">
                <img src="">
              </div>
              <div class="col-md-7">
                <h4 style="padding:5px; color:blue; ">Hospital management System</h4>
                <p style="text-align:center;color:black;font-family:bold;  ">Manish nagar,Near Reliance Fresh,<span>ph.no:123456789,pin no:441601</span></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-12">
                <h5 style="text-align: center"><u>Receipt</u></h5>
              </div>
            </div><br><br>
            
             <div class="row">
               <div class="col-md-12">
                 <form method="POST" action="bill_code.php" style="color: #000000 ;font-family:bold; ">
                  <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label" >Date:</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="inputEmail3" placeholder="Date" name="date1">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Receipt No:</label>
                <div class="col-sm-10">
                  <input type="num" class="form-control" id="inputEmail3" placeholder="Receiptno" name="Receiptno">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Pateint Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" placeholder="Pateint Name" name="pateint_name">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="Address" name="address">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Contact No</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="inputPassword3" placeholder="Contact No" name="contno">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Admit Date</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="inputPassword3" placeholder="Admit Date" name="admit_dt">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Discharge Date</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="inputPassword3" placeholder="Dischare Date" name="discharge_dt">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Bed No</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="inputPassword3" placeholder="Bed No" name="bedno">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Mode of payment</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="Payment Mode" name="paymod">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Discription</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="Discription" name="discrip">
                </div>
              </div>
             
               <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Total Amount</label>
                <div class="col-sm-10">
                  <input type="num" class="form-control" id="inputPassword3" placeholder="Amount" name="amt">
                </div>
              </div>
               
              <div class="form-group row">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary" style="margin-left:250px;" value="submit" name="submit">Submit</button>
                </div>
              </div>
            </form>
               </div>
            </div>
         </div>

       </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>