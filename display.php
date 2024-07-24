<?php
include "connection.php" ;
//Delete The Data in database
if(isset($_POST['delete'])){
  $pid=$_POST['did'];
  $query=$conn->prepare("DELETE FROM product WHERE Pid='$pid' ");
  $query->execute();
  if($query){
    // echo "Record Delete";
  }else{
    echo "Record Not Deleted";
  }
}
?> 
<html>
  <head><title>Display</title>
  <style>
    
    h1{
      margin-top:20px;
      font-size:20px;
    }
    table{
      margin-top:20px;
      text-align:center;
    }
    table tr{
      height:30px;
    }
    table th{
      font-size:20px;
      background-color:aquamarine;
    }
    #update{
      background-color:green;
      border:2px solid green;
      color:white;
      font-size:20px;
      border-radius:5px;
    }
    #delete{
      color:white;
      font-size:20px;
      background-color:red;
      border:2px solid red;
      border-radius:5px;
    }
  </style>
  </head>
  <body>

  <?php include "navbar.php";?>
<?php
$query='select *from product';
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
?>
  <h1 align='center'><u><mark>Display All Product</mark></u></h1>
  <center>
  <table border='1' cellspacing='1' align='center'>
     <tr>
      <th width='20%'>Product Id</th>
      <th width='20%'>Product Name</th>
      <th width='20%' >₹ Product Price</th>
      <th width='20%' colspan='4'>Operation</th>
    </tr> 
    <?php
    while($result=mysqli_fetch_assoc($data)){
      // print_r($result);
      echo "<tr>
        <td>".$result['Pid']."</td>
        <td>".$result['PName']."</td>
        <td>". $result['Pprice']."</td>
        <td><a href='updateproduct.php ? Pid=$result[Pid]' id='update' name='update'>Update</a></td>
        <td>
        <form action='display.php' method='post'>
          <input type='hidden' value='$result[Pid]' name='did' id='did'/>
          <td><input type='submit' id='delete' name='delete' value='Delete'/> </td> 
        </form></td>
        </tr>
        ";
    }
    ?>
  </table>
  </center>
  <?php
  include "footer.php";
  ?> 
  </body>
</html>

