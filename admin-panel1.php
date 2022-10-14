<!DOCTYPE html>
<?php 
$con=mysqli_connect("localhost","root","","hospitalms");

include('newfunc.php');

// DOCTOR 
if(isset($_POST['docsub']))
{
  $doctorname=$_POST['doctorname'];
  $doctor=$_POST['doctor'];
  $dpassword=$_POST['dpassword'];
  $demail=$_POST['demail'];
  $spec=$_POST['special'];
  $docFees=$_POST['docFees'];
  $query="insert into doctb(doctorname,username,password,email,spec,docFees)values('$doctorname','$doctor','$dpassword','$demail','$spec','$docFees')";
  $result=mysqli_query($con,$query);
  if($result)
    {
      echo "<script>alert('Doctor added successfully!');</script>";
  }
}


if(isset($_POST['docsub1']))
{
  $demail=$_POST['demail'];
  $query="delete from doctb where email='$demail';";
  $result=mysqli_query($con,$query);
  if($result)
    {
      echo "<script>alert('Doctor removed successfully!');</script>";
  }
  else{
    echo "<script>alert('Unable to delete!');</script>";
  }
}


// STAFF
if(isset($_POST['stfsub']))
{
  $name=$_POST['name'];
  $stafftype=$_POST['stftype'];
  $stfemail=$_POST['stfemail'];
  $stfcontct=$_POST['stfcontct'];
  $query="insert into stftb(name,stftype,stfemail,stfcontct)values('$name','$stafftype','$stfemail','$stfcontct')";
  $result=mysqli_query($con,$query);
  if($result)
    {
      echo "<script>alert('Staff added successfully!');</script>";
  }
}


if(isset($_POST['stfsub1']))
{
  $stfemail=$_POST['stfemail'];
  $query="delete from stftb where stfemail='$stfemail';";
  $result=mysqli_query($con,$query);
  if($result)
    {
      echo "<script>alert('Staff removed successfully!');</script>";
  }
  else{
    echo "<script>alert('Unable to delete!');</script>";
  }
}

// ROOM/WARD

if(isset($_POST['rwsub']))
{
  $type=$_POST['type'];
  $buildingname=$_POST['buildingname'];
  $floor=$_POST['floor'];
  $number=$_POST['number'];
  $name=$_POST['name'];
  $query="insert into rwtb(type,buildingname,floor,number,name)values('$type','$buildingname','$floor','$number','$name')";
  $result=mysqli_query($con,$query);
  if($result)
    {
      echo "<script>alert('Added successfully!');</script>";
  }
}


if(isset($_POST['rwsub1']))
{
  
  $number=$_POST['number'];
  $query="delete from rwtb where number='$number';";
  $result=mysqli_query($con,$query);
  if($result)
    {
      echo "<script>alert('Removed successfully!');</script>";
  }
  else{
    echo "<script>alert('Unable to delete!');</script>";
  }
}

// Operating room schedule

if(isset($_POST['opsub']))
{
  $id = floor(microtime(true) * 1000);
  $patient=$_POST['patient'];
  $doctor=$_POST['doctor'];
  $date=$_POST['date'];
  $time=$_POST['time'];
  $operation=$_POST['operation'];
  $query="insert into optb(id,patient,doctor,date,time,operation)values('$id','$patient','$doctor','$date','$time','$operation')";
  $result=mysqli_query($con,$query);
  if($result)
    {
      echo "<script>alert('Added successfully!');</script>";
  }
}


if(isset($_POST['opsub1']))
{
  $id=$_POST['id'];
  $query="delete from optb where id='$id';";
  $result=mysqli_query($con,$query);
  if($result)
    {
      echo "<script>alert('Removed successfully!');</script>";
  }
  else{
    echo "<script>alert('Unable to delete!');</script>";
  }
}


// Staff&Ward schedule  

if(isset($_POST['swssub']))
{
  $id = floor(microtime(true) * 1000);
  $staff=$_POST['staff'];
  $ward=$_POST['ward'];
  $date=$_POST['date'];
  $shift=$_POST['shift'];
  $query="insert into swstb(id,staff,ward,date,shift)values('$id','$staff','$ward','$date','$shift')";
  $result=mysqli_query($con,$query);
  if($result)
    {
      echo "<script>alert('Added successfully!');</script>";
  }
}


if(isset($_POST['swssub1']))
{
  $id=$_POST['id'];
  $query="delete from swstb where id='$id';";
  $result=mysqli_query($con,$query);
  if($result)
    {
      echo "<script>alert('Removed successfully!');</script>";
  }
  else{
    echo "<script>alert('Unable to delete!');</script>";
  }
}



