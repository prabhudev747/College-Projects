<%-- 
    Document   : get_fooditem
    Created on : 1 Jun, 2021, 12:00:22 PM
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
            dbcon obj=new dbcon();
        Connection con=obj.database_connect();
           int foodtype=Integer.parseInt(request.getParameter("q"));
           //out.println("foodtype id="+foodtype);
           String query="select * from food_item  where food_type_id=?";
        PreparedStatement ps=con.prepareStatement(query);
        ps.setInt(1,foodtype);
        ResultSet rs=ps.executeQuery();
        out.println("<select  id='fooditemid'>");
        out.println("<option>Select food item</option>");
         while(rs.next())
         {
             
             int fooditemid=rs.getInt("food_item_id");
             String fooditemname=rs.getString("food_name");
              out.println("<option value='"+fooditemid +"'>"+fooditemname+"</option>");
         }
          out.println("</select>");      
%>
    </body>
</html>
