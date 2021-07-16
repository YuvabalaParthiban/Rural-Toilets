<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Contact Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  
  .panel {
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-heading {
    color: #fff !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  }
  </style>
</head>
<body>
<form method = "POST">
<div class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT US</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we will get back to you within 24 hours.</p>
      <p>Give us your valuable queries and feedback</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Chennai  ,India</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 9895964515 </p>
      <p><span class="glyphicon glyphicon-envelope"></span> ruraltoilet@gmail.com</p>
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit" name="submit"><a href="http://localhost/real/home.html" class="btn btn-primary">Submit</a></button>    
        </div>
    </div>
    </div>
    </div>
  </div>
  </form>
  <?php     //start php tag
//include connect.php page for database connection
$link = mysqli_connect("localhost", "root", "");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
//if submit is not blanked i.e. it is clicked.
$sql1 = "CREATE DATABASE toilet" ;
if(mysqli_query($link, $sql1)){
  echo "Database created successfully";
} //else{
  //echo "ERROR: Could not able to execute $sql1. " . mysqli_error($link);
//}
$sql2 = mysqli_select_db($link,"toilet");
if(mysqli_query($link, $sql2)){
  echo "Database selected successfully";
} //else{
  //echo "ERROR: Could not able to execute $sql2. " . mysqli_error($link);
//}

$sql = "CREATE TABLE feedback(
    name VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE,
    comments VARCHAR(100) NOT NULL)" ;
if(mysqli_query($link,$sql)){
    echo "Table created successfully.";
} 
//else{
  //  echo "ERROR: Could not able to execute $sql. ";
//}


if(isset($_REQUEST['submit'])!='')
{
if($_REQUEST['name']=='' || $_REQUEST['email']=='' || $_REQUEST['comments']=='')
{
Echo "please fill the empty field.";
}
else
{
  $name1 = $_POST['name'];
$email1 = $_POST['email'];
$comments1 = $_POST['comments'];
//$sql3 = "INSERT INTO feedback (name,email,comments) VALUES ('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['comments']."') ";
$sql3 = "INSERT INTO feedback (name,email,comments) VALUES ('$name1','$email1','$comments1') ";
$res=mysqli_query($link,$sql3);
if($res)
{
Echo "Record successfully inserted";
}
else
{
Echo "There is some problem in inserting record";
}
}
}
mysqli_close($link);
?> 
</body>
</html>