?>
<html lang="en">
  <head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="images\pngegg.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css?ver=<?php echo rand(111,999)?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <a class="navbar-brand" href="" style="font-family: Times"> Arogya Hospital </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <script >
    var check = function() {
  if (document.getElementById('dpassword').value ==
    document.getElementById('cdpassword').value) {
    document.getElementById('message').style.color = '#5dd05d';
    document.getElementById('message').innerHTML = 'Matched';
  } else {
    document.getElementById('message').style.color = '#f55252';
    document.getElementById('message').innerHTML = 'Password fields doesnot match';
  }
}

    function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};
  </script>

  <style >
    .bg-primary {
      color: #F0F2F0;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #78c7ee, #8e74dd);  /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #78c7ee, #8e74dd); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

.col-md-4{
  max-width:20% !important;
}

.list-group-item.active {
    z-index: 2;
    color: #fff;
    background: #F0F2F0; 
    background: -webkit-linear-gradient(to right, #78c7ee, #8e74dd);
    background: linear-gradient(to right, #78c7ee, #8e74dd);
    border-color: #c3c3c3;
}
.text-primary {
    color: #8e74dd!important;
}

#cpass {
  display: -webkit-box;
}

#list-app{
  font-size:15px;
}

.btn-primary{
  -color: #3c50c1;
  border-color: #3c50c1;
}
  </style>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="logout1.php"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
  </div>
</nav>
  </head>
  <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
  </style>
  <body style="padding-top:50px;">
   <div class="container-fluid" style="margin-top:50px;">
    <div class="row">
  <div class="col-md-4" style="max-width:25%;margin-top: -1%;margin-left: 35%;text-align: center; font-family: Times">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-dash-list" data-toggle="list" href="#list-dash" role="tab" aria-controls="home">Menu</a>
      <a class="list-group-item list-group-item-action" href="#list-doc" id="list-doc-list"  role="tab"    aria-controls="home" data-toggle="list">View Doctors</a>
      <a class="list-group-item list-group-item-action" href="#list-pat" id="list-pat-list"  role="tab" data-toggle="list" aria-controls="home">View Patients</a>
      <a class="list-group-item list-group-item-action" href="#list-stf" id="list-stf-list"  role="tab" data-toggle="list" aria-controls="home">View Staffs</a>
      <a class="list-group-item list-group-item-action" href="#list-rw" id="list-rw-list"  role="tab" data-toggle="list" aria-controls="home">View Rooms/Wards</a>
      <a class="list-group-item list-group-item-action" href="#list-schd" id="list-schd-list"  role="tab" data-toggle="list" aria-controls="home">View Schedules</a>
      <a class="list-group-item list-group-item-action" href="#list-app" id="list-app-list"  role="tab" data-toggle="list" aria-controls="home">Appointment Details</a>
      <a class="list-group-item list-group-item-action" href="#list-pres" id="list-pres-list"  role="tab" data-toggle="list" aria-controls="home">Prescription List</a>
      <a class="list-group-item list-group-item-action" href="#list-settings" id="list-adoc-list"  role="tab" data-toggle="list" aria-controls="home">Add Doctor</a>
      <a class="list-group-item list-group-item-action" href="#list-settings1" id="list-ddoc-list"  role="tab" data-toggle="list" aria-controls="home">Delete Doctor</a>
      <a class="list-group-item list-group-item-action" href="#list-settings2" id="list-astf-list"  role="tab" data-toggle="list" aria-controls="home">Add Staff</a>
      <a class="list-group-item list-group-item-action" href="#list-settings3" id="list-dstf-list"  role="tab" data-toggle="list" aria-controls="home">Delete Staff</a>
      <a class="list-group-item list-group-item-action" href="#list-settings4" id="list-arw-list"  role="tab" data-toggle="list" aria-controls="home">Add Room</a>
      <a class="list-group-item list-group-item-action" href="#list-settings5" id="list-drw-list"  role="tab" data-toggle="list" aria-controls="home">Delete Room</a>
      <a class="list-group-item list-group-item-action" href="#list-settings6" id="list-aops-list"  role="tab" data-toggle="list" aria-controls="home">Add Operating Theatre Schedule</a>
      <a class="list-group-item list-group-item-action" href="#list-settings7" id="list-dops-list"  role="tab" data-toggle="list" aria-controls="home">Delete Operating Theatre Schedule</a>
      <a class="list-group-item list-group-item-action" href="#list-settings8" id="list-asws-list"  role="tab" data-toggle="list" aria-controls="home">Add Staff & Ward Schedule</a>
      <a class="list-group-item list-group-item-action" href="#list-settings9" id="list-dsws-list"  role="tab" data-toggle="list" aria-controls="home">Delete Staff & Ward Schedule</a>
      <a class="list-group-item list-group-item-action" href="#list-mes" id="list-mes-list"  role="tab" data-toggle="list" aria-controls="home">Queries</a>
      
     
      
    </div><br>
  </div>
  <div class="col-md-8" style="margin-top: 3%;font-family: Times">
    <div class="tab-content" id="nav-tabContent" style="width: 980px;">



      <div class="tab-pane fade show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
        <div class="container-fluid container-fullw bg-white; font-family: Times" >
              <div class="row">
               <div class="col-sm-4">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body">
                      
                      <script>
                        function clickDiv(id) {
                          document.querySelector(id).click();
                        }
                      </script> 
                      
                    </div>
                  </div>
                </div>

                <div class="col-sm-4" style="left: -3%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      
                    </div>
                  </div>
                </div>
              

                <div class="col-sm-4">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      
                    </div>
                  </div>
                </div>
                </div>

                <div class="row">
                <div class="col-sm-4" style="left: 103%;margin-top: -16%;">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      
                    </div>
                  </div>
                </div>


                <div class="col-sm-4" style="left: 108%;margin-top: -16%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      
                    </div>
                  </div>
                </div>
                </div>
                        

      
                
              </div>
            </div>
      
                
      





<!-- view doctor -->
      
  <div class="tab-pane fade" id="list-doc" role="tabpanel" aria-labelledby="list-home-list" style="margin-left: 35%; margin-right: -50%">
    <div class="col-md-8">
      <form class="form-group" action="doctorsearch.php" method="post">
        <div class="row">
        <div class="col-md-10"><input type="text" name="doctor_contact" placeholder="Enter Email ID" class = "form-control"></div>
        <div class="col-md-2"><input type="submit" name="doctor_search_submit" class="btn btn-primary" value="Search"></div></div>
      </form>
  </div>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Specialization</th>
                    <th scope="col">Email</th>
                    <th scope="col">Username</th>
                    <th scope="col">Fees</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $con=mysqli_connect("localhost","root","","hospitalms");
                    global $con;
                    $query = "select * from doctb";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
                      $doctorname = $row['doctorname'];
                      $spec = $row['spec'];
                      $email = $row['email'];
                      $username = $row['username'];
                      $password = $row['password'];
                      $docFees = $row['docFees'];
                      
                      echo "<tr>
                        <td>$cnt</td>
                        <td>$doctorname</td>
                        <td>$spec</td>
                        <td>$email</td>
                        <td>$username</td>
                        <td>$$docFees</td>
                      </tr>";
                   $cnt++; }

                  ?>
                </tbody>
              </table>
        <br>
      </div>

