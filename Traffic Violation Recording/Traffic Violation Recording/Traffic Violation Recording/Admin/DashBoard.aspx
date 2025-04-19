<%@ Page Title="" Language="C#" MasterPageFile="~/Admin/admin.Master" AutoEventWireup="true" CodeBehind="DashBoard.aspx.cs" Inherits="Traffic_Crime.Admin.DashBoard" %>


<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
    <style type="text/css">

        .auto-style18 {
            font-size: 20pt;
            color: #FF0000;
            text-align: center;
        }
    .auto-style10 {
            width: 142px;
        }
        .auto-style17 {
            color: #FF0000;
            font-size: 15pt;
        }
        .auto-style16 {
            color: #990000;
            font-size: 15pt;
        }
        .auto-style11 {
        width: 75px;
    }
    .auto-style12 {
            width: 98px;
        }
        .auto-style19 {
            width: 142px;
            height: 199px;
        }
        .auto-style20 {
            color: #0099FF;
            height: 199px;
        }
        .auto-style21 {
            width: 75px;
            height: 199px;
        }
        .auto-style22 {
            height: 199px;
        }
        .auto-style23 {
            width: 98px;
            height: 199px;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <table style="width: 100%; height: 272px;">
        <tr>
            <td class="auto-style18" colspan="6"><strong style="text-align: center">Dash Board</strong></td>
        </tr>
        <tr>
            <td class="auto-style19"><strong>Registered Public</strong></td>
            <td class="auto-style20">
                <asp:Image ID="Image3" runat="server" Height="125px" ImageUrl="~/images/user2.png" Width="147px" />
                <strong><span class="auto-style8">
                <br />
                </span><span class="auto-style17">Total</span><span class="auto-style16">:&nbsp;&nbsp; </span>
                <asp:Label ID="lblPublic" runat="server" style="color: #0000FF; font-size: 15pt"></asp:Label>
                </strong></td>
            <td class="auto-style21"><strong>Complaints</strong></td>
            <td class="auto-style22">
                <asp:Image ID="Image4" runat="server" Height="125px" ImageUrl="~/images/vehicle-complaints.jpg" Width="145px" />
                <br />
                <strong><span class="auto-style17">Total</span><span class="auto-style16">:&nbsp;&nbsp;
                <asp:Label ID="lblComplaints" runat="server" style="color: #0000FF; font-size: 15pt"></asp:Label>
                </span></strong></td>
            <td class="auto-style23"><strong>Fine Payments</strong></td>
            <td class="auto-style22">
                <asp:Image ID="Image5" runat="server" Height="123px" ImageUrl="~/images/payment.png" Width="142px" />
                <br />
                <strong><span class="auto-style17">Total</span><span class="auto-style16">:&nbsp;&nbsp;
                <asp:Label ID="lblPayments" runat="server" style="color: #0000FF; font-size: 15pt"></asp:Label>
                </span></strong></td>
        </tr>
        <tr>
            <td class="auto-style10"><strong>Suggestions</strong></td>
            <td class="auto-style9">
                <asp:Image ID="Image6" runat="server" Height="132px" ImageUrl="~/images/suggestion.png" Width="157px" />
            </td>
            <td class="auto-style11"><strong>Officers</strong></td>
            <td>
                <asp:Image ID="Image7" runat="server" Height="119px" ImageUrl="~/images/traffice.jpg" Width="146px" />
            </td>
            <td class="auto-style12">&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td class="auto-style10">&nbsp;</td>
            <td class="auto-style9"><strong><span class="auto-style17">Total</span><span class="auto-style16">:&nbsp;&nbsp; </span>
                <asp:Label ID="lblSuggestions" runat="server" style="color: #0000FF; font-size: 15pt"></asp:Label>
                </strong></td>
            <td class="auto-style11">&nbsp;</td>
            <td><strong><span class="auto-style17">Total</span><span class="auto-style16">:&nbsp;&nbsp; </span>
                <asp:Label ID="lblOfficers" runat="server" style="color: #0000FF; font-size: 15pt"></asp:Label>
                </strong></td>
            <td class="auto-style12">&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>
</asp:Content>
