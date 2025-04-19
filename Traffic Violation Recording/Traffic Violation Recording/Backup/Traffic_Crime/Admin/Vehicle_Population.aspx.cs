using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

using System.Data.SqlClient;
using System.Configuration;

using System.Data;
using System.Web.UI.DataVisualization.Charting;

namespace Traffic_Crime.Admin
{
    public partial class Vehicle_Population : System.Web.UI.Page
    {
        SqlConnection con = new SqlConnection(ConfigurationManager.ConnectionStrings["DB"].ToString());
        protected void Page_Load(object sender, EventArgs e)
        {
            colChart();
            pieChart();
        }

        protected void colChart()
        {

            try
            {
                DataTable dt = new DataTable();
                con.Open();
                string query = "Select * from POPULATION where   Category='"+ddlCategory.SelectedValue+"'";
                SqlDataAdapter sda = new SqlDataAdapter(query, con);
                DataSet ds = new DataSet();
                sda.Fill(ds);
                Chart1.DataSource = ds;
                //Chart1.Series[0].Name = "Temperature";
                //Chart1.Series[1].Name = "Record High";
                Chart1.Series["VehicleNo"].XValueMember = "Year";
                Chart1.Series["VehicleNo"].YValueMembers = "VehicleNo";
                
                Chart1.DataBind();
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

        protected void pieChart()
        {

            try
            {
                DataTable dt = new DataTable();
                con.Open();
                string query = "Select * from POPULATION where Category='" + ddlCategory.SelectedItem.Text + "' and Year='" + ddlYear.SelectedValue + "'";
                SqlDataAdapter sda = new SqlDataAdapter(query, con);
                DataSet ds = new DataSet();
                sda.Fill(ds);
                Chart2.DataSource = ds;

                Chart2.Series["Category"].XValueMember = "Category";
                Chart2.Series["Category"].YValueMembers = "VehicleNo";
                //Chart2.Series["Series2"].YValueMembers = "Area";
                //Chart2.Series["Series2"].XValueMember = "Year";
                Chart2.DataBind();
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
        protected void btnSubmit_Click(object sender, EventArgs e)
        {
            try
            {


                //Open the database connection
                con.Open();

                //Query to select values from table

                string query = "Insert into POPULATION(Category,VehicleNo,Year)values('" + ddlCategory.SelectedItem.Text + "','" + txtVehicleNo.Text + "','" + ddlYear.SelectedItem.Text + "')";
                SqlCommand cmd = new SqlCommand(query, con);
                int i = cmd.ExecuteNonQuery();

                if (i == 1)
                {
                    string sScript = "<script language='javascript'> alert('Added Successfully'); window.location.href = 'Vehicle_Population.aspx'; </script>";
                    ClientScript.RegisterStartupScript(typeof(Page), "alert", sScript);

                    //lblmsg.Text = "Document Upload Successfully";
                }

                else
                {
                    string sScript = "<script language='javascript'> alert('Failed !Check the details'); window.location.href = 'Vehicle_Population.aspx'; </script>";
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

        protected void ddlYear_SelectedIndexChanged(object sender, EventArgs e)
        {

           

                try
                {
                    DataTable dt = new DataTable();
                    con.Open();
                    string query = "Select * from POPULATION where Year='" + ddlYear.SelectedValue + "'";
                    SqlDataAdapter sda = new SqlDataAdapter(query, con);
                    DataSet ds = new DataSet();
                    sda.Fill(ds);
                    Chart2.DataSource = ds;

                    Chart2.Series["Category"].XValueMember = "Category";
                    Chart2.Series["Category"].YValueMembers = "VehicleNo";
                    //Chart2.Series["Series2"].YValueMembers = "Area";
                    //Chart2.Series["Series2"].XValueMember = "Year";
                    Chart2.DataBind();
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