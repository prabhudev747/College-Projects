<%-- 
    Document   : add_foodtypedb
    Created on : 21 May, 2021, 1:33:04 PM
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
            try{
            String uid=(String)session.getAttribute("uid");
            //out.println("uid="+uid);
            if(uid==null)
             {
                 out.println("<script>window.location.replace('login.jsp')</script>");     
           
             }
            else{
            %>
     
        <%
           
           dbcon obj=new dbcon();
         Connection con=obj.database_connect();
         String foodtype=request.getParameter("foodtype");
         
         
String query="insert into food_type(food_type_name)values(?)";
PreparedStatement ps=con.prepareStatement(query);
ps.setString(1,foodtype);
int x=ps.executeUpdate();
     if(x>0)
    {
         out.println("<script>alert('Food type added....')</script>");
        out.println("<script>window.location.replace('admin_home.jsp')</script>");
     } 
         else
     {
        out.println("<script>alert('problem with adding food type...')</script>");
        out.println("<script>window.location.replace('admin_home.jsp')</script>");
         
     }
            
            
  %>
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
