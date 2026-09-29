<?php 

include 'conn.php';

if(isset($_POST['insert'])){
    $name=$_POST['nm'];
    $email=$_POST['em'];
    $city=$_POST['ct'];
    $course=$_POST['cr'];
    $password=$_POST['ps'];

 $sql="INSERT INTO student
  (name,email,city,course,password)
   VALUES ('$name','$email','$city','$course','$password')";
 $query=mysqli_query($conn,$sql);

 header("location:http://localhost/project1/admin/table.php");
}


?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
  body{
    background-color:black;
   
    margin-left: 0px;
  }
  label{
    color:white;
  }
   
  h1{
    color: yellow;
    text-align: center;
    margin-top: 60px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
  }
  .div{
    text-align: center;
  }

</style>
<h1>PLEASE SUBMIT FORM</h1>
<div class="row">
  <div class="col-4"></div>
<div class="col-4" style="background-color:black; border-radius:20px;border:5px solid yellow;">

<form class="mt-5" action="<?= $_SERVER['PHP_SELF']?>" method="POST"  >

<div class="form-group">
    <label for="exampleInputEmail1"> User Name</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Name" name="nm">
  </div>
  
  <div class="form-group">
 <label for="exampleInputEmail1">Email </label>
    <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email" name="em">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" style="color:white;">Select Cityname</label>
   <?php 
   $sql1="SELECT * FROM city";
   $query1=mysqli_query($conn,$sql1);
   
   
   
  echo  '<select  class="form-select"  name="ct">'; //if double qoutes is used then single qoute will be used and vise versa.
  
 while($row1=mysqli_fetch_assoc($query1)){
if($row['city']==$row1['cityid']){
    $select= "selected";
}
else{
    $select="";
}



echo "<option {$select} value='{$row1['cityid']}'>{$row1['cityname']}</option>";

}

echo '</select>';
?>
 <div class="form-group">
    <label for="exampleInputEmail1" style="color:white;">Select Course</label>
   <?php 
   $sql2="SELECT * FROM course";
   $query2=mysqli_query($conn,$sql2);
   
   
   
  echo  '<select  class="form-select"  name="cr">'; //if double qoutes is used then single qoute will be used and vise versa.
  
 while($row2=mysqli_fetch_assoc($query2)){
if($row['course']==$row2['course_id']){
    $select= "selected";
}
else{
    $select="";
}



echo "<option {$select} value='{$row2['course_id']}'>{$row2['course_name']}</option>";

}

echo '</select>';
?>
  <div class="form-group">
    <label for="exampleInputEmail1">password</label>
    <input type="password" class="form-control"  aria-describedby="emailHelp" placeholder="Enter password" name="ps" >
  </div>
<br>
<div class="div">
  <button type="submit" class="btn btn-warning" name="insert" >Submit</button>
  
</div>
</form>
</div>
<div class="col-4"></div>
</div>



