<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href= 
  "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
        
      <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=4FCHbqqx7y8CtIbNlQzPnrkE8tNGh_I9tLTbx64U6kf89-jFW9505XW-Z39UJIRTqk56SqxwTPALpneHyVCf_JXbJxarRO1G-Ih9rfuSjsuYdxt_O0-JILIWOmEhVx0vqv9EIJuq9JmFUGrt_LQ_C_qVGOLF2KezAJxYWBoBh-ty6WnkR6svv9JxZSfkxbruQF8pLMxWH6HwS-QfMrgpcGFtRQBt1O8UxFQLh9axSieFmCrsWANcWERm6D_1Jp8sGGxcf5vHFAzaWaWjP3TrIVM1XGJ0Lk5T_bR3DWx51Z6-pXoQR405UP2A-E6C7TiIkkAFthLolcjbj05HbsB5pTrMYO2fX1uR0bCVFlPcBwZWhYnL9YN1R2-FzdKzIEbpoM_biTZQkFPFXRbphNGgPnerniOYOBUQAE3k_O3d0MHrX_vumiw5exD-C90_T51jsBJZ2XD7H8_5wbW1qfw4JO8o_MCx93JGyUerZ6qOk7Y8zJf89FJjaEOO5FcYuU-JKQzeAA-GjCGpzeS-WycRpUl0mQtMohU946uEHWRlwJzUa2jXyInWKgkUPuZDmOWwJaaD8fINP5CLy8YmyrOYGn6z3psKmNWhzqmdbP4QZNJob3SmfK2REwtgtik8kTaCFUZ4rYo1BPNfF9VLYKRYmFKfEihyctQGu1JWtYiSVR_2b-8-kz8bNuq2bIxx0_qv" charset="UTF-8"></script><script src= 
  "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> 
      </script> 
        
      <script src= 
  "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"> 
      </script> 
        
      <script src= 
  "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"> 
      </script> 
</head>
<body>

<div class="container">
    <h2 class="text-center">Toilet details</h2>
    <form method = "POST">
    <div class="form-group has-success has-feedback">
        <label class="col-sm-2 control-label" for="inputSuccess">Enter the user id</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="uid" id="inputSuccess">
          <span class="glyphicon glyphicon-ok form-control-feedback"></span>
        </div>
      </div>
    <div class="form-group">
      <label for="disabledInput" class="col-sm-2 control-label">Length</label>
      <div class="col-sm-10">
        <input class="form-control" id="disabledInput" name="length" type="number" placeholder="189" disabled>
      </div>
    </div>
    <div class="form-group">
        <label for="disabledInput" class="col-sm-2 control-label">Width</label>
        <div class="col-sm-10">
          <input class="form-control" id="disabledInput" name="width" type="number" placeholder="50" disabled>
        </div>
      </div>
      <div class="form-group">
        <label for="disabledInput" class="col-sm-2 control-label">Height</label>
        <div class="col-sm-10">
          <input class="form-control" id="disabledInput" name="height" type="number" placeholder="220" disabled>
        </div>
    </div>
        <div class="form-group">
            <label for="disabledInput" class="col-sm-2 control-label">Type</label>
            <div class="col-sm-10">
              <input class="form-control" id="disabledInput" name="type" type="text" placeholder="Indian" disabled>
            </div>
        </div>
            <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Color</label>
                <div class="col-sm-10">
                  <input class="form-control" id="disabledInput" name="color" type="text" placeholder="White" disabled><br>
                </div>
            </div>
            <div class="container">
                <div class="btn-group btn-group-justified">
                <br><button class="btn btn-default pull-right" type="submit" name="submit"><a href="http://localhost/php/waste/print.php" class="btn btn-primary">submit</a></button>
                    <a href="http://localhost/real/home.html" class="btn btn-primary">Cancel</a><br>
                </div>
</form>
</div>
<?php     //start php tag
//include connect.php page for database connection
$link = mysqli_connect("localhost", "root", "");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
//if submit is not blanked i.e. it is clicked.
$sql1 = "CREATE DATABASE toilet" ;
$sql2 = mysqli_select_db($link,"toilet");
if(mysqli_query($link, $sql2)){
  echo "Database selected successfully";
}// else{
  //echo "ERROR: Could not able to execute $sql2. " . mysqli_error($link);
//}

$sql = "CREATE TABLE option4(
    uid INT(4) NOT NULL ,
    length INT(4) NOT NULL,
    width INT(4) NOT NULL,
    height INT(4) NOT NULL,
    type VARCHAR(20) NOT NULL,
    color VARCHAR(20) NOT NULL)" ;
if(mysqli_query($link,$sql)){
    echo "Table created successfully.";
} 
//else{
  //  echo "ERROR: Could not able to execute $sql. ";
//}


if(isset($_REQUEST['submit'])!='')
{
if($_REQUEST['uid']=='')
{
Echo "please fill the empty field.";
}
else
{
  $uid1 = $_POST['uid'];
$sql3 = "INSERT INTO option4 (uid,length,width,height,type,color) VALUES ('$uid1',168,70,200,'Indian','White') ";
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