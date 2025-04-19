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
    public partial class ViewFineDetails : System.Web.UI.Page
    {
        int VRegNo = 0;
        SqlConnection con = new SqlConnection(ConfigurationManager.ConnectionStrings["DB"].ToString());
        protected void Page_Load(object sender, EventArgs e)
        {
            try
            {

                con.Open();

                string query = "Select * from PAYMENT  ";
                SqlCommand cmd = new SqlCommand(query, con);

                SqlDataReader dr = cmd.ExecuteReader();

                GridView1.DataSource = dr;
                GridView1.DataBind();
            }

            catch (Exception ex)
            {
                Response.Write(ex.Message + "Check the details");
            }

            finally
            {
                con.Close();
            }
            
        }

        protected void GridView1_SelectedIndexChanged(object sender, EventArgs e)
        {

           

            
            try
            {

                con.Open();

                string query = "Select * from PAYMENT where RegNo ='" + GridView1.SelectedRow.Cells[1].Text + "' ";
                SqlCommand cmd = new SqlCommand(query, con);

                SqlDataReader dr = cmd.ExecuteReader();

                while (dr.Read())
                {

                    if (dr.HasRows)
                    {
                        VRegNo++;
                    }

                }

                if (VRegNo >= 3)
                {
                    lblfine.Text = "Warning has been sent";

                    warning();


                }
                else
                {
                    lblfine.Text = "Not elgible for Warning";
                }
            }

            catch (Exception ex)
            {
                Response.Write(ex.Message + "Check the details");
            }

            finally
            {
                con.Close();
            }

        }

        void warning()
        {
            SqlConnection con = new SqlConnection(ConfigurationManager.ConnectionStrings["DB"].ToString());
            try
            {



                //Open the database connection
                con.Open();
                //Query to select values from table

                string query = "Insert into WARNING(Name,Message)Values('" + GridView1.SelectedRow.Cells[2].Text + "','" + lblfine.Text + "')";
                SqlCommand cmd = new SqlCommand(query, con);
                 cmd.ExecuteNonQuery();

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