<!-- view staff -->

<div class="tab-pane fade" id="list-stf" role="tabpanel" aria-labelledby="list-home-list" style="margin-left: 35%; margin-right: -50%">
    <div class="col-md-8">
      <form class="form-group" action="staffsearch.php" method="post">
        <div class="row">
        <div class="col-md-10"><input type="text" name="staff_contact" placeholder="Enter Email ID" class = "form-control"></div>
        <div class="col-md-2"><input type="submit" name="staff_search_submit" class="btn btn-primary" value="Search"></div></div>
      </form>
  </div>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Staff Type</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact No.</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $con=mysqli_connect("localhost","root","","hospitalms");
                    global $con;
                    $query = "select * from stftb";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
                      $name = $row['name'];
                      $stftype = $row['stftype'];
                      $stfemail = $row['stfemail'];
                      $stfcontct = $row['stfcontct'];                     
                      
                      echo "<tr>
                        <td>$cnt</td>
                        <td>$name</td>
                        <td>$stftype</td>
                        <td>$stfemail</td>
                        <td>$stfcontct</td>
                      </tr>";
                   $cnt++; }

                  ?>
                </tbody>
              </table>
        <br>
      </div>

<!-- view room/ward info -->

<div class="tab-pane fade" id="list-rw" role="tabpanel" aria-labelledby="list-home-list" style="margin-left: 35%; margin-right: -50%">
    <div class="col-md-8">
      <form class="form-group" action="roomsearch.php" method="post">
        <div class="row">
        <div class="col-md-10"><input type="text" name="staff_contact" placeholder="Enter Email ID" class = "form-control"></div>
        <div class="col-md-2"><input type="submit" name="staff_search_submit" class="btn btn-primary" value="Search"></div></div>
      </form>
  </div>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Type</th>
                    <th scope="col">Building</th>
                    <th scope="col">Floor</th>
                    <th scope="col">Number</th>
                    <th scope="col">Name</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $con=mysqli_connect("localhost","root","","hospitalms");
                    global $con;
                    $query = "select * from rwtb";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
                      $type = $row['type'];
                      $buildingname = $row['buildingname'];
                      $floor = $row['floor'];
                      $number = $row['number']; 
                      $name = $row['name'];                    
                      
                      echo "<tr>
                        <td>$cnt</td>
                        <td>$type</td>
                        <td>$buildingname</td>
                        <td>$floor</td>
                        <td>$number</td>
                        <td>$name</td>
                      </tr>";
                   $cnt++; }

                  ?>
                </tbody>
              </table>
        <br>
      </div>

