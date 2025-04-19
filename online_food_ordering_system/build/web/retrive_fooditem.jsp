<%-- 
    Document   : retrive_fooditem.jsp
    Created on : 27 May, 2021, 10:48:50 AM
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
           int foodtype=Integer.parseInt(request.getParameter("q"));
           out.println("foodtype id="+foodtype);
           String query="select * from food_item  where food_type_id=?";
        PreparedStatement ps=con.prepareStatement(query);
        ps.setInt(1,foodtype);
        ResultSet rs=ps.executeQuery();
          out.println("<table border='1'>");
          out.println("<tr><td>FOOD_NAME</td><td>PRICE</td></tr>");
                  
         while(rs.next())
         {
             
             out.println("<tr><td>"+rs.getString("food_name")+"</td><td> "+rs.getInt("price")+"</td></tr>");
         }
          
          out.println("</table>");
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
