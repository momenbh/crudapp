<?php
   include("function.php");
    
   $objCrudAdmin = new crudApp();
if (isset($_POST['btn'])){
     $return_msg = $objCrudAdmin->add_data($_POST);
  
}


?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD APP</title>
  </head>
  <body>
    <div class="container my-4 p-4 shadow">
    <h1 style="color:green"><a href="index.php"></a>CREATE FORM</h1>
    <form action="" method="POST" enctype="multipart/form-data">
      <?php if(isset($return_msg)){echo $return_msg;}?>
      
        <input  class="form-control mb-2"type="text"name="std_name" placeholder="Enter your name">
        <input  class ="form-control mb-2"type="number"name="std_roll" placeholder="Enter Your Roll">
        <label for="">Upload Img</label><br>
        <input type="file"name="upload_img" class="mb-2"><br>
        <input type="submit" value="Add information"class="form-control bg-warning" name="btn">
    </br>
    </form>
    </div>
    <div class="container my-4 p-4 shadow">
       <table class="table table-responsive">
        <thead>
          <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>ROLL</th>
            <th>IMAGE</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>asif</td>
            <td>10000</td>
            <td></td>
            <td>
              <a href="" class="btn btn-success">Edit</a>
              <a href="" class="btn btn-info">Delete</a>
            </td>
          </tr>
        </tbody>
       </table>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>