<!-- view schedules -->

<div class="tab-pane fade" id="list-schd" role="tabpanel" aria-labelledby="list-home-list" style="margin-left: 35%; margin-right: -50%">
    <!-- <div class="col-md-8"> -->
      <!-- <form class="form-group" action="roomsearch.php" method="post">
        <div class="row">
        <div class="col-md-10"><input type="text" name="staff_contact" placeholder="Enter Email ID" class = "form-control"></div>
        <div class="col-md-2"><input type="submit" name="staff_search_submit" class="btn btn-primary" value="Search"></div></div>
      </form> -->
  <!-- </div> -->
              <h2> Operation Theatre Schedule</h2>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Schedule Id</th>
                    <th scope="col">Patient</th>
                    <th scope="col">Doctor</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Operation</tr>
                </thead>
                <tbody>
                  <?php 
                    $con=mysqli_connect("localhost","root","","hospitalms");
                    global $con;
                    $query = "select * from optb";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
                      $id = $row['id'];
                      $patient = $row['patient'];
                      $doctor = $row['doctor'];
                      $date = $row['date']; 
                      $time = $row['time'];
                      $operation = $row['operation'];                    
                      
                      echo "<tr>
                        <td>$cnt</td>
                        <td>$id</td>
                        <td>$patient</td>
                        <td>$doctor</td>
                        <td>$date</td>
                        <td>$time</td>
                        <td>$operation</td>
                      </tr>";
                   $cnt++; }

                  ?>
                </tbody>
              </table>

              <h2> Staff and Ward Schedule</h2>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Schedule Id</th>
                    <th scope="col">Staff</th>
                    <th scope="col">Ward</th>
                    <th scope="col">Date</th>
                    <th scope="col">Shift</th>
                </thead>
                <tbody>
                  <?php 
                    $con=mysqli_connect("localhost","root","","hospitalms");
                    global $con;
                    $query = "select * from swstb";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
                      $id = $row['id'];
                      $staff = $row['staff'];
                      $ward = $row['ward'];
                      $date = $row['date']; 
                      $shift = $row['shift'];                  
                      
                      echo "<tr>
                        <td>$cnt</td>
                        <td>$id</td>
                        <td>$staff</td>
                        <td>$ward</td>
                        <td>$date</td>
                        <td>$shift</td>
                      </tr>";
                   $cnt++; }

                  ?>
                </tbody>
              </table>
        <br>
      </div>
    
