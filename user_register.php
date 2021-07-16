<!DOCTYPE html>  
<html lang="en">  
<head>  
    <title>User Register Form</title>  
      
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
    <h1 class="text-success text-center">Register</h1> 
      
    <h2 class="text-center">User details</h2> 
    <div class="container"> 
        <form action="print.php" class="was-validated" method ="POST" > 
            <div class="form-group"> 
                <label for="fname">First Name:</label> 
                <input type="text" class="form-control" id="fname"
                    placeholder="Enter First Name" name="fname" required> 
                <div class="valid-feedback">Valid</div> 
                <div class="invalid-feedback"> 
                    Please fill this field 
                </div> 
            </div> 
              
            <div class="form-group"> 
                <label for="lname">Last Name:</label> 
                <input type="text" class="form-control" id="lname"
                    placeholder="Enter Last Name" name="lname" required> 
                <div class="valid-feedback">Valid</div> 
                <div class="invalid-feedback"> 
                    Please fill this field 
                </div> 
            </div> 
              
            <div class="form-group"> 
                <label for="email">Email Id:</label> 
                <input type="email" class="form-control" id="email"
                    placeholder="Enter Email Id" name="email" required> 
                <div class="valid-feedback">Valid</div> 
                <div class="invalid-feedback"> 
                    Please fill this field 
                </div> 
            </div> 

            <div class="form-group"> 
                <label for="password">Password:</label> 
                <input type="password" class="form-control" id="password"
                    placeholder="Enter Password" name="password" required> 
                <div class="valid-feedback">Valid</div> 
                <div class="invalid-feedback"> 
                    Please fill this field 
                </div> <br>
              
            <div class="form-group"> 
                <label for="contact">Contact No:</label> 
                <input type="text" class="form-control" id="contact"
                    placeholder="Enter Contact Number" name="contact"
                    required> 
                <div class="valid-feedback">Valid</div> 
                <div class="invalid-feedback"> 
                    Please fill this field 
                </div> 
            </div> 
            

            <div class="form-group">
                  <label class="control-label" for="address">Address:</label>
                  <textarea class="form-control" data-error="Please enter Address" id="address" placeholder="Enter Address" required="" name = "address"></textarea>
                   <div class="help-block with-errors"></div>
                     <div class="valid-feedback">Valid</div> 
                    <div class="invalid-feedback">Please fill this field</div>
                  </div>

    <div class="form-group">
      <select class="custom-select browser-default" name="state" required >
      <option value="" name="state">State</option>
      <option value="1">Andhra Pradesh</option>
      <option value="2">Arunachal Pradesh</option>
      <option value="3">Assam</option>
      <option value="4">Bihar</option>
      <option value="5">Chhattisgarh</option>
      <option value="6">Goa</option>
      <option value="7">Gujarat</option>
      <option value="8">Haryana</option>
      <option value="9">Himachal Pradesh</option>
      <option value="10">Jharkhand</option>
      <option value="11">Karnataka</option>
      <option value="12">Kerala</option>
      <option value="13">Madhya Pradesh</option>
      <option value="14">Maharashtra</option>
      <option value="15">Manipur</option>
      <option value="16">Meghalaya</option>
      <option value="17">Mizoram</option>
      <option value="18">Nagaland</option>
      <option value="19">Odisha</option>
      <option value="20">Punjab</option>
      <option value="21">Rajasthan</option>
      <option value="22">Sikkim</option>
      <option value="23">Tamil Nadu</option>
      <option value="24">Telangana</option>
      <option value="25">Tripura</option>
      <option value="26">Uttar Pradesh</option>
      <option value="27">Uttarakhand</option>
      <option value="28">West Bengal</option>
      <option value="29">Andaman and Nicobar Islands</option>
      <option value="30">Chandigarh</option>
      <option value="31">Dadra and Nagar Haveli and Daman and Diu</option>
      <option value="32">Jammu & Kashmir</option>
      <option value="33">Ladakh</option>
      <option value="34">Delhi</option>
      <option value="35">Lakshadweep</option>
      <option value="36">Puducherry</option>
      
       </select>
       <div class="valid-feedback">Valid</div> 
       <div class="invalid-feedback">Please fill this field</div>
  </div>
     

            <div class="form-group form-check"> 
                <label class="form-check-label"> 
                    <input class="form-check-input" type="checkbox"
                        name="remember" required> I agree 
                    <div class="valid-feedback">Valid</div> 
                    <div class="invalid-feedback"> 
                        Please check the checkbox 
                    </div> 
                </label> 
            </div> 
              
            <div class="container">
                <div class="btn-group btn-group-justified">
                    <br><button class="btn btn-default pull-right" type="submit" name="submit"><a href="http://localhost/php/user_login.php" class="btn btn-primary">submit</a></button>
                    <a href="http://localhost/real/home.html" class="btn btn-primary">Cancel</a><br>      
                                   
        </form>
    </div> 
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
    $sql = "CREATE TABLE USER_REGISTER(    
        userid INT(6) NOT NULL,
        fname VARCHAR(30) NOT NULL,
        lname VARCHAR(30) NOT NULL,
        email VARCHAR(70) NOT NULL UNIQUE,
        password VARCHAR(30) NOT NULL,
        contact INT(30) NOT NULL,
        address VARCHAR(100) NOT NULL,
        State VARCHAR(100) NOT NULL)";
    /*$sql = "SELECT State FROM USER_REGISTER";
    $result = mysql_query($sql);
    echo "<select name='State'>";
        while ($row = mysql_fetch_array($result))
         { 
                echo "<option value= '" . $row['State'] ."'>" . $row['State'] ."</option>";
            }
    echo "</select>";)" ;*/
    if(
        mysqli_query($link,$sql) )
    {   
         echo "Table created successfully.";
        } 
         //else
         //{    echo "ERROR: Could not able to execute $sql. ";}
    if(isset($_REQUEST['submit'])!='')
    {
        if($_REQUEST['fname']=='' || $_REQUEST['lname']=='' || $_REQUEST['email']=='' ||$_REQUEST['password']==''  ||$_REQUEST['contact']=='' || $_REQUEST['address']=='' || $_REQUEST['state']=='')
        {
            //Echo "please fill the empty field.";
        }
        else
        {  $fname1 = $_POST['fname'];
           $lname1 = $_POST['lname'];
           $email1 = $_POST['email'];
           $password1 = $_POST['password'];
           $contact1 = $_POST['contact'];
           $address1 = $_POST['address'];
           $state1 = $_POST['state'];
           $roll = rand(1,10000);
           $sql3 = "INSERT INTO USER_REGISTER (userid,fname,lname,email,password,contact,address,State) VALUES ('$roll','$fname1','$lname1','$email1','$password1','$contact1','$address1','$state1') ";
           $res=mysqli_query($link,$sql3);
           if($res){
               Echo "Record successfully inserted";}
            else{
                Echo "There is some problem in inserting record";
            }
        }
    }
 mysqli_close($link);  
 ?>
</body>
</html>

                        