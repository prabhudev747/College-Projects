<%-- 
    Document   : add_foodtype
    Created on : 21 May, 2021, 1:16:01 PM
    Author     : sanjay singh
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>JSP Page</title>
    </head>
    <body>
         <%
            try{
            String uid=(String)session.getAttribute("uid");
            //out.println("uid="+uid);
            if(uid==null)
             {
                 out.println("<script>window.location.replace('login.jsp')</script>");     
           
             }
            else{
            %>
        <h1>Add food type</h1>
        <form class="form-horizontal" method="post" action="add_foodtypedb.jsp">
<fieldset>

<!-- Form Name -->
<legend></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="foodtype">Food type Name</label>  
  <div class="col-md-4">
  <input id="foodtype" name="foodtype" type="text" placeholder="Enter Food Type Name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="add"></label>
  <div class="col-md-8">
    <button id="add" name="add" class="btn btn-success">Add</button>
    <button id="clear" type="reset" name="clear" class="btn btn-danger">clear</button>
  </div>
</div>

</fieldset>
</form>
        <%
             }
             
}
catch(Exception e)
{
 
out.println(e);
}
             %>

    </body>
</html>
