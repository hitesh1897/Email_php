<?php 
    include "config.php";
    include "header.php";
    include "menu.php";
    if(isset($_POST['txtrec'])){
        
        $sender = $_SESSION['username'];      
        $rec = $_POST['txtrec'];
        $subject = $_POST['txtsub'];
        $content = $_POST['txtcontent'];
        $sql = "INSERT INTO `user_data`(`sender`,`receiver`, `subject`, `content`)
                VALUES ('$sender','$rec','$subject','$content')";
        $res = mysqli_query($con,$sql);
        $count = mysqli_num_rows($res);
        if($count > 0){
           echo $count;
        }
        else{
          echo "No data";
        }

    }
    ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    
    <ul class="navbar-nav ml-auto">
      
      
     
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <div class="content-wrapper">
 
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            
          <div class="col-sm-12">
            <h1 class="m-0">Inbox</h1>
          </div>
            <table class="table table-striped table-bordered border-dark">
              <tr>
                <th>sender</th>
                <th>subject</th>
                <th>datetime</th>
                <th>deleted</th>
              </tr> 
      
                <?php
                
                $sql="select * from `user_data`";
                $res = mysqli_query($con,$sql);
            
                while($row=mysqli_fetch_assoc($res)){
              ?>
 
                <tr>
                  <td><?php echo $row['sender']; ?></td>
                  <td><?php echo $row['subject']; ?></td>
                  <td><?php echo $row['datetime']; ?></td>
                  <td><a href="deleted.php">delete</a></td>
                </tr>
                <?php }?>
            </table>
          </div>
          
      </div>
    </div>
    
  </div>
  
  <footer class="main-footer">
    <strong>Copyright &copy; 2024 <a href="https://adminlte.io">HiteshSolanki</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
    <?php
        include "footer.php";
    ?>
