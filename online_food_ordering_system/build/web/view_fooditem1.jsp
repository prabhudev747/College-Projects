<%-- 
    Document   : view_fooditem1
    Created on : 25 May, 2021, 1:07:57 PM
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
  <script>
        function f1(str)
        {
           alert("Iam function f1() of JavaScript foodtypeId="+str);
            var xmlhttp=new XMLHttpRequest();
             xmlhttp.onreadystatechange=function(){
                if(this.readyState==4 && this.status==200)
                {
                    document.getElementById("display").innerHTML=this.responseText;
                }
            };
             xmlhttp.open("GET","retrive_fooditem.jsp?q="+str,true);
            xmlhttp.send();
        }
        </script>
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
        <form class="form-horizontal">
<fieldset>
    

<!-- Form Name -->
<legend>View food item</legend>
<%
            dbcon obj=new dbcon();
         Connection con=obj.database_connect();
%>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="select">Select Food type</label>
  <div class="col-md-4">
      <select id="select" name="select" class="form-control" onchange="f1(this.value)">
      <option value="">Select food type</option>
     <%
          String query="select * from food_type";
          PreparedStatement ps=con.prepareStatement(query);
         ResultSet rs=ps.executeQuery();
         while(rs.next())
         {
             int food_type_id=rs.getInt("food_type_id");
             String food_type_name=rs.getString("food_type_name");
             out.println("<option value='"+food_type_id+"'>"+food_type_name+"</option>");
         }
        %>
    </select>
  </div>
</div>
    <div id="display">DISPLAY HERE</div>

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
