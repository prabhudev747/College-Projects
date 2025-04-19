<%-- 
    Document   : add_fooditem
    Created on : 24 May, 2021, 10:15:58 AM
    Author     : sanjay singh
--%>

<%@page import="java.sql.*,pack1.*" contentType="text/html" pageEncoding="UTF-8"%>
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
        <form  method="post" action="add_fooditemdb.jsp" class="form-horizontal">
<fieldset>
    <%
        dbcon obj=new dbcon();
        Connection con=obj.database_connect();
        
        
        %>

<!-- Form Name -->
<legend>Add food type</legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="drop">food type</label>
  <div class="col-md-4">
    <select id="drop" name="foodtype" class="form-control">
      <option value=" ">Select food type</option>
      <%
          String query="select * from food_type";
          PreparedStatement ps=con.prepareStatement(query);
         ResultSet rs=ps.executeQuery();
         while(rs.next())
         {
             int food_type_id=rs.getInt("food_type_id");
             String food_type_name=rs.getString("food_type_name");
             out.println("<option value='"+food_type_id +"'>"+food_type_name+"</option>");
         } 

         
%>
      
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="t1">Food item Name</label>  
  <div class="col-md-4">
  <input id="t1" name="t1" type="text" placeholder="Enter food item name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="t2">price per unit/plate</label>  
  <div class="col-md-4">
  <input id="t2" name="t2" type="text" placeholder="Enter price per plate" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btn"></label>
  <div class="col-md-8">
    <button id="btn" name="btn" class="btn btn-success">Add food iteam</button>
    <button id="btn" type="reset" name="btn" class="btn btn-warning">clear</button>
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
