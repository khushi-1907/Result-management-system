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
          top: 10em;
          width: 50%;
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
          <a href="delete_student.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Delete student</span>
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
        <span class="dashboard">Delete Result</span>
      </div>
    </nav>
    <center>
    <div class="card registerform">
        <form action="delete_result.php" method="POST">
          <div class="form-group">
            <label>Roll Number</label>
            <input type="number" class="form-control" placeholder="Enter Roll Number" name="roll_no">
          </div>
          <div class="form-group">
            <label>Subject ID</label>
            <select class="form-control" name="subject_id">
              <option>            
                <?php
                include('init.php');
                $subject_result=mysqli_query($conn,"SELECT `id` FROM `subject`");
                    echo '<option selected disabled>Select Subject ID</option>';
                while($row = mysqli_fetch_array($subject_result)){
                    $display=$row['id'];
                    echo '<option value="'.$display.'">'.$display.'</option>';
                }
                echo'</select>'
                ?>
            </select>
          </div>
          <button type="submit" class="btn btn-lg btn-secondary" style="background-color:black">Submit</button>
        </form>
    </div>
    </center>
  </section>
<?php 
include('init.php');
  if (isset($_POST['roll_no'],$_POST['subject_id'])) {
    $roll_no=$_POST["roll_no"];
    $subject_id=$_POST["subject_id"];

    $sql = "DELETE from `result` WHERE `roll_number`='$roll_no' and `subject_id`='$subject_id'";
    $result=mysqli_query($conn,$sql);
      
    if (!$result) {
        echo '<script language="javascript">';
        echo 'alert("Invalid Details")';
        echo '</script>';
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("Deleted")';
        echo '</script>';
    }
  }
?>
</body>
</html>