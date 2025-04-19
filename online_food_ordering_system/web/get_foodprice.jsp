<%-- 
    Document   : get_foodprice
    Created on : 1 Jun, 2021, 12:38:41 PM
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
           int fooditem=Integer.parseInt(request.getParameter("q"));
           //out.println("foodtype id="+foodtype);
           String query="select * from food_item  where food_item_id=?";
        PreparedStatement ps=con.prepareStatement(query);
        ps.setInt(1,fooditem);
        ResultSet rs=ps.executeQuery();
        rs.next();
      int price=rs.getInt("price");
      

%>
<input id="t1" name="t1" type="text" placeholder="price" class="form-control input-md" required="" value="<%=price%>" readonly >


    </body>
</html>
