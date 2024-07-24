<?php
include('index.php');
include("connection.php");
if(isset($_POST['btn'])){
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $password=$_POST['pass'];
  $cpassword=$_POST['cpass'];
  echo $fname;
  if($password==$cpassword){
  $data=$conn->prepare("INSERT INTO signup values('$fname','$lname','$email','$password','$cpassword')");
  $data->execute();
  }else{
    echo "<script>alert('Password and ConfromPassword Not Same')</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      h1{
        color:white;
      }
      body{
            margin: 0;padding: 0;
            /* background-image:url("download2.jpg"); */
        }
      .container{
        background-color:white;
        width:350px;
        position: absolute;
        left:50%;
        top:50%;
        border:2px solid white;
        background-color:transparent;
        backdrop-filter:blur(45px);
        border-radius:5px;
        transform:translate(-50%,-50%);
      }
      .container h1{
        padding-top:10px;
        text-align:center;
        padding-bottom:10px;
        border-bottom:1px solid silver;         
      }
      .form{
        margin:20px;
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
        height:35px;
        width:100%;
        margin:6px;
        border-radius:5px;
        color:white;
        font-size:25px;
        background-color:aquamarine;
        border:none;
      }
      .btn:hover{
        background-color:green;
      }
    </style>
</head>
<body>
    <div class="container">
        <h1>Signup</h1>
        <div class="form">
          <form action="#" method="post" autocomplete='off'>
            <input type="text" name="fname" id="fname" class='text' placeholder='Enter First Name'  required>
            <input type="text" name="lname" id="lname"  class='text' placeholder='Enter Last Name'  required>
            <input type="email" name='email' id='email' class='text' placeholder='Enter Email'  required>
            <input type="password" name='pass' id='pass' class='text' placeholder='Enter Password'  required/>
            <input type="password" name='cpass' id='cpass' class='text' placeholder='Enter Confrom Password'  required/>
            <input type="submit" value="Signup" name='btn' id='btn' class='btn'>
         </form>
        </div>
    </div>
</body>
</html>