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
        .auto-style10 {
            font-size: 16pt;
            font-weight: bold;
            color: #FF3300;
        }
        .auto-style11 {
            color: #3333FF;
            font-weight: bold;
            font-size: 16pt;
        }
        .auto-style12 {
            font-size: 16pt;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <table class="style2">
    <tr>
        <td class="auto-style10">
            Complaint Number</td>
        <td>
            &nbsp;</td>
    </tr>
    <tr>
        <td>
            <span class="auto-style12">Thank you for Registering Complaint :&nbsp;
            </span>
            <asp:Label ID="lblComplaintNo" runat="server" CssClass="auto-style11"></asp:Label>
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
