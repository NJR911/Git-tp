<?php

    include('config.php');

    
    


    if(isset($_POST['upload'])){
        if(isset($_FILES['image'])){
            $name        = $_POST['name'];
            $price        = $_POST['price'];
            $img          = $_FILES['image'];
            
            $img_location = $_FILES['image']['tmp_name'];
            $img_name     = $_FILES['image']['name'];
            $img_up       = "images/".$img_name;
            
            $insert = "INSERT INTO prod (name, price, image) VALUES ('$name', '$price', '$img_up')";
            mysqli_query($con, $insert);
            
            if(move_uploaded_file($img_location, 'images/'.$img_name)){
                echo "<script>alert('nadi')<script>";
            }else{
                echo "<script>alert('ma nadich')<script>";
            }
        }
        

    }


    /*if(isset($_POST['upload'])){
        $name        = $_POST['name'];
        $price        = $_POST['price'];
        $img          = $_FILES['image'];

        $img_location = $_FILES['image']['tmp_name'];
        $img_name     = $_FILES['image']['name'];
        $img_up       = "images/".$img_name;

        $insert = "INSERT INTO prod (name, price, image) VALUES ('$name', '$price', '$img_up')";
        mysqli_query($con, $insert);

        if(move_uploaded_file($img_location, 'images/'.$img_name)){
            echo "<script>alert('nadi')<script>";
        }else{
            echo "<script>alert('ma nadich')<script>";
        }
        

    }*/

?>