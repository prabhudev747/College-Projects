<%@ Page Title="" Language="C#" MasterPageFile="~/Admin/Admin.Master" AutoEventWireup="true" CodeBehind="ViewFineDetails.aspx.cs" Inherits="Traffic_Crime.Admin.ViewFineDetails" %>
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
            color: #990000;
        }
        .style6
        {
            color: #990000;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <table class="style4">
        <tr>
            <td class="style5">
                View Fine Details</td>
            <td class="style6">
                &nbsp;</td>
        </tr>
        <tr>
            <td colspan="2">
                <asp:GridView ID="GridView1" runat="server" AutoGenerateColumns="False" 
                    CellPadding="3" CellSpacing="3" DataSourceID="SqlDataSource1" 
                    EmptyDataText="No Data Present" DataKeyNames="Pid">
                    <Columns>
                        <asp:BoundField DataField="NoticeNo" HeaderText="NoticeNo." />
                        <asp:BoundField DataField="RegNo" HeaderText="RegNo." />
                        <asp:BoundField DataField="Name" HeaderText="Name" />
                        <asp:BoundField DataField="Address" HeaderText="Address" />
                        <asp:BoundField DataField="IssuingRTO" HeaderText="IssuingRTO" />
                        <asp:BoundField DataField="Amount" HeaderText="Amount" />
                        <asp:BoundField DataField="PayMode" HeaderText="PayMode" />
                        <asp:CommandField ShowDeleteButton="True" />
                    </Columns>
                    <HeaderStyle BackColor="#FFCC00" />
                </asp:GridView>
            </td>
        </tr>
        <tr>
            <td>
                <asp:SqlDataSource ID="SqlDataSource1" runat="server" 
                    ConnectionString="<%$Connectionstrings:DB%>" 
                    DeleteCommand="Delete from  PAYMENT Where Pid=@Pid" 
                    selectcommand="SELECT * FROM  PAYMENT 
                    ">
                </asp:SqlDataSource>
            </td>
            <td>
                &nbsp;</td>
        </tr>
        <tr>
            <td>
                &nbsp;</td>
            <td>
                &nbsp;</td>
        </tr>
    </table>
</asp:Content>
