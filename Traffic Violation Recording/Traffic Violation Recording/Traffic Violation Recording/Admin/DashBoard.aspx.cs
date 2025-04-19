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
    public partial class DashBoard : System.Web.UI.Page
    {
        SqlConnection con = new SqlConnection(ConfigurationManager.ConnectionStrings["DB"].ToString());
        protected void Page_Load(object sender, EventArgs e)
        {
            regPublic();
            complaints();
            Suggestion();
            Officer();
            Payments();
        }

        void regPublic()
        {
            int publics = 0;
            try
            {

                con.Open();

                string query = "Select FullName from PublicRegister_tbl  ";
                SqlCommand cmd = new SqlCommand(query, con);

                SqlDataReader dr = cmd.ExecuteReader();

                while (dr.Read())
                {

                    if (dr.HasRows)
                    {
                        publics++;
                    }

                }
                lblPublic.Text = publics.ToString();
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


        void complaints()
        {
            int complaints = 0;
            try
            {

                con.Open();

                string query = "Select ViolationType from COMPLAINT  ";
                SqlCommand cmd = new SqlCommand(query, con);

                SqlDataReader dr = cmd.ExecuteReader();

                while (dr.Read())
                {

                    if (dr.HasRows)
                    {
                        complaints++;
                    }

                }
                lblComplaints.Text = complaints.ToString();
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


        void Payments()
        {
            int Payments = 0;
            try
            {

                con.Open();

                string query = "Select NoticeNo from FINE_DETAILS  ";
                SqlCommand cmd = new SqlCommand(query, con);

                SqlDataReader dr = cmd.ExecuteReader();

                while (dr.Read())
                {

                    if (dr.HasRows)
                    {
                        Payments++;
                    }

                }

                lblPayments.Text = Payments.ToString();
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

        void Suggestion()
        {
            int Suggestion = 0;
            try
            {

                con.Open();

                string query = "Select Name from SUGGESTION ";
                SqlCommand cmd = new SqlCommand(query, con);

                SqlDataReader dr = cmd.ExecuteReader();

                while (dr.Read())
                {

                    if (dr.HasRows)
                    {
                        Suggestion++;
                    }

                }

                lblSuggestions.Text = Suggestion.ToString();
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


        void Officer()
        {
            int Officer = 0;
            try
            {

                con.Open();

                string query = "Select FullName from REGISTER  ";
                SqlCommand cmd = new SqlCommand(query, con);

                SqlDataReader dr = cmd.ExecuteReader();

                while (dr.Read())
                {

                    if (dr.HasRows)
                    {
                        Officer++;
                    }

                }

                lblOfficers.Text = Officer.ToString();
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