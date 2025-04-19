<%-- 
    Document   : place_order
    Created on : 31 May, 2021, 10:59:17 AM
    Author     : sanjay singh
--%>

<%@page import="java.sql.*,pack1.*" contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
       function retrive(foodtypeid)
       {
           alert("iam retrive_foodtypeid="+foodtypeid);
          var xmlhttp=new XMLHttpRequest();
             xmlhttp.onreadystatechange=function(){
                if(this.readyState==4 && this.status==200)
                {
                    document.getElementById("drop1").innerHTML=this.responseText;
                }
            };
             xmlhttp.open("GET","get_fooditem.jsp?q="+foodtypeid,true);
            xmlhttp.send();
        }
        </script>
        <script>
       
  
       function get_price(fooditemid)
       {
           alert("iam get_price="+fooditemid);
          var xmlhttp=new XMLHttpRequest();
             xmlhttp.onreadystatechange=function(){
                if(this.readyState==4 && this.status==200)
                {
                    document.getElementById("p").innerHTML=this.responseText;
                }
            };
             xmlhttp.open("GET","get_foodprice.jsp?q="+fooditemid,true);
            xmlhttp.send();
        }
       
       
  </script>
  <script>
      
      function compute_amount(qty)
       {
          
           price=document.getElementById("t1").value;
          // alert("quantity=>"+qty+"price=>"+price);
           amt=(qty*price);
           document.getElementById("t3").value=amt;
        }
  </script>
        <title>JSP Page</title>
    </head>
   
    
    <body>
        <form method="post" action="save.jsp" class="form-horizontal">
<fieldset>
    <%
        dbcon obj=new dbcon();
        Connection con=obj.database_connect();
    %>

<!-- Form Name -->
<legend>Place Food Order</legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="drop">Select Food type</label>
  <div class="col-md-4">
    <select id="drop" name="drop" class="form-control" onchange="retrive(this.value)">
      <option value="">select food type</option>
       <%
          String query="select * from food_type";
          PreparedStatement ps=con.prepareStatement(query);
         ResultSet rs=ps.executeQuery();
         while(rs.next())
         {
             int food_type_id=rs.getInt("food_type_id");
             String food_type_name=rs.getString("food_type_name");
             out.println("<option value='"+food_type_id +"'>"+food_type_name+"</option>");
         } 

         
%>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="drop1">Select Food item</label>
  <div class="col-md-4">
    <select id="drop1" name="drop1" class="form-control" onchange="get_price(this.value)">
      <option value="">Select Food item</option>
  
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="t1">Price</label>  
  <div id="p" class="col-md-4">
      <input id="t1" name="t1" type="text" placeholder="price" class="form-control input-md" required=""  >
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="t2">Quantity</label>  
  <div class="col-md-4">
  <input id="t2" name="t2" type="text" placeholder="Quantity" class="form-control input-md" required="" onkeyup="compute_amount(this.value)">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="t3">Amount</label>  
  <div class="col-md-4">
      <input id="t3" name="t3" type="text" placeholder="Amount" class="form-control input-md" required="" vlaue="can't touch" readonly>
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btn"></label>
  <div class="col-md-8">
    <button id="btn" name="btn" class="btn btn-primary">Place Order</button>
    <button id="btn" name="btn" class="btn btn-info">clear</button>
  </div>
</div>


</fieldset>
</form>
    </body>
</html>
