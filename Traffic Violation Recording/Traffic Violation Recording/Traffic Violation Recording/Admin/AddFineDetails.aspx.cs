using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

using System.Data.SqlClient;

using System.Configuration;

using System.Net.Mail;

using System.Net;

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
                    mail();
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

        void mail()
        {
            try
            {
                MailMessage mailMessage = new MailMessage("projectinfo1212@gmail.com", txtEmailid.Text, "Traffic Violation Fine Details", "Offence Details : " + txtOffence.Text + "    " + "Date Occured : " + txtDate.Text );
                /* mailMessage.To.Add(txtTomail.Text);
                 mailMessage.From = new MailAddress(from_mail);
                 mailMessage.Subject = txtSubject.Text;
                 mailMessage.Body = txtbody.Text;*/


                SmtpClient smtpClient = new SmtpClient("smtp.gmail.com");
                smtpClient.Port = 587;

                smtpClient.EnableSsl = true;

                smtpClient.UseDefaultCredentials = false;
                smtpClient.Credentials = new NetworkCredential("projectinfo1212@gmail.com", "project1212");

                smtpClient.Send(mailMessage);
                // Response.Write("E-mail sent!");
            }
            catch (Exception ex)
            {
                Response.Write("Could not send the e-mail - error: " + ex.Message);
            }
        }
    }
}