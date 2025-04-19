<%-- 
    Document   : login
    Created on : 18 May, 2021, 12:36:08 PM
    Author     : HP
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<form class="form-horizontal"  action="login_check.jsp">
<fieldset>


<!-- Form Name -->
<legend>Login</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">User Name</label>  
  <div class="col-md-2">
  <input id="email" name="email" type="text" placeholder="Enter Email Id" class="form-control input-md" required="">
  <span class="help-block">Type your Email-ID</span>  
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Password">Password</label>
  <div class="col-md-2">
    <input id="Password" name="Password" type="password" placeholder="Password" class="form-control input-md" required="">
    <span class="help-block">Enter your Password</span>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="login"></label>
  <div class="col-md-8">
    <button id="login" name="login" class="btn btn-primary">Login</button>
    <button id="Clear" name="Clear" type="reset" class="btn btn-warning">Clear</button>
  </div>
</div>

</fieldset>
</form>

</body>
</html>