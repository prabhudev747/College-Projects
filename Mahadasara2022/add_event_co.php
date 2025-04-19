<?php include 'adminhomepage.php'; ?>
      <?php
      session_start();
include('dbcon.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Mahadasara 2022</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 />
              <meta name=" description" content="" />
    <meta name="author" content=""/>
    <script>
    function check_usn(str)
        {
            //ajax call to retrievents.php
            alert("usn=>"+str);
            
//            
             x = new XMLHttpRequest();
                    x.open("POST", "check_usn.php?d=" + str, true);
                    x.send();
                    x.onreadystatechange = function ()
                    {
                        if (x.readyState == 4 && x.status == 200)
                        {
                            document.getElementById("usn_info").innerHTML = x.responseText;
                        }
                    };
            
        }
       
        
        </script>
    
    
</head>
<body style="background-color:#f7e6ff;">
<?php
//session_start();
//if (!(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']=="true" )))
if (!isset($_SESSION['uid'])&&!($_SESSION['utype']=="admin" ))
{
     echo "<script>window.location.replace('index.php')</script>";
}
else
{
   
    ?>
   

    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"  enctype="multipart/form-data">


<!-- Form Name -->
<!--<legend>Register</legend>-->
 <legend align="center" >Event Co-ordinator Registration</legend>
<!-- Text input-->
<!--<div class="form-group">
  <label class="col-md-4 control-label" for="usn">USN</label>  
  <div class="col-md-4">
      <input id="usn" name="usn" type="text" placeholder="USN" cusn_infolass="form-control input-md" required="" >
  <span class="help-block" id="usn_info">Type Your USN</span>  
  </div>
</div>-->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="Full Name" class="form-control input-md" required="">
  <span class="help-block">Type your Full Name</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email Id</label>  
  <div class="col-md-4">
      <input id="email" name="email" type="email" placeholder="Email Id" class="form-control input-md" required="">
  <span class="help-block">Type valid Email Id</span>  
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">Phone No</label>  
  <div class="col-md-4">
      <input id="phone" name="phone" type="number" placeholder="Mobile No" class="form-control input-md" required="">
  <span class="help-block">Type valid Mobile No</span>  
  </div>
</div>

<!-- Multiple Radios -->
<!--<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Gender</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-0">
      <input type="radio" name="gender" id="gender" value="Male" checked="checked">
      Male
    </label>
	</div>
  <div class="radio">
    <label for="radios-1">
      <input type="radio" name="gender" id="gender" value="Female">
      Female
    </label>
	</div>
  </div>
</div>-->






<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="branch">Branch</label>
  <div class="col-md-4">
    <select id="branch" name="branch" class="form-control">
          <option value="">Select Branch</option>
        <?php

//code for retrieving branches


 $sql = "select branchid,bname from branch";
     
    $result = mysqli_query($con,$sql);

while ($rows = mysqli_fetch_array($result)) {

?>
    
      <option value="<?php echo $rows['branchid'] ?>"><?php echo $rows['bname'] ?></option>
         <?php
} //end while($rows = mysql_fetch_array($result))
      ?>  
    </select>
 
  </div>
</div>

<!-- Select Basic -->
<!--<div class="form-group">
  <label class="col-md-4 control-label" for="sem">Select Semester</label>
  <div class="col-md-4">
    <select id="sem" name="sem" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
    </select>
  </div>
</div>-->

<!-- Select Basic -->
<!--<div class="form-group">
  <label class="col-md-4 control-label" for="section">Section</label>
  <div class="col-md-4">
    <select id="section" name="section" class="form-control">
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="C">C</option>
      <option value="D">D</option>
      <option value="None">None</option>
    </select>
  </div>
</div>-->

<!-- Password input-->
<!--<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="Create your Password" class="form-control input-md" required="">
    <span class="help-block">Use at least 5 characters </span>
  </div>
</div>-->


<!-- File Button --> 
<!--<div class="form-group">
  <label class="col-md-4 control-label" for="file_upload">Upload your Photo</label>
  <div class="col-md-4">
    <input id="fileToUpload" name="fileToUpload" class="input-file" type="file">
  </div>
</div>-->








<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="register"></label>
  <div class="col-md-8">
    <button id="register" name="register" class="btn btn-primary">Add Event Co-ordinator</button>
    <button id="clear" name="clear" class="btn btn-danger"  type="reset">Clear</button>
  </div>
</div>


</form>


    
    
    
    
    
    
    </body>
</html>

<?php

}//end else
?>

<?php

if(isset($_POST['register']))
{
    include 'dbcon.php';
    $email=$_POST['email'];
    
  
    $sql = "select * from event_coordinator where email='$email'";
     
       // echo $sql;
        
    $result = mysqli_query($con,$sql);
    $no_of_rows=mysqli_num_rows($result);
    
    if($no_of_rows>0)
    {
        echo("<script>alert(\"You have already Registered/Added...\")</script>");
    }
    else{
    
    
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    //$gender=$_POST['gender'];
    $branch=$_POST['branch'];
    //$sem=$_POST['sem'];
   // $section=$_POST['section'];
    $password="123";
    $phone=$_POST['phone'];
  //  $file_name=$_POST['file_upload'];
    
    
    
    
    
    
        
        $sql = "insert into event_coordinator(name,email,branchid,password,phoneno) values('$name','$email','$branch','$password','$phone')";
     
       // echo $sql;
        
    $result = mysqli_query($con,$sql);
if($result)
{
  echo("<script>alert(\"You have Succesfully Registered Event Co-ordinator...\")</script>");
   // echo "<b>You have Succesfully Registered, Login Register For Events (Sports/Cultural) <b>";
}
else{
     echo("<script>alert(\"Registration Failed...\n\n Try Again\")</script>");
}
        
    }//end else      
        
        
    
}//end if(isset($_POST['register']))


?>