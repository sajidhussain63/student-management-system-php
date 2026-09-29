<?php 
include 'conn.php';
session_start();
if(isset($_POST['login'])){


$email=$_POST['em'];
$password=$_POST['ps'];

$sql="SELECT * FROM student where email='$email' && password='$password'";

$query=mysqli_query($conn,$sql);

if(mysqli_num_rows($query)>0){
    while($row=mysqli_fetch_assoc($query)){
       $_SESSION["username"]=$row["name"];
       
        header("location:http://localhost/project1/admin/table.php");
    }

}
else{
    echo "<h3 style='color:white;'>login fail</h3>";
}
}


?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
  body{
    background-color:black;
    
  }
  label{
    color:white;
  }

  #h1{
    
    color: yellow;
    text-align: center;
    margin-top: 125px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
  }
  .div{
    text-align: center;
  }
</style>
<h1 id="h1">PLEASE LOGIN</h1>
<div class="row">
  <div class="col-4"></div>
<div class="col-4" style="background-color:black;border-radius:20px;border:5px solid yellow;">

<form class="mt-5" action="" method="POST"  >


  <div class="form-group">
 <label for="exampleInputEmail1">Email </label>
    <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email" name="em">
  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputEmail1">password</label>
    <input type="password" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Password" name="ps" >
  </div>
  <br>
  <div class="div">
  <button type="submit" class="btn btn-primary" name="login">login</button></div>
</form>
</div>
<div class="col-4"></div>
</div>