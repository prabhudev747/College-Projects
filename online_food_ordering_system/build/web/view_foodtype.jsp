<%-- 
    Document   : view_foodtype
    Created on : 24 May, 2021, 10:16:22 AM
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
       
    <center>
        <%
            dbcon obj=new dbcon();
        Connection con=obj.database_connect();
        String query="select * from food_type";
        PreparedStatement ps=con.prepareStatement(query);
         ResultSet rs=ps.executeQuery();
          out.println("<table border='1'>");
          out.println("<tr><td>FOOD_type_id</td><td>FOOD_type_NAME</td></tr>");
                  
         while(rs.next())
         {
             out.println("<tr><td>"+rs.getInt("food_type_id")+"</td><td> "+rs.getString("food_type_name")+"</td></tr>");
         }
          
          out.println("</table>");
        %>
        </center>
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
