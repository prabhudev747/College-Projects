using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

using System.Data.SqlClient;

using System.Configuration;
using System.Net;
using System.Net.Mail;
namespace Traffic_Crime.Admin
{
    public partial class Alloted_Cases : System.Web.UI.Page
    {
        SqlConnection con = new SqlConnection(ConfigurationManager.ConnectionStrings["DB"].ToString());
        protected void Page_Load(object sender, EventArgs e)
        {
            if (!Page.IsPostBack)
            {
                try
                {

                    //Open the database connection
                    con.Open();
                    //Query to select values from table

                    string query = "Select * from CASE_ASSIGN where AssignedTo='" + Session["username"] + "' ";
                    SqlCommand cmd = new SqlCommand(query, con);

                    SqlDataReader dr = cmd.ExecuteReader();

                    ddlAssignedTo.DataSource = dr;
                    ddlAssignedTo.DataTextField = "ComplaintLodge";
                    ddlAssignedTo.DataBind();


                }


                catch (Exception ex)
                {
                    Response.Write(ex.Message);
                }

                finally
                {
                    con.Close();
                }

                DisplayAssignedCase();
            }

        }

        protected void ddlAssignedTo_SelectedIndexChanged(object sender, EventArgs e)
        {
            DisplayAssignedCase();
        }

        void DisplayAssignedCase()
        {
            try
            {

                //Open the database connection
                con.Open();
                //Query to select values from table

                string query = "Select * from CASE_ASSIGN where ComplaintLodge='" + ddlAssignedTo.SelectedItem.Text + "' ";
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

                string query = "Select * from COMPLAINT where Name='" + ddlAssignedTo.SelectedItem.Text + "' ";
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
                    string sScript = "<script language='javascript'> alert('Status Updated Successfully'); window.location.href = 'Alloted_Cases.aspx'; </script>";
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

        protected void GridView1_SelectedIndexChanged(object sender, EventArgs e)
        {
            string sendmail = GridView1.SelectedRow.Cells[1].Text;
            try
            {



                SmtpClient smtpc = new SmtpClient("smtp.gmail.com");

                smtpc.Port = 587;

                smtpc.EnableSsl = true;

                smtpc.UseDefaultCredentials = false;

                smtpc.Credentials = new NetworkCredential("v4tech.project@gmail.com", "v4tech1234567");

                MailMessage email = new MailMessage("v4tech.project@gmail.com", sendmail, "Complaint Status", txtStatus.Text);

                try
                {

                    smtpc.Send(email);

                    lblmsg.Text = "Message has been successfully sent";

                }

                catch (Exception ex)
                {
                    lblmsg.Text = "Could not send the e-mail - error: " + ex.Message;
                }

            }
            catch (Exception ex)
            {
                Response.Write("Could not send the e-mail - error: " + ex.Message);
            }
        }
    }
}