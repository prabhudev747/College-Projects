<%@ Page Title="" Language="C#" MasterPageFile="~/Public/Public.Master" AutoEventWireup="true" CodeBehind="Complaint_Status.aspx.cs" Inherits="Traffic_Crime.Public.Complaint_Status" %>
<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
    <style type="text/css">
        .style2
        {
            width: 100%;
        }
        .style3
        {
            width: 253px;
        }
        .style4
        {
            width: 169px;
        }
        .style5
        {
            width: 169px;
            color: #0066FF;
            font-weight: bold;
            font-size: 15pt;
        }
        .style6
        {
            color: #FF3300;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <table class="style2">
        <tr>
            <td class="style3">
                &nbsp;</td>
            <td class="style5">
                Complaint Status</td>
            <td>
                &nbsp;</td>
        </tr>
        <tr>
            <td class="style3">
                &nbsp;</td>
            <td class="style4">
                Serch by Complaint No.:</td>
            <td>
                <asp:TextBox ID="txtComplaintNo" runat="server"></asp:TextBox>
&nbsp;&nbsp;&nbsp;&nbsp;
                <asp:ImageButton ID="ImgbtnSearch" runat="server" Height="32px" 
                    ImageUrl="~/images/SearchButton.png" Width="112px" 
                    onclick="ImgbtnSearch_Click" />
            </td>
        </tr>
        <tr>
            <td class="style3">
                &nbsp;</td>
            <td class="style4">
                &nbsp;</td>
            <td>
                &nbsp;</td>
        </tr>
        <tr>
            <td class="style3">
                &nbsp;</td>
            <td colspan="2">
                <asp:Label ID="lblStatus" runat="server" CssClass="style6"></asp:Label>
            </td>
        </tr>
        <tr>
            <td class="style3">
                &nbsp;</td>
            <td colspan="2">
                <asp:Label ID="lblDetails" runat="server" CssClass="style6"></asp:Label>
            </td>
        </tr>
    </table>
</asp:Content>
