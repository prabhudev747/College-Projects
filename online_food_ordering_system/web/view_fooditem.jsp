<%-- 
    Document   : view_fooditem
    Created on : 24 May, 2021, 11:46:43 AM
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
    
       <form method="post" action="view_food_itemnew.jsp" class="form-horizontal">
<fieldset>
      <%
        dbcon obj=new dbcon();
        Connection con=obj.database_connect();
      %>

<!-- Form Name -->
<legend>View Food Item</legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="select">Select Food type</label>
  <div class="col-md-4">
    <select id="select" name="select" class="form-control">
      <option value="">Select food type</option>
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

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btn"></label>
  <div class="col-md-4">
    <button id="btn" name="btn" class="btn btn-success">Search</button>
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
