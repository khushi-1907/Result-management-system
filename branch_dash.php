<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="result_dash.css">
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
        .complaintscontainer{
            margin-top: 20px;
        }
	</style>
</head>
<body>
<section class="home-section">
    <div class="complaintscontainer">
        <div><h1>Result</h1></div><br>
		<table class="table table-hover table-light">
		<thead class="thead">
		    <tr>
              <th scope="col">Roll Number</th>
              <th scope="col">Total Marks</th>
		    </tr>
		</thead>
		<tbody>
        <div class="main">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
            {
                $branch_code = $_POST['branch_code'];
                $semester = $_POST['semester'];
                $i =1;
                $con = mysqli_connect('localhost','root','','ar');
                $query = "SELECT roll_number, SUM(marks) AS total_marks
                FROM result
                WHERE roll_number IN (SELECT roll_number FROM student WHERE branch_code = '$branch_code' and semester = '$semester')
                GROUP BY roll_number ORDER BY total_marks DESC";
                $res = mysqli_query($con,$query);
		        $count = mysqli_num_rows($res);
            if($count>0)
		    {
		    	while($row = mysqli_fetch_array($res))
		    	{
                    ?>
					<tr>
				    <td><?php echo $row['roll_number'] ?></td>
				    <td><?php
                    if ($row['total_marks'] < 125) {
                        echo '<p style="color: red;">'.$row['total_marks'].'</p>';
                    } else {
                        echo '<p style="color: green;">'.$row['total_marks'].'</p>';
                    }
                    ?>
                    </td>
                    <?php
					$i++;
				}}
        else
        {
            $message = "Incorrect Branch or Semester";
            echo "<script type='text/javascript'>alert('$message');</script>";
            echo '<script>
            window.location="branch_login.php";
            </script>';
        }
    } ?>
        
    </div>
</div>
 </html>
</body>
