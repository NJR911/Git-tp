<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>shop</title>
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/from-data">
                <h1>Shop Online</h1>

                <!-- <img src="" alt=""> -->
                <input type="text" name="name" placeholder="Product"> 
                <br>
                <input type="text" name="price" placeholder="Price"> 
                <br>
                <input type="file" id="file" name="image" style="display:none"> 
                
                <label for="file">choose image</label>

                <button name="upload">UPLOAD</button>
                
                <br><br>
                <a href="products.php">Show all products</a>
                
            </form>
        </div>

    </center>
</body>
</html>