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
        <span class="dashboard">Add Branch</span>
      </div>
    </nav>
    <center>
    <div class="card registerform">
        <form action="add_branch.php" method="POST">
          <div class="form-group">
            <label>Branch Name</label>
            <input type="text" class="form-control" placeholder="Enter Branch Name" name="branch_name">
          </div>
          <div class="form-group">
            <label for="inputAge">Branch Code</label>
            <input type="text" class="form-control" placeholder="Enter Branch Code" name="branch_code">
          </div>
          <button type="submit" class="btn btn-lg btn-secondary" style="background-color:black">Submit</button>
        </form>
    </div>
    </center>
  </section>
<?php 
	include('init.php');

    if (isset($_POST['branch_name'],$_POST['branch_code'])) {
        $name=$_POST["branch_name"];
        $code=$_POST["branch_code"];

        // validation
        if (empty($name) or empty($code) or preg_match("/[a-z]/i",$id)) {
            if(empty($name))
                echo '<p class="error">Please enter branch name</p>';
            if(empty($id))
                echo '<p class="error">Please enter branch code</p>';
            exit();
        }

        $sql = "INSERT INTO `branch` (`name`, `code`) VALUES ('$name', '$code')";
        $result=mysqli_query($conn,$sql);
        
        if ($result) {
          echo '<script language="javascript">';
          echo 'alert("Successful")';
          echo '</script>';
        }
        else{
          echo '<script language="javascript">';
          echo 'alert("Invalid Details")';
          echo '</script>';
        }
    }

?>
</body>
</html>

 