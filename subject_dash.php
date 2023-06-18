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
		      <th scope="col">Name</th>
              <th scope="col">Roll Number</th>
              <th scope="col">Marks</th>
		    </tr>
		</thead>
		<tbody>
        <div class="main">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
            {
                $subject_id = $_POST['subject_id'];
                $i =1;
                $con = mysqli_connect('localhost','root','','ar');
                $query = "SELECT * from result inner join student on result.roll_number = student.roll_number
                WHERE subject_id ='$subject_id' order by marks desc";
                $res = mysqli_query($con,$query);
		        $count = mysqli_num_rows($res);
            if($count>0)
		    {
		    	while($row = mysqli_fetch_array($res))
		    	{
                    ?>
					<tr>
				    <td><?php echo $row['name'] ?></td>
				    <td><?php echo $row['roll_number'] ?></td>
				    <td><?php
                    if ($row['marks'] < 27) {
                        echo '<p style="color: red;">'.$row['marks'].'</p>';
                    } else {
                        echo '<p style="color: green;">'.$row['marks'].'</p>';
                    }
                    ?></td>
				    </tr>
                    <?php
					$i++;
				}}
        else
        {
            $message = "Incorrect Subject ID";
            echo "<script type='text/javascript'>alert('$message');</script>";
            echo '<script>
            window.location="subject_login.php";
            </script>';
        }
    } ?>
        
    </div>
</div>
 </html>
</body>
