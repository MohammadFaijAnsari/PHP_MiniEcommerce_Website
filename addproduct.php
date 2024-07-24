<?php
include("navbar.php");
include("connection.php");
if(isset($_POST['btn'])){
  $pid=$_POST['pid'];
  $pname=$_POST['pname'];
  $pprice=$_POST['pprice'];
  $data=$conn->prepare("INSERT INTO product values('$pid','$pname','$pprice')");
  $data->execute();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0;padding: 0;
            background-color:aquamarine;
        }
      .container{
        background-color:white;
        width:350px;
        position: absolute;
        left:50%;
        top:50%;
        border:2px solid white;
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
        font-size:15px;
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
        <h1>Add Product</h1>
        <div class="form">
          <form action="#" method="post" autocomplete='off'>
            <input type="text" name="pid" id="pid" class='text' placeholder='Enter Product Id'  required>
            <input type="text" name="pname" id="pname"  class='text' placeholder='Enter Product Name'  required>
            <input type="text" name='pprice' id='pprice' class='text' placeholder='Enter Product Price'  required>
            <input type="submit" value="Add Product" name='btn' id='btn' class='btn'>
            <!-- <input type="submit" value="Update" name='btn' id='btn' class='btn'> -->
         </form>
        </div>
    </div>
</body>
</html>
<?php
include "footer.php";
?>