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
    public partial class Alloted_Cases : System.Web.UI.Page
    {
        SqlConnection con = new SqlConnection(ConfigurationManager.ConnectionStrings["DB"].ToString());
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void ddlAssignedTo_SelectedIndexChanged(object sender, EventArgs e)
        {
            try
            {

                //Open the database connection
                con.Open();
                //Query to select values from table

                string query = "Select * from CASE_ASSIGN where AssignedTo='" + ddlAssignedTo.SelectedItem.Text + "' ";
                SqlCommand cmd = new SqlCommand(query, con);

                SqlDataReader dr = cmd.ExecuteReader();

                if (dr.Read())
                {
                    txtDate.Text = dr["Date"].ToString();
                    txtComplaintno.Text = dr["ComplaintNo"].ToString();
                   // txtVoilation.Text = dr["VoilationDetails"].ToString();
                }
                bindgrid();
               // complaintno();
                


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

        void complaintno()
        {
            SqlConnection con = new SqlConnection(ConfigurationManager.ConnectionStrings["DB"].ToString());
            try
            {

                //Open the database connection
                con.Open();
                //Query to select values from table

                string query = "Select * from COMPLAINT where Name='" + ddlAssignedTo.SelectedItem.Text + "' ";
                SqlCommand cmd = new SqlCommand(query, con);

                SqlDataReader dr = cmd.ExecuteReader();

                if (dr.Read())
                {
                    txtComplaintno.Text = dr["ComplaintNo"].ToString();
                    // txtVoilation.Text = dr["VoilationDetails"].ToString();
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


        void bindgrid()
        {
            SqlConnection con = new SqlConnection(ConfigurationManager.ConnectionStrings["DB"].ToString());
            try
            {

                //Open the database connection
                con.Open();
                //Query to select values from table

                string query = "Select * from CASE_ASSIGN where AssignedTo='" + ddlAssignedTo.SelectedItem.Text + "' ";
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

        protected void ImgbtnSubmit_Click(object sender, ImageClickEventArgs e)
        {
            try
            {


                //Open the database connection
                con.Open();
                //Query to select values from table

                string query = "Insert into ALLOTTED_CASE(AssignedTo,ComplaintNo,Date,CaseStatus,StatusDetails)Values('" + ddlAssignedTo.SelectedItem.Text + "','" + txtComplaintno.Text + "','" + txtDate.Text + "','" + rblCaseStatus.SelectedItem.Text + "','"+txtStatus.Text+"')";
                SqlCommand cmd = new SqlCommand(query, con);
                int i = cmd.ExecuteNonQuery();

                if (i == 1)
                {
                    string sScript = "<script language='javascript'> alert('Allotted Successfully'); window.location.href = 'Alloted_Cases.aspx'; </script>";
                    ClientScript.RegisterStartupScript(typeof(Page), "alert", sScript);

                    //lblmsg.Text = "Document Upload Successfully";
                }
                else
                {
                    string sScript = "<script language='javascript'> alert('Failed to Add details'); window.location.href = 'Alloted_Cases.aspx'; </script>";
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