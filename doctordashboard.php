<?Php
include('header.php');
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
          crossorigin="anonymous">

    <!-- FullCalendar CSS -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css' rel='stylesheet' />

    <style>
      
      .content{
       margin-top: 70px; 
     
}      
.breadcrumb{
   justify-content: center;
}
.caption{
    margin-left: 70px;
}
    </style>
    <title>Sidebar Toggle</title>
</head>
<body>




<!-- Dashboard Panel -->
<div class="content">
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-btn">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"></li>
                </ol>
            </nav>
            <!-- Your dashboard content here -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="appointment">
                            <div class="caption">
                                <i class="fa fa-paperclip fa-3x" aria-hidden="true"></i>
                                <h3>My Appointment</h3>
                                <div class="button-grp">
                                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#appointmenthistory" role="tab" style="background-color:#c2d6d6; color:black; font-size:18px;">View Appointment History</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      


</body>
</html>
<?Php
include('sidebardoctor.php');
?>