<?php
include('navbar.php');
include('dbcon.php');
?>

<!DOCTYPE html>
<html>
<head>
     <title>Mahadasara 2022</title>
    <link rel="shortcut icon" type="image" href="images/mahadasara logo.jpg">
    <style>
/*body {
  background-image: url('images/fest2.webp');
  width: 100%;
  height: 100%;
}*/
blink {
  -webkit-animation: 2s linear infinite condemned_blink_effect; /* for Safari 4.0 - 8.0 */
  animation: 2s linear infinite condemned_blink_effect;
}

/* for Safari 4.0 - 8.0 */
@-webkit-keyframes condemned_blink_effect {
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}

@keyframes condemned_blink_effect {
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}
</style>
<script>
    function view_dogshow_registration()
    {
       // alert('view register');
        window.location.replace('view_dogshow_registeration.php');
    }
</script>


<title>Mahadasara 2022</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 />
              <meta name="description" content="" />
    <meta name="author" content=""/>
    
     <script>
        function fun()
        {
            alert("Rules:\nThis Event is basically considering some criterias like.\n1.Walking.\n2.Running.\n3.Postures (Standing and Sitting).\n4.Body Features(Checking the standards from eyes to tail).\n5.Obedience(obey to owners command.\n6.Behavior of dog with other dogs.");
           //document.getElementById("rules").style.display = "block";
    
        }
        </script>
    
</head>
<body style="background-color:#ffccff;">
    

    
    <center><h2 style="  color:black;height:50px;padding-top:6px">DogShow Registration</h2></center>
    <a href="support1.php" style="float:right;" ><span class="glyphicon glyphicon-earphone" >Support</span></a>
   
        
    
        <div>

        <center><h3 style="  color:#FC46AA;height:50px;padding-top:6px"> <blink>Today Registration fees Rs.500</blink></h3></center>
        </div>

            <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"  enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<!--<legend>First Participant</legend>-->
<legend style=" color: #FF5733" align='center'><b>Owner Details</b>  </legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name1">Name</label>  
  <div class="col-md-4">
  <input id="name1" name="name1" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>


<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="gender1">Gender</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="gender-0">
      <input type="radio" name="gender1" id="gender-0" value="1" checked="checked">
      Male
    </label> 
    <label class="radio-inline" for="gender-1">
      <input type="radio" name="gender1" id="gender-1" value="2">
      Female
    </label> 
    <label class="radio-inline" for="gender-2">
      <input type="radio" name="gender1" id="gender-2" value="3">
      Others
    </label>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mob1">Age</label>  
  <div class="col-md-4">
  <input id="mob" name="age1" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mob1">Mobile Number</label>  
  <div class="col-md-4">
  <input id="mob" name="phone1" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email1">Email ID</label>  
  <div class="col-md-4">
  <input id="email" name="email1" type="text" placeholder="" class="form-control input-md" required="">
  <span class="help-block" style="color:red">Please provide valid Email Id it will be used for downloading registration card and participation certificate</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="place1">Place Name</label>  
  <div class="col-md-4">
  <input id="place" name="place1" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

            <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="file_upload1">Upload your Photo</label>
  <div class="col-md-4">
    <input id="fileToUpload1" name="fileToUpload1" class="input-file" type="file" required="">
    <span class="help-block" style="color:red">Upload less than 100kb</span>  
    <span class="help-block" style="color:red">Same Photo Used For Participants certification</span>
  </div>
</div>
            <div class="form-group">
  <label class="col-md-4 control-label" for="file_upload2">Upload Fees Paid Receipt Photo <br> Today Registration Fees Rs.500</label>
  
  <div class="col-md-4">
    <input id="fileToUpload2" name="fileToUpload2" class="input-file" type="file" required="">
     <span class="help-block" style="color:red">Upload less than 100kb</span>  
  </div>
