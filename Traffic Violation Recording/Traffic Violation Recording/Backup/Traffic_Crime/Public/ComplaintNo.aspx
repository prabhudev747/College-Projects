<%@ Page Title="" Language="C#" MasterPageFile="~/Public/Public.Master" AutoEventWireup="true" CodeBehind="ComplaintNo.aspx.cs" Inherits="Traffic_Crime.Public.ComplaintNo" %>
<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
    <style type="text/css">
    .style2
    {
        width: 100%;
        background-color: #FFFFFF;
    }
    .style3
    {
        color: #3333FF;
        font-weight: bold;
    }
    .style4
    {
        font-size: 16pt;
        font-weight: bold;
        color: #CC3300;
    }
</style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <table class="style2">
    <tr>
        <td class="style4">
            Complaint Number</td>
        <td>
            &nbsp;</td>
    </tr>
    <tr>
        <td>
            Thank you for Registering Complaint :&nbsp;
            <asp:Label ID="lblComplaintNo" runat="server" CssClass="style3"></asp:Label>
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
