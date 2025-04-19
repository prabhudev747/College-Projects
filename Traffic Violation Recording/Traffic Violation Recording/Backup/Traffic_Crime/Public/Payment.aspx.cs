using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

using System.Data.SqlClient;

using System.Configuration;
namespace Traffic_Crime.Public
{
    public partial class Payment : System.Web.UI.Page
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

                string query = "Insert into PAYMENT(NoticeNo,RegNo,Name,Address,IssuingRTO,Amount,PayMode)Values('" + txtNotice.Text + "','" + txtVRegNo.Text + "','" + txtName.Text + "','" + txtAddress.Text + "','" + txtIssuingRTO.Text + "','" + txtAmount.Text + "','" + ddlPayMode.SelectedItem.Text + "')";
                SqlCommand cmd = new SqlCommand(query, con);
                int i = cmd.ExecuteNonQuery();

                if (i == 1)
                {
                    string sScript = "<script language='javascript'> alert('Added Successfully'); window.location.href = 'Payment.aspx'; </script>";
                    ClientScript.RegisterStartupScript(typeof(Page), "alert", sScript);

                    //lblmsg.Text = "Document Upload Successfully";
                }
                else
                {
                    string sScript = "<script language='javascript'> alert('Failed to Add details'); window.location.href = 'Payment.aspx'; </script>";
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

        protected void txtNotice_TextChanged(object sender, EventArgs e)
        {
            try
            {

                //Open the database connection
                con.Open();
                //Query to select values from table

                string query = "Select * from FINE_DETAILS where NoticeNo='" + txtNotice.Text + "' ";
                SqlCommand cmd = new SqlCommand(query, con);

                SqlDataReader dr = cmd.ExecuteReader();

                while (dr.Read())
                {
                    txtVRegNo.Text = dr["VRegNo"].ToString();
                    txtAmount.Text = dr["Amount"].ToString();
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