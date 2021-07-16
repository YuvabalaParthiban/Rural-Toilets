    <!doctype html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>YOUR REPORT</title>
    </head>
    <body>
    <form action="user_register.php" class="was-validated" > 
    <p>Here is the information you have submitted:</p>
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
<?php
$c=1;

$con = mysqli_connect("localhost", "root", "","toilet");
if ($con) {
	// echo "Connection Done";
}else{
	//echo 'Connection Faild';
}

/////SELECT QUERY START HERE////////////////
$sel="SELECT * FROM USER_REGISTER where userid = '7210' ";
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
	
</td>
</tr>
<?php
}
?>
</tbody>
</table>

<table class="table table-bordered">
<thead>
<tr>
<th>Length</th>
<th>Width</th>
<th>Heigth</th>
<th>Type</th>
<th>color</th>
</tr>
</thead>
<?php

$con = mysqli_connect("localhost", "root", "","toilet");
if ($con) {
	//echo "Connection Done";
}else{
	//echo 'Connection Faild';
}

/////SELECT QUERY START HERE////////////////
$sel="SELECT * FROM Option1 where uid='123' ";
$query=$con->query($sel);
while ($row=$query->fetch_assoc()) 
{
?>
<tr>
<td><?php echo $row['length'];?></td>
<td><?php echo $row['width'];?></td>
<td><?php echo $row['height'];?></td>
<td><?php echo $row['type'];?></td>
<td><?php echo $row['color'];?></td>
<td>
	
</td>
</tr>
<?php
}
?>
</tbody>
</table>

<table class="table table-bordered">
<thead>
<tr>
<th>First Name</th>
<th>last Name</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
</tr>
</thead>
<?php

$con = mysqli_connect("localhost", "root", "","toilet");
if ($con) {
	//echo "Connection Done";
}else{
	//echo 'Connection Faild';
}

/////SELECT QUERY START HERE////////////////
$sel="SELECT * FROM VOLUNTEER_REGISTER where vid= '7137' ";
$query=$con->query($sel);
while ($row=$query->fetch_assoc()) 
{
?>
<tr>
<td><?php echo $row['fname'];?></td>
<td><?php echo $row['lname'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['contact'];?></td>
<td><?php echo $row['address'];?></td>
<td>
	
</td>
</tr>
<?php
}
?>
<?php

$con = mysqli_connect("localhost", "root", "","toilet");
if ($con) {
	//echo "Connection Done";
}else{
	//echo 'Connection Faild';
}

/////SELECT QUERY START HERE////////////////
$sel="SELECT * FROM cost";
$query=$con->query($sel);

echo $row['cost value'] ;
?>

</tbody>
</table>

    <h1>Thank You</h1>
    <button><h4 onclick="window.print();"> Print </h4></button>
    <button><a href="http://localhost/real/home.html" class="btn btn-success">Exit</a></button>
  </form>

  </body>
  <body>

    </body>
    </html>  