<!-- view patient -->

    <div class="tab-pane fade" id="list-pat" role="tabpanel" aria-labelledby="list-pat-list" style="margin-left: 35%; margin-right: -50%">

       <div class="col-md-8">
      <form class="form-group" action="patientsearch.php" method="post">
        <div class="row">
        <div class="col-md-10"><input type="text" name="patient_contact" placeholder="Enter Contact" class = "form-control"></div>
        <div class="col-md-2"><input type="submit" name="patient_search_submit" class="btn btn-primary" value="Search"></div></div>
      </form>
    </div>
        
              <table class="table table-hover">
                <thead>
                  <tr>
                  <th scope="col">#</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $con=mysqli_connect("localhost","root","","hospitalms");
                    global $con;
                    $query = "select * from patreg";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
                      $pid = $row['pid'];
                      $fname = $row['fname'];
                      $lname = $row['lname'];
                      $gender = $row['gender'];
                      $email = $row['email'];
                      $contact = $row['contact'];
                      
                      echo "<tr>
                        <td>$cnt</td>
                        <td>$fname $lname</td>
                        <td>$gender</td>
                        <td>$email</td>
                        <td>$contact</td>
                      </tr>";
                  $cnt++;  }

                  ?>
                </tbody>
              </table>
        <br>
      </div>


      <div class="tab-pane fade" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list" style="margin-left: 35%; margin-right: -50%">

       <div class="col-md-12">
  
        <div class="row">
        
    
        
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                  <th scope="col">Doctor</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Appointment Time</th>
                    <th scope="col">Disease</th>
                    <th scope="col">Allergy</th>
                    <th scope="col">Prescription</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $con=mysqli_connect("localhost","root","","hospitalms");
                    global $con;
                    $query = "select * from prestb";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
                      $doctor = $row['doctor'];
                      $pid = $row['pid'];
                      $ID = $row['ID'];
                      $fname = $row['fname'];
                      $lname = $row['lname'];
                      $appdate = $row['appdate'];
                      $apptime = $row['apptime'];
                      $disease = $row['disease'];
                      $allergy = $row['allergy'];
                      $pres = $row['prescription'];

                      
                      echo "<tr>
                      <td>$cnt</td>
                        <td>$doctor</td>
                        <td>$fname $lname</td>
                        <td>$appdate</td>
                        <td>$apptime</td>
                        <td>$disease</td>
                        <td>$allergy</td>
                        <td>$pres</td>
                      </tr>";
                   $cnt++; }

                  ?>
                </tbody>
              </table>
        <br>
      </div>
      </div>
      </div>




      <div class="tab-pane fade" id="list-app" role="tabpanel" aria-labelledby="list-pat-list" style="margin-left: 35%; margin-right: -50%">

         <div class="col-md-8">
      <form class="form-group" action="appsearch.php" method="post">
        <div class="row">
        <div class="col-md-10"><input type="text" name="app_contact" placeholder="Enter Contact" class = "form-control"></div>
        <div class="col-md-2"><input type="submit" name="app_search_submit" class="btn btn-primary" value="Search"></div></div>
      </form>
    </div>
        
              <table class="table table-hover">
                <thead>
                  <tr>
                  <th scope="col">#</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Doctor</th>
                    <th scope="col">Fees</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 

                    $con=mysqli_connect("localhost","root","","hospitalms");
                    global $con;

                    $query = "select * from appointmenttb;";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
                  ?>
                      <tr>
                        <td><?php echo $cnt;?></td>
                        <td><?php echo $row['fname'];?> <?php echo $row['lname'];?></td>
                        <td><?php echo $row['gender'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['contact'];?></td>
                        <td><?php echo $row['doctor'];?></td>
                        <td><?php echo '$'.$row['docFees'];?></td>
                        <td><?php echo $row['appdate'];?></td>
                        <td><?php echo $row['apptime'];?></td>
                        <td>
                    <?php if(($row['userStatus']==1) && ($row['doctorStatus']==1))  
                    {
                      echo "Active";
                    }
                    if(($row['userStatus']==0) && ($row['doctorStatus']==1))  
                    {
                      echo "Cancelled by Patient";
                    }

                    if(($row['userStatus']==1) && ($row['doctorStatus']==0))  
                    {
                      echo "Cancelled by Doctor";
                    }
                        ?></td>
                      </tr>
                    <?php $cnt++; } ?>
                </tbody>
              </table>
        <br>
      </div>

<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>

