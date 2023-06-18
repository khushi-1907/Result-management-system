<?php
    include("init.php");
    
    $no_of_branch=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `branch`"));
    $no_of_student=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `student`"));
    $no_of_result=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `result`"));
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="admin_dash.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <span class="dashboard">Dashboard</span>
      </div>
    </nav>
    <div class="home-content">
      <div class="overview-boxes">
        <ul>
        <div class="box" >
          <div class="right-side">
            <div class="box-topic">Number of Students</div>
            <div class="number"><?php echo '<p>'.$no_of_student[0].'</p>';?></div>
          </div>
        </div>
        <div class="box" >
          <div class="right-side">
            <div class="box-topic">Number of result</div>
            <div class="number"><?php echo '<p>'.$no_of_result[0].'</p>';?></div>
          </div>
        </div>
        <ul>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Number of branches</div>
            <div class="number"><?php echo '<p>'.$no_of_branch[0].'</p>';?></div>
          </div>
        </div>
        </ul>
      </div>
    </div>
  </section>

</body>
</html>

