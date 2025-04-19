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
    public partial class Assign_Case : System.Web.UI.Page
    {
        SqlConnection con = new SqlConnection(ConfigurationManager.ConnectionStrings["DB"].ToString());
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void ImgbtnSubmit_Click(object sender, ImageClickEventArgs e)
        {
            try
            {




                //Open the database connection
                con.Open();
                //Query to select values from table

                string query = "Insert into CASE_ASSIGN(AssignedTo,Date,ComplaintLodge,VoilationDetails,ComplaintNo)Values('" + ddlAssigned.SelectedItem.Text + "','" + txtDateAssign.Text + "','" + ddlComplaint.SelectedItem.Text + "','" + txtViolation.Text + "','"+txtComplaintNo.Text+"')";
                SqlCommand cmd = new SqlCommand(query, con);
                int i = cmd.ExecuteNonQuery();

                if (i == 1)
                {
                    string sScript = "<script language='javascript'> alert('Added Successfully'); window.location.href = 'Assign_Case.aspx'; </script>";
                    ClientScript.RegisterStartupScript(typeof(Page), "alert", sScript);

                    //lblmsg.Text = "Document Upload Successfully";
                }
                else
                {
                    string sScript = "<script language='javascript'> alert('Failed to Add details'); window.location.href = 'Assign_Case.aspx'; </script>";
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

        protected void ddlComplaint_SelectedIndexChanged(object sender, EventArgs e)
        {
            try
            {

                //Open the database connection
                con.Open();
                //Query to select values from table

                string query = "Select * from COMPLAINT where Name='" + ddlComplaint.SelectedItem.Text + "' ";
                SqlCommand cmd = new SqlCommand(query, con);

                SqlDataReader dr = cmd.ExecuteReader();

                if (dr.Read())
                {
                    txtViolation.Text = dr["ViolationDetails"].ToString();
                    txtComplaintNo.Text = dr["ComplaintNo"].ToString();
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