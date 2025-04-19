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
    public partial class Complaint_Form : System.Web.UI.Page
    {
        string ComplaintNo;
        SqlConnection con = new SqlConnection(ConfigurationManager.ConnectionStrings["DB"].ToString());
        protected void Page_Load(object sender, EventArgs e)
        {
            try
            {

                con.Open();

                string query = "Select max(ComplaintNo+1)as ComplaintNo from COMPLAINT";
                SqlCommand cmd = new SqlCommand(query, con);

                SqlDataReader dr = cmd.ExecuteReader();

                while (dr.Read())
                {
                    ComplaintNo = dr["ComplaintNo"].ToString();
                    //wrong herr         string Em_id = 
                    Session["ComplaintNo"] = ComplaintNo.ToString();
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

        protected void ImgbtnSubmit_Click(object sender, ImageClickEventArgs e)
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

                string query = "Insert into COMPLAINT(VehicleReg,ViolationType,ViolationDate,ViolationTime,ViolationPlace,ViolationDetails,Name,Email,MobileNo,Photo,ComplaintNo)Values('" + txtRegNo.Text + "','" + ddlVType.SelectedItem.Text + "','" + ddlVHrs.SelectedItem.Text +":"+ ddlVMinutes.SelectedItem.Text + "','" + txtVDate.Text + "','" + txtVPlace.Text + "','" + txtVDetails.Text + "','" + txtName.Text + "','" + txtEmail.Text + "','" + txtMobileNo.Text + "','" + file_photo + "','" + ComplaintNo + "')";
                SqlCommand cmd = new SqlCommand(query, con);
                int i = cmd.ExecuteNonQuery();

                if (i == 1)
                {
                    string sScript = "<script language='javascript'> alert('Added Successfully'); window.location.href = 'ComplaintNo.aspx'; </script>";
                    ClientScript.RegisterStartupScript(typeof(Page), "alert", sScript);

                    //lblmsg.Text = "Document Upload Successfully";
                }
                else
                {
                    string sScript = "<script language='javascript'> alert('Failed to Add details'); window.location.href = 'Complaint_Form.aspx'; </script>";
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