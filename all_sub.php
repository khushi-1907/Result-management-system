<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="admin_dash.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
		.complaintscontainer{
			margin-right: 15vw;
			margin-left: 15vw;
      text-align: center;
		}
		body{
			background-color: #ebebeb; 
		}
        .btn{
            margin-top: 6px;
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
        <span class="dashboard">Check all subjects</span>
      </div>
    </nav>
    <div class="complaintscontainer">
        <div><h1>Subjects</h1></div><br>
		<table class="table table-hover table-light">
		<thead class="thead">
		    <tr>
		      <th scope="col">Subject ID</th>
              <th scope="col">Subject Name</th>
              <th scope="col">Semester</th>
              <th scope="col">Branch</th>
		    </tr>
		</thead>
		<tbody>
        <div class="main">
        <?php
            include('init.php');
            $sql = "SELECT `id`, `name`, `semester`, `branch_code` FROM `subject`";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result))

                  {
                  echo "<tr>";
                  echo "<td>" . $row['id'] . "</td>";
                  echo "<td>" . $row['name'] . "</td>";
                  echo "<td>" . $row['semester'] . "</td>";
                  echo "<td>" . $row['branch_code'] . "</td>";
    
                  echo "</tr>";
                  }

                echo "</table>";
            } else {
                echo "0 subjects";
            }
        ?>
        </div>
		</tbody>   
	    </table>
  </section>
</body>
</html>

