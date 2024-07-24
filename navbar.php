<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;padding: 0;
        }
        nav{
            height:40px;
            width:100%;
            background-color:aqua;
        }
        a{
            margin:10px;
            text-decoration:none;
            font-size:25px;
        }
        a:hover{
            color:blue;
        }
        #logout{
            float:right;
            margin:10px;
        }
    </style>
</head>
<body>
    <div class="con">
    <nav>
        <a href="product.php">Product</a>
        <a href="addproduct.php">Add Product</a>
        <a href="display.php">Display Product</a>
        <a href="updateproduct.php">Update Product</a>
        <a href="logout.php" id='logout' name='logout'>Logout</a>
    </nav>
    </div>
</body>
</html>


