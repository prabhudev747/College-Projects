using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Traffic_Crime.Public
{
    public partial class ComplaintNo : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            lblComplaintNo.Text = Session["ComplaintNo"].ToString();
        }
    }
}