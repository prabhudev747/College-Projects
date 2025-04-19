using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

using System.Data.SqlClient;
using System.IO;

using System.Configuration;

namespace Traffic_Crime.Officer
{
    public partial class ProfileDetails : System.Web.UI.Page
    {
        static string photo;
        SqlConnection con = new SqlConnection(ConfigurationManager.ConnectionStrings["DB"].ToString());

        protected void Page_Load(object sender, EventArgs e)
        {
            lblmsg.Text = "Welcome  " + Session["Username"].ToString();
            if (!IsPostBack)
            {
                bindProfile();
                BindPhoto();
            }
        }


        void bindProfile()
        {
            try
            {

                con.Open();

                string query = "Select * from REGISTER where Username='" + Session["Username"].ToString() + "' ";
                SqlCommand cmd = new SqlCommand(query, con);

                SqlDataReader dr = cmd.ExecuteReader();

                while (dr.Read())
                {
                    lblName.Text = dr["FullName"].ToString();
                    lblGender.Text = dr["Gender"].ToString();

                    lblemailid.Text = dr["EmailId"].ToString();

                    lblMobileno.Text = dr["MobileNo"].ToString();

                    



                    photo = dr["Photo"].ToString();



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

        void BindPhoto()
        {
            try
            {

                con.Open();

                string query = "Select * from REGISTER where Username='" + Session["Username"].ToString() + "' ";
                SqlCommand cmd = new SqlCommand(query, con);

                SqlDataReader dr = cmd.ExecuteReader();

                GridView1.DataSource = dr;
                GridView1.DataBind();
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
    }
}