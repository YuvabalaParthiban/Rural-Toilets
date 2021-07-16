<!DOCTYPE html>  
<html lang="en">  
<head>  
    <title>Volunteer Register Form</title>  
      
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
  
    <link rel="stylesheet" href= 
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
      
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=pavTWmy7DxteXYifGmYd2IahE7kV_N6xnjmRpqM9y9ydgpUxfy6EzEhsvzj0o4S74h7F9ZMAsxUbezlv6w_I-vi_9a4t4ehibPqnaujGzkt2ivezQyYiTYpW9qGgT58BCh8JhlrdSCm_jq5zqa17hzSWAYqJfikJq4BpJ3ndbvcF8htW4floGGg7rMDehsAgiLuIFt53xI1Xcemekd0i66ZYs6VZouEsu4ox7M6XtkUzndOmEWDsSr_qEtn96vi9mNt0DJjL_Rkfm9JW8tDBkfjgH9VSHmjgbKD7_JmA6Y1Y-QTUP7H1PUF64cruNYKG-CT1XZH7BL_tXgIKv5FbKS9uaDJb14yT9o2KvJ4vkfptrCyE4qwOuHaUUbYWOzJt_Yg_f47JkoBVQ_P8COtMpSELDC2iR-CUKJ5fLmExeJZvozptryv5vtFtycNE58K5z4NpCWl1GIlkuhf20biO-GvBF74x1JWf_VvPUty1EZs4eACi3m2UxngY3ATkdXfB1U2HSy-Unsn4HKFn-dEQ4kj9jMEI8t8GyU36HI9RcooVw_F-i7fl2XTu-NAuru932sfpNgfSh3wBpcsfbeuMn4-zrzYDL7bi4apTTKhTBmUQZQsbz-DAZvAfDgX4TIvmTE6osE9LpX6Ovy0xXe5-7oE7R6J9L2fqwef7RW-Ml7qzxQO4peXZ-l5xcYLkJLqO" charset="UTF-8"></script><script src= 
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
      
    <h2 class="text-center">Volunteer details</h2> 
      
    <div class="container"> 
        <form action="#" class="was-validated" method ="POST"> 
            <div class="form-group"> 
                <label for="fname">First Name:</label> 
                <input type="text" class="form-control" id="fname"
                    placeholder="Enter First Name" 
                    name="fname"  autocomplete="off" required> 
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
                    placeholder="Enter 10 digit phone number"
           pattern="[0-9]{10}" name="contact"
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
      <select class="custom-select browser-default" required name="state" >
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

             <div class="form-group">
                  <label class="control-label" for="skillset">Skillsets and areas of interests:</label>
                  <textarea class="form-control" data-error="Please enter Skillsets and area of interests" id="skillset" placeholder="Enter Skillsets and areas of interests" required="" name = "skillset"></textarea>
                   <div class="help-block with-errors"></div>
                    <div class="valid-feedback">Valid</div> 
                    <div class="invalid-feedback">Please fill this field</div>
                  </div>

     <div class="form-group">
                  <label class="control-label" for="comment">Comments:</label>
                  <textarea class="form-control" data-error="Please enter Comments" id="comment" placeholder="Enter Comments" required="" name = "comment"></textarea>
                   <div class="help-block with-errors"></div>
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
                    <br><br><button class="btn btn-default pull-right" type="submit" name="submit"><a href="http://localhost/real/volunteer_login.php" class="btn btn-primary">submit</a></button>
                    <a href="http://localhost/real/home.html" class="btn btn-primary">Cancel</a><br>
                    </div>
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
    $sql = "CREATE TABLE VOLUNTEER_REGISTER(  
         vid INT(6) NOT NULL, 
         fname VARCHAR(30) NOT NULL,
         lname VARCHAR(30) NOT NULL,
         email VARCHAR(70) NOT NULL UNIQUE,
         password VARCHAR(30) NOT NULL,
         contact INT(30) NOT NULL,
         address VARCHAR(100) NOT NULL,
         State VARCHAR(100) NOT NULL,
         skillset VARCHAR(100) NOT NULL,
         comment VARCHAR(100) NOT NULL)";
    
        if(mysqli_query($link,$sql))
        {
                echo "Table created successfully.";}
        //else
        //{    echo "ERROR: Could not able to execute $sql. ";}

        if(isset($_REQUEST['submit'])!='')
        {
            if($_REQUEST['fname']=='' || $_REQUEST['lname']=='' || $_REQUEST['email']==''  || $_REQUEST['password']=='' || $_REQUEST['contact']=='' || $_REQUEST['address']=='' || $_REQUEST['state']=='' || $_REQUEST['skillset']=='' || $_REQUEST['comment']=='')
            { 
                Echo "please fill the empty field.";}
            else
            {  
                $fname1 = $_POST['fname'];
                $lname1 = $_POST['lname'];
                $email1 = $_POST['email'];
                $password1 = $_POST['password'];
                $contact1 = $_POST['contact'];
                $address1 = $_POST['address'];
                $state1 = $_POST['state'];
                $skillset1 = $_POST['skillset'];
                $comment1 = $_POST['comment'];
                $roll = rand(1,10000);

                $sql3 = "INSERT INTO VOLUNTEER_REGISTER (vid,fname,lname,email,password,contact,address,State,skillset,comment) VALUES ('$roll','$fname1','$lname1','$email1','$password1','$contact1','$address1','$state1','$skillset1','$comment1') ";
                $res=mysqli_query($link,$sql3);
                if($res){
                    Echo "Record successfully inserted";}
                else{Echo "There is some problem in inserting record";
                }
            }
        }
        mysqli_close($link);
    ?>
</body>  
</html>                     