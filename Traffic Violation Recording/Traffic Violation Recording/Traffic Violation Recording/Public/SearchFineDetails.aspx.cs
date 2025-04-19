using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

using System.Data.SqlClient;
using System.IO;
using System.Configuration;
namespace Traffic_Crime.Public
{
    public partial class FineDetails : System.Web.UI.Page
    {
        SqlConnection con = new SqlConnection(ConfigurationManager.ConnectionStrings["DB"].ToString());
        protected void Page_Load(object sender, EventArgs e)
        {
            try
            {

                //Open the database connection
                con.Open();
                //Query to select values from table

                string query = "Select * from WARNING where Name='" + Session["Username"].ToString() + "' ";
                SqlCommand cmd = new SqlCommand(query, con);

                SqlDataReader dr = cmd.ExecuteReader();


                if (dr.HasRows)
                {
                    lblWarning.Text = "DL will be cancelled for next violation";
                }

            }


            catch (Exception ex)
            {
                Response.Write(ex.Message);
            }

            finally
            {
                con.Close();
            }
        }

        protected void ImgbtnSearch_Click(object sender, ImageClickEventArgs e)
        {
            try
            {

                //Open the database connection
                con.Open();
                //Query to select values from table

                string query = "Select * from FINE_DETAILS where VRegNo='" + txtSearch.Text + "' ";
                SqlCommand cmd = new SqlCommand(query, con);

                SqlDataReader dr = cmd.ExecuteReader();


                GridView1.DataSource = dr;
                GridView1.DataBind();


            }


            catch (Exception ex)
            {
                Response.Write(ex.Message);
            }

            finally
            {
                con.Close();
            }
        }
    }
}