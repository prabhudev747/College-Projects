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
    public partial class AddFineDetails : System.Web.UI.Page
    {
        SqlConnection con = new SqlConnection(ConfigurationManager.ConnectionStrings["DB"].ToString());
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        

        protected void btnAddDetails_Click(object sender, EventArgs e)
        {
            try
            {



                //Open the database connection
                con.Open();
                //Query to select values from table

                string query = "Insert into FINE_DETAILS(VRegNo,NoticeNo,Date,Time,Offence,Amount)Values('" + txtVehicleRegNo.Text + "','" + txtNoticeNo.Text + "','" + txtDate.Text + "','" + ddlVHrs.SelectedItem.Text+"+"+ddlVMinutes.SelectedItem.Text+ "','" + txtOffence.Text + "','" + txtAmount.Text + "')";
                SqlCommand cmd = new SqlCommand(query, con);
                int i = cmd.ExecuteNonQuery();

                if (i == 1)
                {
                    string sScript = "<script language='javascript'> alert('Added Successfully'); window.location.href = 'AddFineDetails.aspx'; </script>";
                    ClientScript.RegisterStartupScript(typeof(Page), "alert", sScript);

                    //lblmsg.Text = "Document Upload Successfully";
                }
                else
                {
                    string sScript = "<script language='javascript'> alert('Failed to Add details'); window.location.href = 'AddFineDetails.aspx'; </script>";
                    ClientScript.RegisterStartupScript(typeof(Page), "alert", sScript);
                }


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