<!-- DOCTOR ADD -->

      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list" style="margin-left: 35%; margin-right: -50%">
        <form class="form-group" method="post" action="admin-panel1.php">
          <div class="row">
          <div class="col-md-4"><label>Doctor Name:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="doctorname" onkeydown="return alphaOnly(event);" required></div><br><br>
                  <div class="col-md-4"><label>Username:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="doctor" onkeydown="return alphaOnly(event);" required></div><br><br>
                  <div class="col-md-4"><label>Specialization:</label></div>
                  <div class="col-md-8">
                   <select name="special" class="form-control" id="special" required="required">
                      <option value="head" name="spec" disabled selected>Select Specialization</option>
                      <option value="General" name="spec">General</option>
                      <option value="Gynecologist" name="spec">Gynecologist</option>
                      <option value="Oncologist">Oncologist</option>
                      <option value="Cardiologist" name="spec">Cardiologist</option>
                      <option value="Gastroenterologist">Gastroenterologist</option>
                      <option value="Neurologist" name="spec">Neurologist</option>
                      <option value="Pediatrician" name="spec">Pediatrician</option>
                    </select>
                    </div><br><br>
                  <div class="col-md-4"><label>Email ID:</label></div>
                  <div class="col-md-8"><input type="email"  class="form-control" name="demail" required></div><br><br>
                  <div class="col-md-4"><label>Password:</label></div>
                  <div class="col-md-8"><input type="password" class="form-control"  onkeyup='check();' name="dpassword" id="dpassword"  required></div><br><br>
                  <div class="col-md-4"><label>Confirm Password:</label></div>
                  <div class="col-md-8"  id='cpass'><input type="password" class="form-control" onkeyup='check();' name="cdpassword" id="cdpassword" required>&nbsp &nbsp<span id='message'></span> </div><br><br>
                   
                  
                  <div class="col-md-4"><label>Consultancy Fees:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control"  name="docFees" required></div><br><br>
                </div>
          <input type="submit" name="docsub" value="Add Doctor" class="btn btn-primary">
        </form>
      </div>

     <!-- STAFF ADD -->

      <div class="tab-pane fade" id="list-settings2" role="tabpanel" aria-labelledby="list-settings2-list" style="margin-left: 35%; margin-right: -50%">
        <form class="form-group" method="post" action="admin-panel1.php">
          <div class="row">
                  <div class="col-md-4"><label>Name:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="name" onkeydown="return alphaOnly(event);" required></div><br><br>
                  <div class="col-md-4"><label>Staff Type:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="stftype"  required></div><br><br>
                  <div class="col-md-4"><label>Email:</label></div>
                  <div class="col-md-8"><input type="email" class="form-control" name="stfemail"  required></div><br><br>
                  <div class="col-md-4"><label>Contact No.:</label></div>
                  <div class="col-md-8"><input type="text"  class="form-control" name="stfcontct" required></div><br><br>
                  
          </div>
          <input type="submit" name="stfsub" value="Add Staff" class="btn btn-primary">
        </form>
      </div>

<!-- ADD Room / Ward -->

<div class="tab-pane fade" id="list-settings4" role="tabpanel" aria-labelledby="list-settings4-list" style="margin-left: 35%; margin-right: -50%">
        <form class="form-group" method="post" action="admin-panel1.php">
          <div class="row">
          
                  <div class="col-md-4"><label>Type:</label></div>
                  <div class="col-md-8">
                    <select name="type" class="form-control" id="type" required="required">
                      <option value="head" name="type" disabled selected>Select Type</option>
                      <option value="Room" name="type">Room</option>
                      <option value="Ward" name="type">Ward</option>
                     </select>
                    </div><br><br>
                    <div class="col-md-4"><label>Building:</label></div>
                  <div class="col-md-8">
                    <select name="buildingname" class="form-control" id="buildingname" required="required">
                      <option value="head" name="build" disabled selected>Select Building</option>
                      <option value="Building A" name="build">Building A</option>
                      <option value="Building B" name="build">Building B</option>
                      <option value="Building C" name="build">Building C</option>
                     </select>
                    </div><br><br>
                    <div class="col-md-4"><label>Floor:</label></div>
                  <div class="col-md-8">
                    <select name="floor" class="form-control" id="floor" required="required">
                      <option value="head" name="type" disabled selected>Select Floor</option>
                      <option value="Ground floor" name="floor">Ground floor</option>
                      <option value="1st floor" name="floor">1st floor</option>
                      <option value="2nd floor" name="floor">2nd floor</option>
                      <option value="3rd floor" name="floor">3rd floor</option>
                      <option value="4th floor" name="floor">4th floor</option>
                      <option value="5th floor" name="floor">5th floor</option>
                     </select>
                    </div><br><br>
                  <div class="col-md-4"><label>Number:</label></div>
                  <div class="col-md-8"><input type="text"  class="form-control" name="number" required></div><br><br>
                  <div class="col-md-4"><label>Name:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="name" required></div><br><br>

           </div>
          <input type="submit" name="rwsub" value="Add" class="btn btn-primary">
        </form>
      </div>

<!-- ADD OP SCHEDULE -->

