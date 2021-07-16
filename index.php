<!DOCTYPE html>
<html>
<head>
<title>Report Generation</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>	
<div class="container">
<h1>Reports of the Users</h1>
<table class="table table-bordered">
<thead>
<tr>
<th>Sl No</th>
<th>First Name</th>
<th>last Name</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
</tr>
</thead>
<tbody>
<!------connect with databse------>
<?php
$c=1;

$con = mysqli_connect("localhost", "root", "","toilet");
if ($con) {
	//echo "Connection Done";
}else{
	//echo 'Connection Faild';
}

/////SELECT QUERY START HERE////////////////
$sel="SELECT * FROM USER_REGISTER";
$query=$con->query($sel);
while ($row=$query->fetch_assoc()) 
{
?>
<tr>
<td><?php echo $c++;?></td>
<td><?php echo $row['fname'];?></td>
<td><?php echo $row['lname'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['contact'];?></td>
<td><?php echo $row['address'];?></td>
<td>
<a href="http://localhost/php/waste/print 1.php" class="btn btn-success">See report</a>
</td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
</body>
</html>
