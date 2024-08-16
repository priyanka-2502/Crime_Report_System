<!DOCTYPE html>
<html>
<head>
    <?php
    session_start();
    if(!isset($_SESSION['x']))
        header("location:headlogin.php");
    $conn=mysqli_connect("localhost","root","","crime_portal");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
    mysqli_select_db($conn,"crime_portal");
    
    $query="select i_id,i_name,location from police_station";
    $result=mysqli_query($conn,$query);  
    ?>
    
	<title>Head View Police Station</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="register.css">

</head>
<body style="background-image: url(st.jpg);background-size:cover;
background-position: center;">
	<nav>
  
    
  
      <div class="logo"><a href="home.html"><b>Crime Portal</b></a>
    </div>
    <div class="container">
    <div class="menu">
      
      
        <a href="official_login.html">Official Login</a>
           
        
        <a href="headhome.php">HQ Home</a>
    
        <a href="headHome.php">View Complaints</a>
        <a href="h_logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a>
  
    </div>
  </div>
 </nav>
   
 <div  style="margin-top: 10%;margin-left: 45%">
     
   <a href="policestation_register.php" class="btn btn-primary">Add Police Station</a>
 </div>
    
<div style="padding:50px;">
   <table class="table table-bordered">
    <thead class="thead-dark" style="background-color: black; color: white;">
      <tr>
        <th scope="col">Incharge Id</th>
        <th scope="col">Incharge Name</th>
        <th scope="col">Location of Police Station</th>
      </tr>
    </thead>

<?php
      while($rows=mysqli_fetch_assoc($result)){
    ?> 

    <tbody style="background-color: white; color: black;">
      <tr>
        <td><?php echo $rows['i_id']; ?></td>
        <td><?php echo $rows['i_name']; ?></td>     
        <td><?php echo $rows['location']; ?></td>         
      </tr>
    </tbody>
    
    <?php
    } 
    ?>
  
</table>
 </div>


 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>