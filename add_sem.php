<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="admin_dash.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
        .registerform{
          position: relative;
          top: 15em;
          width: 30%;
        }
        .form-group{
          margin: 30px;
        }
        label{
          font-size: 30px;
        }
        .btn{
          position: relative;
          bottom: 15px;
        }
    </style>
  </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Admin</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="admin_dash.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li> 
        <li>
          <a href="add_branch.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Add branch</span>
          </a>
        </li>
        <li>
          <a href="all_branch.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Check all branches</span>
          </a>
        </li>
        <li>
          <a href="add_sem.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Add semester</span>
          </a>
        </li>
        <li>
          <a href="all_sem.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Check all semesters</span>
          </a>
        </li>
        <li>
          <a href="add_sub.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Add subject</span>
          </a>
        </li>
        <li>
          <a href="all_sub.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Check all subjects</span>
          </a>
        </li>
        <li>
          <a href="add_student.php">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Add student</span>
          </a>
        </li>
        <li>
          <a href="all_student.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Check all students</span>
          </a>
        </li>
        <li>
          <a href="add_result.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Add result</span>
          </a>
        </li>
        <li>
          <a href="update_result.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Update result</span>
          </a>
        </li>
        <li>
          <a href="delete_result.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Delete result</span>
          </a>
        </li>
        <li>
          <a href="imp_excel.html">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Import using excel</span>
          </a>
        </li>
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Add Semester</span>
      </div>
    </nav>
    <center>
    <div class="card registerform">
        <form action="add_sem.php" method="POST">
          <div class="form-group">
            <label>Semester Name</label>
            <input type="text" class="form-control" placeholder="Enter Semester Name" name="sem_name">
          </div>
          <div class="form-group">
            <label>Semester ID</label>
            <input type="number" class="form-control" placeholder="Enter Branch ID" name="sem_id">
          </div>
          <div class="form-group">
          <label>Select Branch</label>
          <select class="form-control"  name="branch_name">
              <option>            
                <?php
                include('init.php');
                $class_result=mysqli_query($conn,"SELECT `name` FROM `branch`");
                    echo '<option selected disabled>Select Branch</option>';
                while($row = mysqli_fetch_array($class_result)){
                    $display=$row['name'];
                    echo '<option value="'.$display.'">'.$display.'</option>';
                }
                echo'</select>'
                ?>
        </div>
          <button type="submit" class="btn btn-lg btn-secondary" style="background-color:black">Submit</button>
        </form>
    </div>
    </center>
  </section>
<?php 
	include('init.php');

    if (isset($_POST['branch_name'],$_POST['branch_id'])) {
        $name=$_POST["branch_name"];
        $id=$_POST["branch_id"];

        // validation
        if (empty($name) or empty($id) or preg_match("/[a-z]/i",$id)) {
            if(empty($name))
                echo '<p class="error">Please enter class</p>';
            if(empty($id))
                echo '<p class="error">Please enter class id</p>';
            if(preg_match("/[a-z]/i",$id))
                echo '<p class="error">Please enter valid class id</p>';
            exit();
        }

        $sql = "INSERT INTO `branch` (`name`, `id`) VALUES ('$name', '$id')";
        $result=mysqli_query($conn,$sql);
        
        if (!$result) {
            echo '<script language="javascript">';
            echo 'alert("Invalid Details")';
            echo '</script>';
        }
        else{
            echo '<script language="javascript">';
            echo 'alert("Successful")';
            echo '</script>';
        }
    }

?>
</body>
</html>

