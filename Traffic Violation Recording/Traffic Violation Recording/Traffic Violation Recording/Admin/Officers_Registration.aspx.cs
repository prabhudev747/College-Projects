using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

using System.Data.SqlClient;
using System.IO;
using System.Configuration;

using System.Net.Mail;

using System.Net;

namespace Traffic_Crime.Admin
{
    public partial class Officers_Registration : System.Web.UI.Page
    {
        SqlConnection con = new SqlConnection(ConfigurationManager.ConnectionStrings["DB"].ToString());
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void btnAdd_Click(object sender, EventArgs e)
        {
            try
            {
                


                //File upload steps

                string file_name_photo = Path.GetFileName(FileUpload_Photo.PostedFile.FileName);
                string file_photo = "~/images/" + file_name_photo;
                FileUpload_Photo.SaveAs(Server.MapPath(file_photo));


                //Open the database connection
                con.Open();
                //Query to select values from table

                string query = "Insert into REGISTER(FullName,Photo,DOB,Gender,Address,City,EmailId,MobileNo,Username,Password)Values('" + txtFullName.Text + "','" + file_photo + "','" + txtDate.Text + "','" + rblGender.SelectedItem.Text + "','" + txtAddress.Text + "','" + txtCity.Text + "','" + txtEmailid.Text + "','" + txtMobileNo.Text + "','" + txtUsername.Text + "','" + txtPassword.Text + "')";
                SqlCommand cmd = new SqlCommand(query, con);
                int i = cmd.ExecuteNonQuery();

                if (i == 1)
                {
                    mail();
                    string sScript = "<script language='javascript'> alert('Added Successfully'); window.location.href = 'Officers_Registration.aspx'; </script>";
                    ClientScript.RegisterStartupScript(typeof(Page), "alert", sScript);

                    //lblmsg.Text = "Document Upload Successfully";
                }
                else
                {
                    string sScript = "<script language='javascript'> alert('Failed to Add details'); window.location.href = 'Officers_Registration.aspx'; </script>";
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
                MailMessage mailMessage = new MailMessage("projectinfo1212@gmail.com", txtEmailid.Text, "Your Username and password", "Username : " + txtUsername.Text + "    " + "Password : " + txtPassword.Text);
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