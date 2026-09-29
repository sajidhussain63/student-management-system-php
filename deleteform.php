<?php 
include("include/sidebar.php");
include("include/header.php");
include("include/topbar.php");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1>Student Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simple Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-md-12">
           
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Student Data Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">id</th>
                      <th>name</th>
                      <th>email</th>
                      <th style="width: 40px">city</th>
                      <th style="width: 40px">course</th>
                      <th style="width: 40px">password</th>
                    </tr>
                  </thead>
                  <?php
                 
  $sql="SELECT * FROM student INNER JOIN city ON student.city=city.cityid INNER JOIN course ON student.course=course.course_id;";

  $query=mysqli_query(mysqli_connect("localhost","root","","project1"),$sql);

  if(mysqli_num_rows($query)>0){
     while($row=mysqli_fetch_assoc($query)){
  ?>

  <tr>
    <td><?= $row['id']?></td>
    <td><?= $row['name']?></td>
    <td><?= $row['email']?></td>
    <td><?= $row['cityname']?></td>
    <td><?= $row['course_name']?></td>
    <td><?= $row['password']?></td>
    <td><a href="deleterow.php?del_id=<?= $row['id']; ?>" class="btn btn-danger">delete</a></td>
  </tr>

  <?php
  }
}

  ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
       
       
        
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php
include("include/footer.php"); ?>




