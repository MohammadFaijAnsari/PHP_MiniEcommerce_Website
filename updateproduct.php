<?php
error_reporting(0);
include("navbar.php");
include("connection.php");
if(isset($_GET['Pid'])) {
  $pid = $_GET['Pid'];
  $query = "SELECT * FROM product WHERE Pid='$pid'";
  $data = mysqli_query($conn, $query);
  $result = mysqli_fetch_assoc($data);
}
// print_r($result);
if(isset($_POST['btn'])){
  // echo "Updated";
}
if(isset($_POST['updatebtn'])){
   $pid=$_POST['pid'];
   $pname=$_POST['pname'];
   $pprice=$_POST['pprice'];  
  
    $updatedata="UPDATE product SET Pid='$pid',PName='$pname',Pprice='$pprice' WHERE Pid='$pid' ";
    $data=mysqli_query($conn,$updatedata);
  //   echo $updatedata;
   }
    if($data){
      // echo "Updated";
    }else{
      // echo "Record Not Updated";
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
            margin: 0;
            padding: 0;
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
        <h1>Update Product</h1>
        <div class="form">
          <form action="#" method="post" autocomplete='off'>
            <input type="text" name="pid" id="pid" class='text' value="<?php echo $result['Pid']; ?>" placeholder='Update Product Id'  required>
            <input type="text" name="pname" id="pname"  class='text'  value="<?php echo $result['PName']; ?>" placeholder='Update Product Name'  >
            <input type="text" name='pprice' id='pprice' class='text' value="<?php echo $result['Pprice']; ?>" placeholder='Update Product Price'>
            <input type="submit" value="Update" name='updatebtn' id='updatebtn' class='btn'>
         </form>
        </div>
    </div>
<?php
include "footer.php";
?>
</body>
</html>
