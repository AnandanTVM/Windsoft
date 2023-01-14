<!DOCTYPE html>
 <?php 
		   session_start();
		   ?>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<link rel="icon" href="wind1.jpg">
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="style.css">
         
    <title>Windsoft :- Login & Registration</title>
</head>
<body>
    
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>
 <script language="javascript">
				  function validation()
				  { 
					  var a1,a2;
				   a1=reg.t1.value;
				   a2=reg.t2.value;
				 
					  
					if(a1=="")
						{
							alert("Enter Username");
							reg.t1.focus();
							return true;
						}
				   if(a2=="")
						{
							alert("Enter Password");
							reg.t2.focus();
							return true;
						}  
				   else
						  {
							   reg.submit();
						  }
				  }
		   </script><?php
                               if(isset($_SESSION['m1']))
            {?><br><?php
                echo $_SESSION['m1'];
                unset($_SESSION['m1']);
							   }
               
  
                             ?>
                <form action="login.php" name="reg" method="post">
                    <div class="input-field">
                        <input type="text" name="t1" id="t1" placeholder="Enter your email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="t2" id="t2"  class="password" placeholder="Enter your password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        
                        <a href="#" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button">
                        <input type="button" value="Login Now" name="b" id="b" onClick="validation()">
                    </div>
                </form>
 <!--
                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="#" class="text signup-link">Signup now</a>
                    </span>
                </div>-->
            </div>

            <!-- Registration Form 
            <div class="form signup">
                <span class="title">Registration</span>

                <form action="#">
                    <div class="input-field">
                        <input type="text" placeholder="Enter your name" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Enter your email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Create a password" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Confirm a password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="sigCheck">
                            <label for="sigCheck" class="text">Remember me</label>
                        </div>
                        
                        <a href="#" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button">
                        <input type="button" value="Login Now">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="#" class="text login-link">Signup now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>

</body>
</html>