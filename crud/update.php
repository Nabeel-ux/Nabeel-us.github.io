<?php
include'conn.php';
if(isset($_POST['done'])){
    $id=$_GET['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $q="UPDATE `crud_op` SET `id`=$id,`username`='$username',`password`='$password 'WHERE id=$id";
    mysqli_query($con,$q);
    header('location:display.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <div class="col-lg-6 m-auto">
         <form action="" method="post">
          <br><br> <div class="card">
               <div class="card-header bg-dark">
                   <h1 class="text-white text-center">Update operation</h1>
                 </div><br>
                   <label> Username:</label>
                    <input type="text" name="username" class="form-control"> <br>

                    <label> Password:</label>
                    <input type="password" name="password"class=  "form-control"> <br>
                    <button class=" btn btn-danger " type="submit" name="done">Submiteed</button><br>
           </div>
         </form>
    </div>
    
</body>
</html>