<!DOCTYPE html>
<html>
<?php
if(isset($_POST['s'])){
    $con=mysqli_connect('localhost','root','','crime_portal');
    if(!$con)
    {
        die('could not connect: '.mysqli_error());
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
       
        $c_id=$_POST['c_id'];
        $d_o_u=$_POST['d_o_u'];
        $case_update=$_POST['case_update'];
       // $password=md5($u_pass);
       //INSERT INTO `crime_portal`.`update_case` (`c_id`, `d_o_u`, `case_update`) 
       //VALUES ('3', '2022-03-04 14:00:59', 'criminal has been caught');
       $reg="insert into update_case values('$c_id','$d_o_u','$case_update')";
        mysqli_select_db($con,"crime_portal()");
        $res=mysqli_query($con,$reg);
        if(!$res)
        {
        $message1 = "User Already Exist";
        echo "<script type='text/javascript'>alert('$message1');</script>";
    }
            else
    {
        $message = "User Registered Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    }
}
?>
  
<script>
     function f1()
        {
            var sta=document.getElementById("name1").value;
            var sta1=document.getElementById("email1").value;
            var sta2=document.getElementById("pass").value;
            var sta3=document.getElementById("addr").value;
            var sta4=document.getElementById("aadh").value;
            var sta5=document.getElementById("mobno").value;
	   
  var x=sta.trim();
  var x1=sta1.indexOf(' ');
  var x2=sta2.indexOf(' ');
  var x3=sta3.trim();
  var x4=sta4.indexOf(' ');
	var x5=sta5.indexOf(' ');
	if(sta!="" && x==""){
		document.getElementById("name1").value="";
		document.getElementById("name1").focus();
		  alert("Space Not Allowed");
        }
        
         else if(sta1!="" && x1>=0){
    document.getElementById("email1").value="";
    document.getElementById("email1").focus();
      alert("Space Not Allowed");
        }
        else if(sta2!="" && x2>=0){
    document.getElementById("pass").value="";
    document.getElementById("pass").focus();
      alert("Space Not Allowed");
        }
        else if(sta3!="" && x3==""){
    document.getElementById("addr").value="";
    document.getElementById("addr").focus();
      alert("Space Not Allowed");
        }
        else if(sta4!="" && x4>=0){
    document.getElementById("aadh").value="";
    document.getElementById("aadh").focus();
      alert("Space Not Allowed");
        }
        else if(sta5!="" && x5>=0){
    document.getElementById("mobno").value="";
    document.getElementById("mobno").focus();
      alert("Space Not Allowed");
        }
}
</script>    
    
<head>
<title>User Registration</title>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
<link href="register.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>

<nav>
  <div class="container">
    <div class="navbar-header">
      
      <div class="logo" href="home.php"><b>Crime Portal</b></div>
    </div>
    <div class="menu">
    
      <a href="home.html"><i class="fa fa-home"></i>home</a>
             <a href="#"><i class="fa fa-user"></i> registration</a>  

       
</div>
  
  </div>
</nav>
	
<div class="video" style="margin-top: 5%"> 
	<div class="center-container">
		 <div class="bg-agile">
			<br><br>
			<div class="login-form">	
				<form action="#" method="post">
					<p style="color:#dfdfdf">complaint id</p><input type="text"  name="c_id"  required="" id="c_id" onfocusout="f1()" />
					<p style="color:#dfdfdf">date of update</p><input type="date"  name="d_o_u"  required="" id="d_o_u" onfocusout="f1()"/>
                
					<p style="color:#dfdfdf">case_update</p><input type="text"  name="case_update"  required="" id="case_update" onfocusout="f1()"/>
					
				<a href="home.html">	<input type="submit" value="Submit" name="s"></a>
				</form>	
			</div>	
		</div>
	</div>	
</div>	
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>