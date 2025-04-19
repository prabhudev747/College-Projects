<%-- 
    Document   : save
    Created on : 4 Jun, 2021, 1:30:37 PM
    Author     : sanjay singh
--%>

<%@page import="java.text.SimpleDateFormat"%>
<%@page import="java.sql.*,pack1.*,java.util.Date" contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <%
            try{
                String customerid=(String)session.getAttribute("cid");
                int cid=Integer.parseInt(customerid);
                int fooditemid=Integer.parseInt(request.getParameter("drop1"));
                int quantity=Integer.parseInt(request.getParameter("t2"));
                int amount=Integer.parseInt(request.getParameter("t3"));
                int status=0;
                dbcon obj=new dbcon();
                Connection con=obj.database_connect();
                String query="insert into food_order(cid,fooditem_id,quantity,orderdate,amount,status) values(?,?,?,?,?,?)";
                PreparedStatement ps=con.prepareStatement(query);
                ps.setInt(1, cid);
                ps.setInt(2, fooditemid);
                ps.setInt(3, quantity);
                Date date1=new Date();
                SimpleDateFormat formatter=new SimpleDateFormat("yyyy-MM-dd HH-mm-ss");
                String d=formatter.format(date1).toString();
                ps.setString(4, d);
                ps.setInt(5, amount);
                ps.setInt(6, status);
                int x=ps.executeUpdate();
                if(x>0)
                {
                    out.println("<script>alert('ordered successfully')</script>");
                    out.println("<script>window.location.replace('place_order.jsp')</script>");
                }
            }catch(Exception e)
            {
                out.println(e);
            }
            %>
    </body>
</html>
