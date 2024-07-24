<?php
include('index.php');
session_start();
if(isset($_SESSION['email'])){
  header("Location: http://localhost/Project1/product.php");
}
if(isset($_POST['btn'])){
  include 'connection.php';
    $_SESSION['email']=$_POST['email'];
    $_SESSION['password']=$_POST['password'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $data=$conn->prepare("INSERT INTO login VALUES('$email','$password')");
    $data->execute();
    header("Location: http://localhost/Project1/product.php");
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            background-image:url("download2.jpg");
            
        }
      .container{
        width:300px;
        position:absolute;
        border:2px solid white;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
        background-color:transparent;
        backdrop-filter:blur(45px);
        border-radius:5px;
      }
      .container h1{
        text-align:center;
        padding-bottom:20px;
        border-bottom:1px solid silver;
      }
      .form{
        padding-bottom:15px;
        margin:0 20px;
        text-align:center;
        font-size:20px;
      }
      .text{
        width:100%;
        margin:6px;
        padding-left:10px;
        margin:6px;
        height:50px;
        box-sizing:border-box;
        font-size:20px;
        padding:5px;
        border:1px solid aquamarine;
        border-radius:5px;
      }
      .btn{
        width:100%;
        margin:20px 0;
        height:30px;
        margin:6px;
        font-size:20px;
        border:none;
        color:white;
        background-color:aquamarine;
        border-radius:5px;
      }
      .btn:hover{
        background-color:green;
      }
      .link{
        text-decoration:none;
        margin:5px;
         color:blue;
      }
      .sign{
        margin:5px;
        color:white;
      } 
      h1{
        color:white;
      }
    </style>
</head>
<body>
 
    <div class="container">
        <h1>Login</h1>
        <div class="form">
        <form action="#" method="post" autocomplete='off'>
            <input type="email"  id='email' name='email' class='text' placeholder='Email' required>
            <input type="password" id='password' name='password'class='text' placeholder='Password'  required>
             <div class="forget">
                <a href="#" class='link'>Forget Password?</a><br>
                <input type="submit" id='btn' name='btn' class='btn' value='Login'>
                <div class="sign">
                    New Member?<a href="signup.php" class='link'>Signup Here?</a>
                </div>
             </div>
        </form>     
        </div>
    </div>
</body>
</html>