<div class="tab-pane fade" id="list-settings6" role="tabpanel" aria-labelledby="list-settings6-list" style="margin-left: 35%; margin-right: -50%">
        <form class="form-group" method="post" action="admin-panel1.php">
          <div class="row">

          
                  <div class="col-md-4"><label>Patient:</label></div>
                  <div class="col-md-8">
                   <select name="patient" class="form-control" id="patient" required="required">
                      <option value="head" name="patient" disabled selected>Select Patient</option>
                      
                      <?php 
                        $con=mysqli_connect("localhost","root","","hospitalms");
                        global $con;
                        $query = "select * from patreg";
                        $result = mysqli_query($con,$query);
                        $cnt=1;
                        while ($row = mysqli_fetch_array($result)){
                          $pid = $row['pid'];
                          $fname = $row['fname'];
                          $lname = $row['lname'];
    
                          
                          echo "<option value= $fname $lname name= $fname $lname>$fname $lname</option>";

                      $cnt++; }

                      ?>

                    </select>
                    </div><br><br>


                  <div class="col-md-4"><label>Doctor:</label></div>
                  <div class="col-md-8">
                   <select name="doctor" class="form-control" id="doctor" required="required">
                      <option value="head" name="doctor" disabled selected>Select Doctor</option>
                      
                      <?php 
                        $con=mysqli_connect("localhost","root","","hospitalms");
                        global $con;
                        $query = "select * from doctb";
                        $result = mysqli_query($con,$query);
                        $cnt=1;
                        while ($row = mysqli_fetch_array($result)){
                          $doctorname = $row['doctorname'];
                          $email = $row['email'];
                         
    
                          
                          echo "<option value= $doctorname name= $doctorname>$doctorname</option>";

                      $cnt++; }

                      ?>

                    </select>
                    </div><br><br>
                  <div class="col-md-4"><label>Date:</label></div>
                  <div class="col-md-8"><input type="date"  class="form-control" name="date" required></div><br><br>
                  <div class="col-md-4"><label>Time:</label></div>
                  <div class="col-md-8">
                   <select name="time" class="form-control" id="time" required="required">
                      <option value="head" name="time" disabled selected>Select Time</option>
                      <option value="09.00 a.m." name="time">09.00 a.m.</option>
                      <option value="12.00 p.m." name="time">12.00 p.m.</option>
                      <option value="03.00 p.m." name="time">03.00 p.m.</option>
                      <option value="06.00 p.m." name="time">06.00 p.m.</option>
                    </select>
                    </div><br><br>
                  <div class="col-md-4"><label>Operation:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control"  name="operation"  required></div><br><br>
                </div>
          <input type="submit" name="opsub" value="Add" class="btn btn-primary">
        </form>
      </div>

<!-- ADD S&W SCHEDULE -->

<div class="tab-pane fade" id="list-settings8" role="tabpanel" aria-labelledby="list-settings8-list" style="margin-left: 35%; margin-right: -50%">
        <form class="form-group" method="post" action="admin-panel1.php">
          <div class="row">

          
                  <div class="col-md-4"><label>Staff:</label></div>
                  <div class="col-md-8">
                   <select name="staff" class="form-control" id="staff" required="required">
                      <option value="head" name="staff" disabled selected>Select Staff</option>
                      
                      <?php 
                        $con=mysqli_connect("localhost","root","","hospitalms");
                        global $con;
                        $query = "select * from stftb";
                        $result = mysqli_query($con,$query);
                        $cnt=1;
                        while ($row = mysqli_fetch_array($result)){
                          
                          $name = $row['name'];
                          $stfemail = $row['stfemail'];
    
                          
                          echo "<option value= $name name= $name>$name</option>";

                      $cnt++; }

                      ?>

                    </select>
                    </div><br><br>


                  <div class="col-md-4"><label>Ward:</label></div>
                  <div class="col-md-8">
                   <select name="ward" class="form-control" id="ward" required="required">
                      <option value="head" name="ward" disabled selected>Select Ward</option>
                      
                      <?php 
                        $con=mysqli_connect("localhost","root","","hospitalms");
                        global $con;
                        $query = "select * from rwtb";
                        $result = mysqli_query($con,$query);
                        $cnt=1;
                        while ($row = mysqli_fetch_array($result)){
                          $number = $row['number'];
                          $type = $row['type'];
                         
    
                          
                          echo "<option value= $number name= $number>$number</option>";

                      $cnt++; }

                      ?>

                    </select>
                    </div><br><br>
                  <div class="col-md-4"><label>Date:</label></div>
                  <div class="col-md-8"><input type="date"  class="form-control" name="date" required></div><br><br>
                  <div class="col-md-4"><label>Shift:</label></div>
                  <div class="col-md-8">
                   <select name="shift" class="form-control" id="shift" required="required">
                      <option value="head" name="shift" disabled selected>Select Shift</option>
                      <option value="Night" name="shift">Night</option>
                      <option value="Day" name="shift">Day</option>
                    </select>
                    </div><br><br>
                </div>
          <input type="submit" name="swssub" value="Add" class="btn btn-primary">
        </form>
      </div>

