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
    public partial class Complaint_Status : System.Web.UI.Page
    {
        SqlConnection con = new SqlConnection(ConfigurationManager.ConnectionStrings["DB"].ToString());
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void ImgbtnSearch_Click(object sender, ImageClickEventArgs e)
        {
            try
            {

                //Open the database connection
                con.Open();
                //Query to select values from table

                string query = "Select * from ALLOTTED_CASE where ComplaintNo='" + txtComplaintNo.Text + "' ";
                SqlCommand cmd = new SqlCommand(query, con);

                SqlDataReader dr = cmd.ExecuteReader();


                if (dr.Read())
                {
                    lblStatus.Text = "Status: " + dr["CaseStatus"].ToString();
                    lblDetails.Text = "Details: " + dr["StatusDetails"].ToString();
                }
                else
                {
                    lblDetails.Text = "No Details Updated";
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
    }
}