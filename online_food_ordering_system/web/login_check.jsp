<%-- 
    Document   : login_check
    Created on : 18 May, 2021, 12:45:58 PM
    Author     : HP
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
            String email=request.getParameter("email");
            String password=request.getParameter("Password");
         dbcon obj=new dbcon();
         Connection con=obj.database_connect();
         
        String query1="select * from admin where email=? and password=?";

        PreparedStatement ps1=con.prepareStatement(query1);

        ps1.setString(1,email);
        ps1.setString(2,password);

        ResultSet rs1=ps1.executeQuery();
if(rs1.next())
{
    //out.println("Successfull Login...");
    session.setAttribute("uid", email);
    out.println("<script>alert('sucessful login')</script>");
    //response.sendRedirect("admin_home.jsp");
    out.println("<script>window.location.replace('admin_home.jsp')</script>");
}
else{
    String query2="select * from customer where email=? and password=?";
    PreparedStatement ps2=con.prepareStatement(query2);
    ps2.setString(1,email);
        ps2.setString(2,password);
    ResultSet rs2=ps2.executeQuery();
    if(rs2.next())
    {   
        String cid=rs2.getString("cid");
    //out.println("Successfull Login...");
    session.setAttribute("uid", email);
     session.setAttribute("cid", cid);
    out.println("<script>alert('sucessful login')</script>");
    //response.sendRedirect("admin_home.jsp");
    out.println("<script>window.location.replace('customer_home.jsp')</script>");
    }
    else{
    out.println("<script>alert('unsecessfull login.... invalide credentioal')</script>");
    //out.println("Invalid Login Credentials...");         
    //RequestDispatcher rd=request.getRequestDispatcher("login.jsp");
      // rd.include(request, response);
      out.println("<script>window.location.replace('login.jsp')</script>");
    }
    }
        }
            catch(Exception e)
            {
                System.out.println(e);
            }
        %>
        
    </body>
</html>
