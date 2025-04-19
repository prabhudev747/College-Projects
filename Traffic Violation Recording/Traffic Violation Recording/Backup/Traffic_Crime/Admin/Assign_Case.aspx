<%@ Page Title="" Language="C#" MasterPageFile="~/Admin/Admin.Master" AutoEventWireup="true" CodeBehind="Assign_Case.aspx.cs" Inherits="Traffic_Crime.Admin.Assign_Case" %>
<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
    <style type="text/css">
        
        .style4
        {
        font-size: 12pt;
        width: 166px;
    }
        .style5
        {
        font-size: 12pt;
        font-weight: normal;
        width: 166px;
    }
        .style6
        {
            font-size: 16pt;
        }
        .style7
        {
            font-size: 16pt;
            color: #FFFFFF;
            background-color: #336600;
        }
        .style8
        {
            font-weight: bold;
            font-size: 14pt;
            margin-left: 219px;
        }
        
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <table class="style8" frame="box" style="border: 2px solid #0066FF">
        <tr>
            <td class="style7" colspan="2">
                Assign Case</td>
        </tr>
        <tr>
            <td class="style5">
                Case Assigned To Officers</td>
            <td>
                <asp:DropDownList ID="ddlAssigned" runat="server" DataSourceID="SqlDataSource1" 
                    DataTextField="Username" DataValueField="Username">
                </asp:DropDownList>
            </td>
        </tr>
        <tr>
            <td class="style5">
                Date of Assign</td>
            <td>
                <asp:TextBox ID="txtDateAssign" runat="server"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td class="style5">
                Complaint Lodge By</td>
            <td>
                <asp:DropDownList ID="ddlComplaint" runat="server" AutoPostBack="True" 
                    DataSourceID="SqlDataSource2" DataTextField="Name" DataValueField="Name" 
                    onselectedindexchanged="ddlComplaint_SelectedIndexChanged">
                </asp:DropDownList>
            </td>
        </tr>
        <tr>
            <td class="style5">
                Complaint No.</td>
            <td>
                <asp:TextBox ID="txtComplaintNo" runat="server" ReadOnly="True"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td class="style5">
                Voilation Details</td>
            <td>
                <asp:TextBox ID="txtViolation" runat="server" CssClass="style6" Height="107px" 
                    TextMode="MultiLine" Width="348px"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td class="style4">
                &nbsp;</td>
            <td>
                <asp:ImageButton ID="ImgbtnSubmit" runat="server" Height="42px" 
                    ImageUrl="~/images/SubmitButton.png" onclick="ImgbtnSubmit_Click" />
            </td>
        </tr>
        <tr>
            <td class="style4">
                <asp:SqlDataSource ID="SqlDataSource2" runat="server" 
                    ConnectionString="<%$Connectionstrings:DB%>" 
                    
                    selectcommand="SELECT Name FROM  COMPLAINT " 
                    
                    >
                </asp:SqlDataSource>
            </td>
            <td>
                <asp:SqlDataSource ID="SqlDataSource1" runat="server" 
                    ConnectionString="<%$Connectionstrings:DB%>" 
                    
                    selectcommand="SELECT distinct Username FROM  REGISTER " 
                   >
                </asp:SqlDataSource>
            </td>
        </tr>
    </table>
</asp:Content>