</div>
            <!--<legend>Second Participant</legend>-->
            <legend style=" color: #FF5733" align='center'><b>Dog Details</b>  </legend>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name2">Name</label>  
  <div class="col-md-4">
  <input id="name" name="name2" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="breedname">Breed Name</label>  
  <div class="col-md-4">
  <input id="name3" name="breedname" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="mob1">Age</label>  
  <div class="col-md-4">
  <input id="mob" name="age2" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>
          <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="file_upload3">Upload Dog Photo</label>
  <div class="col-md-4">
    <input id="fileToUpload3" name="fileToUpload3" class="input-file" type="file" required="">
     <span class="help-block" style="color:red">Upload Less than 100kb </span>  
  </div>
</div>
            
<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-8">
    <button id="submit" name="register" class="btn btn-primary">Submit</button>
    <button id="rules" name="rules" class="btn btn-primary" onclick="fun()">Rules</button>
    <button id="submit" name="view_registration" class="btn btn-success" onclick="view_dogshow_registration()">Download Registration card</button> 
  </div>
</div>

</fieldset>
</form>
        </div>
    </body>
</html>

<?php 
if(isset($_POST['register']))
{
     include 'dbcon.php';
    //p1
    $o_name=$_POST['name1'];
    $o_gender=$_POST['gender1'];
      $o_email=$_POST['email1'];
        $o_age=$_POST['age1'];
         $o_place=$_POST['place1'];
         $o_phone=$_POST['phone1'];
         
        
           $d_name=$_POST['name2'];
           $breed_name=$_POST['breedname'];
     $age2=$_POST['age2'];
     
         
         $sql2="select * from dogshow where o_email='$o_email'  || 'o_phone'='$o_phone' ";
         //echo $sql2;
         
         $result = mysqli_query($con,$sql2);
    $no_of_rows=mysqli_num_rows($result);
    
    if($no_of_rows>0)
    {
        echo("<script>alert(\"You have already Registered with this emailid and phonenos...(emailid and phoneno to be unique)\")</script>");
    }
         
         else{
         
         
         
           
   $target_dir = "dogshow_photos/";
   $target_file1 = $target_dir . basename($_FILES["fileToUpload1"]["name"]);
   $target_file2 = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
   $target_file3 = $target_dir . basename($_FILES["fileToUpload3"]["name"]);
   
   $newfilename1=$target_dir;
   $newfilename2=$target_dir;
   $newfilename3=$target_dir;
$uploadOk = 1;
$imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
$imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
$imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));


$date = new DateTime();
$newfilename1.= $date->getTimestamp();
            $random=rand(10,1000);
            $newfilename1=$newfilename1."".$random.".".$imageFileType1;



$date = new DateTime();
$newfilename2.= $date->getTimestamp();
            $random=rand(10,1000);
            $newfilename2=$newfilename2."".$random.".".$imageFileType2;
            
$date = new DateTime();
$newfilename3.= $date->getTimestamp();
            $random=rand(10,1000);
            $newfilename3=$newfilename3."".$random.".".$imageFileType3;
            
// Check if image file is a actual image or fake image
//if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload1"]["tmp_name"]);
    $check = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
     $check = getimagesize($_FILES["fileToUpload3"]["tmp_name"]);
    if($check !== false || check !=false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

if ($_FILES["fileToUpload1"]["size"] > 50000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
&& $imageFileType1 != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $newfilename1)) {
   
        move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $newfilename2);
        move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $newfilename3);
      
        $sql="insert into dogshow(o_name,o_gender,o_age,o_place,o_phone,o_email,file1,file2,d_name,d_breeds,d_age,file3) values('$o_name','$o_gender','$o_age','$o_place','$o_phone','$o_email','$newfilename1','$newfilename2','$d_name','$breed_name','$age2','$newfilename3')";
        
    $result = mysqli_query($con,$sql);
if($result)
{
  echo '<script>alert("DogShow Registration Successfull  \\n")</script>';
  echo "<script>window.location.replace('view_dogshow_registeration.php')</script>";
  
}
else{
     echo("<script>alert(\"Registration Failed...\n\n Try Again\")</script>");
} 
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
         
         
}//end else
}

?>
    

