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
    .auto-style10 {
        font-size: 16pt;
        font-weight: bold;
        color: #FF0000;
    }
        .auto-style11 {
            height: 23px;
        }
        .auto-style12 {
            font-size: 16pt;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <table class="style4">
        <tr>
            <td class="auto-style10">
                View Fine Payment Details</td>
            <td class="style6">
                &nbsp;</td>
        </tr>
        <tr>
            <td colspan="2">
                <asp:GridView ID="GridView1" runat="server" AutoGenerateColumns="False" 
                    CellPadding="10" CellSpacing="10" 
                    EmptyDataText="No Data Present" OnSelectedIndexChanged="GridView1_SelectedIndexChanged" Width="932px">
                    <Columns>
                        <asp:BoundField DataField="NoticeNo" HeaderText="NoticeNo." />
                        <asp:BoundField DataField="RegNo" HeaderText="RegNo." />
                        <asp:BoundField DataField="Name" HeaderText="Name" />
                        <asp:BoundField DataField="Address" HeaderText="Address" />
                        <asp:BoundField DataField="IssuingRTO" HeaderText="IssuingRTO" />
                        <asp:BoundField DataField="Amount" HeaderText="Amount" />
                        <asp:BoundField DataField="PayMode" HeaderText="PayMode" />
                        <asp:CommandField HeaderText="Check " SelectText="Check for Repeats" ShowSelectButton="True" />
                    </Columns>
                    <HeaderStyle BackColor="#FFCC00" />
                </asp:GridView>
            </td>
        </tr>
        <tr>
            <td>
                &nbsp;</td>
            <td>
                &nbsp;</td>
        </tr>
        <tr>
            <td>
                <span class="auto-style12">Shows Repeated Fine:&nbsp; </span>
                <asp:Label ID="lblfine" runat="server" CssClass="auto-style12" style="color: #FF0000; font-weight: 700"></asp:Label>
            </td>
            <td class="auto-style12">
                &nbsp;</td>
        </tr>
        <tr>
            <td class="auto-style11">
                </td>
            <td class="auto-style11">
                </td>
        </tr>
    </table>
</asp:Content>
