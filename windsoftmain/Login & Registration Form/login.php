<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		 session_start();
	
		   $link=mysqli_connect("localhost","root","","windsoft");
		 if($link===false)
		 {
			 die("ERROR : Could not connect . " . mysqli_connect_error());
		 }
		  else
		  {
		  
		  $username=$_POST["t1"];
		  $password=$_POST["t2"];
		  $result=mysqli_query($link,"select * from login where username='$username'and password='$password'");
			$row=mysqli_fetch_array($result);
			  $usertype=$row['usertype'];
			  $id=$row['id'];
		  if(mysqli_num_rows($result)>0)
		  {
			 
			  if($row['usertype']=='Windsoft Admin')
			  {
				   $_SESSION["username"]=$username;
				  $_SESSION["id"]=$id;
				  
				   header("Location:../Windsoftprogram/WindAdminHome.php");
			  }
			  elseif($row['usertype']=='CKL Head')
			  {
				  
				   $_SESSION["username"]=$username;
				  $_SESSION["id"]=$id;
				  
			      header("Location:#");
			  }
			  elseif($row['usertype']=='ATL Office Administration')
			  {
				  
				  $_SESSION["id"]=$id;
			      header("Location:../Windsoftprogram/WindStafeHome.php");
			  }
		 
			
		  }
		 else
		 {
			 $m1="invalid Username/Password";
				 $_SESSION['m1']=$m1;
			 header("Location:index.php");
		 }
		  }
		  
		 
		  ?>
</body>
</html>
