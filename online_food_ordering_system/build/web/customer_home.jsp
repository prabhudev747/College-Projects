<%-- 
    Document   : customer_home
    Created on : 28 May, 2021, 2:05:34 PM
    Author     : sanjay singh
--%>

<%@page import="java.sql.*,pack1.*" contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <%
           session obj1=new session();
        if(!obj1.logged_in(session, request))
            {   
               out.println("<script>window.location.replace('login.jsp')</script>");     
           
             }
        else{
            out.println("<a href='place_order.jsp'>Place ORDER</a>");
        }
          %>
    </body>
</html>
