<%@ Page Title="" Language="C#" MasterPageFile="~/Admin/Admin.Master" AutoEventWireup="true" CodeBehind="View_Suggestions.aspx.cs" Inherits="Traffic_Crime.Admin.View_Suggestions" %>
<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
    <style type="text/css">

        .style4
        {
            width: 100%;
            background-color: #FFFFFF;
        }
        .style5
        {
            font-size: 16pt;
            font-weight: bold;
            color: #3333FF;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <table class="style4">
        <tr>
            <td class="style5">
                View Suggestion Details</td>
            <td>
                &nbsp;</td>
        </tr>
        <tr>
            <td colspan="2">
                <asp:GridView ID="GridView1" runat="server" AutoGenerateColumns="False" 
                    CellPadding="5" CellSpacing="5" DataSourceID="SqlDataSource1" 
                    EmptyDataText="No Data Present" DataKeyNames="Sid">
                    <Columns>
                        <asp:BoundField DataField="Name" HeaderText="Name" />
                        <asp:BoundField DataField="MobileNo" HeaderText="Mobile No." />
                        <asp:BoundField DataField="Email" HeaderText="Email" />
                        <asp:BoundField DataField="SType" HeaderText="Suggestion Type" />
                        <asp:BoundField DataField="SDescription" HeaderText="Description" />
                        <asp:CommandField ShowDeleteButton="True" />
                    </Columns>
                    <HeaderStyle ForeColor="#CC0000" />
                </asp:GridView>
            </td>
        </tr>
        <tr>
            <td>
                <asp:SqlDataSource ID="SqlDataSource1" runat="server" 
                    ConnectionString="<%$Connectionstrings:DB%>" 
                    DeleteCommand="Delete from  SUGGESTION Where Sid=@Sid" 
                    selectcommand="SELECT * FROM  SUGGESTION " 
                  >
                </asp:SqlDataSource>
            </td>
            <td>
                &nbsp;</td>
        </tr>
    </table>
</asp:Content>
