 <%-- 
    Document   : view_food_itemnew
    Created on : 24 May, 2021, 7:03:37 PM
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
        int foodtypeid=Integer.parseInt(request.getParameter("select"));
        String query="(select food_name,price from food_item  where food_type_id=?) ";
        //String query="(select f.food_name,f.price from food_item f,food_type ft where f.food_type_id=ft.food_type_id) ";
        PreparedStatement ps=con.prepareStatement(query);
        ps.setInt(1,foodtypeid);
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
