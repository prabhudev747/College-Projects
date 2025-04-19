<%-- 
    Document   : admin_home
    Created on : 18 May, 2021, 6:18:16 PM
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
        
        <h1>Admin Home Page</h1>
        <a href="add_foodtype.jsp">add food type</a><br><br>
        <a href="add_fooditem.jsp">add food item</a><br><br>
        <a href="view_foodtype.jsp">view food type</a><br><br>
        <a href="view_fooditem1.jsp">view food item</a><br><br>
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
