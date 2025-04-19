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
    public partial class Suggestion : System.Web.UI.Page
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

                string query = "Insert into SUGGESTION(Name,MobileNo,Email,SType,SDescription)Values('" + txtName.Text + "','" + txtContactNo.Text + "','" + txtEmail.Text + "','" + ddlSuggestionType.SelectedItem.Text + "','" + txtDescription.Text + "')";
                SqlCommand cmd = new SqlCommand(query, con);
                int i = cmd.ExecuteNonQuery();

                if (i == 1)
                {
                    string sScript = "<script language='javascript'> alert('Added Successfully'); window.location.href = 'Suggestion.aspx'; </script>";
                    ClientScript.RegisterStartupScript(typeof(Page), "alert", sScript);

                    //lblmsg.Text = "Document Upload Successfully";
                }
                else
                {
                    string sScript = "<script language='javascript'> alert('Failed to Add details'); window.location.href = 'Suggestion.aspx'; </script>";
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