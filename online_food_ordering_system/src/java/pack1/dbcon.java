
package pack1;
import java.sql.*;

public class dbcon {
public Connection database_connect() throws ClassNotFoundException, SQLException 
    {
       // Connection con=null;
        Class.forName("com.mysql.jdbc.Driver");
       Connection con=(Connection)DriverManager.getConnection("jdbc:mysql://localhost:3306/shivu_mess","root","");
        return con;
    } 
}
