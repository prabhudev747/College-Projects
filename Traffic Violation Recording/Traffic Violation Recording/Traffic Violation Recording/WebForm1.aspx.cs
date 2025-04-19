using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Configuration;
using System.Data.SqlClient;

namespace Traffic_Crime
{
    public partial class WebForm2 : System.Web.UI.Page
    {
        SqlConnection con = new SqlConnection("Data Source=INTEL-PC;database=Oral;user id=sa;password=123");
        protected void Page_Load(object sender, EventArgs e)
        {
            DropDownList1.SelectedIndexChanged += new EventHandler(DropDownList1_SelectedIndexChanged);
            if (!IsPostBack)
            {
                DataBind();
            }
            display();
        }

        void display()
        {
            try
            {
                con.Open();
                string rquery = "select * from  Patientdata where PatId ='" + DropDownList1.SelectedItem.Text + "'";
                SqlCommand cmd = new SqlCommand(rquery, con);

                SqlDataReader dr = cmd.ExecuteReader();

                if (dr.Read())
                {
                    TextBox1.Text = dr["PatName"].ToString();
                }
            }
            catch (Exception ex)
            {
            }
            finally
            {
                con.Close();
            }
        }


        void DataBind()
        {
            try
            {
                con.Open();
                string rquery = "select * from  Patientdata where DocName='" + "D" + "'";
                SqlCommand cmd = new SqlCommand(rquery, con);
                SqlDataReader dr = cmd.ExecuteReader();

                if (dr.HasRows)
                {
                    DropDownList1.DataSource = dr;
                    DropDownList1.DataTextField = "PatId";
                    DropDownList1.DataBind();
                }

            }
            catch (Exception ex)
            {

            }

            finally
            {
                con.Close();
            }

        }

        protected void DropDownList1_SelectedIndexChanged(object sender, EventArgs e)
        {
            display();
        }
    }
}