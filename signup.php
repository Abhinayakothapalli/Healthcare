<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "poppins", sans-serif;
}
body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #0a5071;
    padding: 30px;
}
.container{
    position: relative;
    max-width: 850px;
    width: 400px;
    background: #fff;
    padding: 90px 70px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    perspective:2700px;
}
.container .cover::before{
    content: '';
    position: absolute;
    height: 100%;
    width: 100%;
    background: #0a5071;
    opacity: 0.5;
    z-index: 100;
}
.container .cover::after{
    content: '';
    position: absolute;
    height: 100%;
    width: 100%;
    background: #0a5071;
    opacity: 0.5;
    z-index: 100;
    transform: rotatey(180deg);
}
.container .cover{
    position: absolute;
    top: 0;
    left: 50%;
    height: 100%;
    width: 50%;
    background: red;
    z-index: 98;
    transition: all 1s ease;
    /*background: #7d2ae8;*/
    transform-origin: left;
    transform-style: preserve-3d;
}
.container .cover img{
    position: absolute;
    height: 100%;
    width: 100%;
    object-fit: cover;
    z-index: 12;
    backface-visibility: hidden;
}
.container .cover .text{
    position: absolute;
    z-index: 111;
    height: 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.cover .text .text-1,
.cover .text .text-2{
      font-size: 26px;
      font-weight: 600;
      color: #fff;
      text-align: center;
      backface-visibility: hidden;
}
.cover .text .text-2{
    font-size: 15px;
    font-weight: 500px;
}
.container form{
    height:100%;
    width: 100%;
    background: #fff;
}
.container .form-content{
    display: flex;
    align-items: center;
    justify-content: space-between;

}
.form-content .login-form{
    width: 100%;
    /*background: red;*/
}
form .form-content .title{
    position: relative;
    font-size: 24px;
    font-weight: 500;
    color: #333;
}
form .form-content .title:before{
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 25px;
    background: #0a5071;

}
form .signup-form  .title:before{
    width: 20px;
}
form .form-content .input-boxes{
    margin-top: 30px;
}
form .form-content .input-box{
    display: flex;
    align-items: center;
    height: 50px;
    width: 100%;
    margin: 10px 0;
    position: relative;

}
.form-content .input-box input{
    height: 100%;
    width: 100%;
    outline: none;
    border: none;
    padding: 0 30px;
    font-size: 16px;
    font-weight: 500;
    border-bottom: 2px solid rgba(0,0,0,0.2);
    transition: all 0.3s ease;;
}
.form-content .input-box input:focus,
.form-content .input-box input:valid{
    border-color: #0a5071;
}
.form-content .input-box i{
    position: absolute;
    color: #0a5071;
    font-size: 17px;
}
form .form-content .text{
    font-size: 14px;
    font-weight: 500;
    color: #333;
}
form .form-content .text a{
    text-decoration: none;
}
form .form-content .text a:hover{
    text-decoration: underline;
}
form .form-content .button{
    color: #fff;
    margin-top: 40px;
	padding-left: 10px ;
	padding-right: 10px;
}
form .form-content .button input{
    color: #fff;
    background: #0a5071;
    border-radius: 6px;
    padding: 10px;
	padding-left: 110px;
	padding-right: 110px;
    justify-content: center;
    align-items: center;
    margin-left: 5px;
    cursor: pointer;
    transition: all 0.4s ease;
}
form .form-content  .button input:hover{
    background: darkblue;
}
form .form-content label{
    color: #5b13b9;
    cursor: pointer;
}
 
form .form-content label:hover{
    text-decoration: underline;
}
 form .form-content .login-text{
    text-align: center;
    margin-top: 25px
 }
 .container{
	width: 1500px;
 }
form .form-content .login-form{
	width: 300px;
 }
 form .form-content .login-form a{
	text-decoration: none;
}
</style>
</head>
<body>
	<div id="box">
	<div class="container">
            <div class="cover">
                <div class="front">
                    <img src="https://images.unsplash.com/photo-1615914143778-1a1a6e50c5dd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8d29ya2luZyUyMG9uJTIwbGFwdG9wfGVufDB8fDB8fA%3D%3D&w=1000&q=80" alt="">
                    <div class="text">
                        <span class="text-1">Health <b style="color: red;">C</b>are</span>
                        <span class="text-2">lets get connected</span>
                    </div>
                </div>
                <div class="back">
                    <img class="backImg" src="https://img.freepik.com/free-photo/busy-woman-casual-clothes-working-laptop-home_171337-13650.jpg" >
                    <div class="text">
                        <span class="text-1"></span>
                        <span class="text-2"></span>
                    </div>
                </div>
            </div>
	<form method="post">
              <div class="form-content">
                <div class="login-form">
                    <div class="title">Signup</div>
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fas fa-envelope"></i>
                            <input type="text" name="user_name" placeholder="Enter your email" required>
                        </div>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" placeholder="Enter your password" required>
                        </div>
                        <div class="text"><a href="#">Forgot password</a></div>
                        <div class="button input-box">
                           <input id="button" type="submit" value="signup">
                        </div>
                        <a href="login.php"><div class="text login-text">Already have an account? <label for="flip">login now</a></label></div>
                    </div>
                </div>
	</div>
	</form>
</body>
</html>