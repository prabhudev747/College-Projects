<%-- 
    Document   : add_fooditemdb
    Created on : 24 May, 2021, 10:46:53 AM
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
        int foodtypeid=Integer.parseInt(request.getParameter("foodtype"));
        String fooditem=request.getParameter("t1");
        int price=Integer.parseInt(request.getParameter("t2"));
        String query="insert into food_item(food_name,food_type_id,price)values(?,?,?)";
         PreparedStatement ps=con.prepareStatement(query);
         ps.setString(1,fooditem);
         ps.setInt(2,foodtypeid);
         ps.setInt(3,price);
         int x=ps.executeUpdate();
         if(x>0)
         {
             out.println("<script>alert('food item added successfully')</script>");
             out.println("<script>window.location.replace('admin_home.jsp')</script>");
             
         } 
         else
         {
              out.println("<script>alert('problem in food item...')</script>");
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