<!-- DELETE DOCTOR -->

      <div class="tab-pane fade" id="list-settings1" role="tabpanel" aria-labelledby="list-settings1-list" style="margin-left: 35%; margin-right: -50%">
        <form class="form-group" method="post" action="admin-panel1.php">
          <div class="row">
          
                  <div class="col-md-4"><label>Email ID:</label></div>
                  <div class="col-md-8"><input type="email"  class="form-control" name="demail" required></div><br><br>
                  
                </div>
          <input type="submit" name="docsub1" value="Delete Doctor" class="btn btn-primary" onclick="confirm('do you really want to delete?')">
        </form>
      </div>

<!-- DELETE STAFF -->

     <div class="tab-pane fade" id="list-settings3" role="tabpanel" aria-labelledby="list-settings3-list" style="margin-left: 35%; margin-right: -50%">
        <form class="form-group" method="post" action="admin-panel1.php">
                <div class="row">
          
                  <div class="col-md-4"><label>Email:</label></div>
                  <div class="col-md-8"><input type="email"  class="form-control" name="stfemail" required></div><br><br>
                  
                </div>
          <input type="submit" name="stfsub1" value="Delete Staff" class="btn btn-primary" onclick="confirm('do you really want to delete?')">
        </form>
      </div>

<!-- DELETE Room/Ward -->

<div class="tab-pane fade" id="list-settings5" role="tabpanel" aria-labelledby="list-settings5-list" style="margin-left: 35%; margin-right: -50%">
        <form class="form-group" method="post" action="admin-panel1.php">
          <div class="row">
          
                  <div class="col-md-4"><label>Number:</label></div>
                  <div class="col-md-8"><input type="text"  class="form-control" name="number" required></div><br><br>
                  
                </div>
          <input type="submit" name="rwsub1" value="Delete" class="btn btn-primary" onclick="confirm('do you really want to delete?')">
        </form>
      </div>

<!-- DELETE OP SCHEDULE -->

<div class="tab-pane fade" id="list-settings7" role="tabpanel" aria-labelledby="list-settings7-list" style="margin-left: 35%; margin-right: -50%">
        <form class="form-group" method="post" action="admin-panel1.php">
          <div class="row">
          
                  <div class="col-md-4"><label>Schedule ID:</label></div>
                  <div class="col-md-8"><input type="text"  class="form-control" name="id" required></div><br><br>
                  
                </div>
          <input type="submit" name="opsub1" value="Delete Schedule" class="btn btn-primary" onclick="confirm('do you really want to delete?')">
        </form>
      </div>

<!-- DELETE S&W SHEDULE -->

<div class="tab-pane fade" id="list-settings9" role="tabpanel" aria-labelledby="list-settings9-list" style="margin-left: 35%; margin-right: -50%">
        <form class="form-group" method="post" action="admin-panel1.php">
          <div class="row">
          
                  <div class="col-md-4"><label>Schedule ID:</label></div>
                  <div class="col-md-8"><input type="text"  class="form-control" name="id" required></div><br><br>
                  
                </div>
          <input type="submit" name="swssub1" value="Delete Schedule" class="btn btn-primary" onclick="confirm('do you really want to delete?')">
        </form>
      </div>
       


    <div class="tab-pane fade" id="list-attend" role="tabpanel" aria-labelledby="list-attend-list">...</div>

       <div class="tab-pane fade" id="list-mes" role="tabpanel" aria-labelledby="list-mes-list" style="margin-left: 35%; margin-right: -50%">

         <div class="col-md-8">
      <form class="form-group" action="messearch.php" method="post">
        <div class="row">
        <div class="col-md-10"><input type="text" name="mes_contact" placeholder="Enter Contact" class = "form-control"></div>
        <div class="col-md-2"><input type="submit" name="mes_search_submit" class="btn btn-primary" value="Search"></div></div>
      </form>
    </div>
        
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Message</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 

                    $con=mysqli_connect("localhost","root","","hospitalms");
                    global $con;

                    $query = "select * from contact;";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
              
                      #$fname = $row['fname'];
                      #$lname = $row['lname'];
                      #$email = $row['email'];
                      #$contact = $row['contact'];
                  ?>
                      <tr>
                        <td><?php echo $cnt;?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['contact'];?></td>
                        <td><?php echo $row['message'];?></td>
                      </tr>
                    <?php $cnt++; } ?>
                </tbody>
              </table>
        <br>
      </div>



    </div>
  </div>
</div>
   </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
  </body>
</html>