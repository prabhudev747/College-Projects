using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

using System.Data.SqlClient;
using System.Configuration;
namespace Traffic_Crime.Admin
{
    public partial class Login : System.Web.UI.Page
    {
        SqlConnection con = new SqlConnection(ConfigurationManager.ConnectionStrings["DB"].ToString());
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void Imgbtn_Login_Click(object sender, ImageClickEventArgs e)
        {

            try
            {
                con.Open();
                string Query = "select * from REGISTER where Username='" + txtUsername.Text + "' and Password='" + txtPassword.Text + "' ";

                SqlCommand command = new SqlCommand(Query, con);
                SqlDataReader dr = command.ExecuteReader();

                if (dr.HasRows)
                {
                    Response.Redirect("~/Officer/Alloted_Cases.aspx");
                }

                else if (txtUsername.Text == "admin" && txtPassword.Text == "admin")
                {
                    Response.Redirect("Officers_Registration.aspx");
                }
                else

                    lblmsg.Text = "incorrect username or password";
            }

            catch (Exception ex)
            {
                Response.Write(ex.Message);
            }

            finally
            {
                con.Close(); //close the database connection
            }
        }
    }
}