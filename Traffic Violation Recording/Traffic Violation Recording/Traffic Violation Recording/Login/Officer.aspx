<%@ Page Title="" Language="C#" MasterPageFile="~/Login/login.Master" AutoEventWireup="true" CodeBehind="Officer.aspx.cs" Inherits="Traffic_Crime.Login.Officer" %>
<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
    <style type="text/css">

        .auto-style14 {
            height: 42px;
            color: #FF0000;
        }
    
    .auto-style13 {
        height: 42px;
    }
        .auto-style12 {
        height: 57px;
    }
        </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <table style="border: 2px Solid #007ACC; width: 51%; height: 156px; margin-left: 309px; background-color: #EEEEEE; margin-top: 30px;">
        <tr>
            <td class="auto-style14"><strong>OFFICER</strong></td>
            <td class="auto-style13"><strong>
                <asp:Label ID="lblmsg" runat="server" CssClass="auto-style7" style="font-size: 12pt; color: #0000FF"></asp:Label>
                </strong></td>
            <td rowspan="3">
                <asp:Image ID="Image3" runat="server" Height="96px" ImageUrl="~/images/police-policeman.png" Width="139px" />
            </td>
        </tr>
        <tr>
            <td class="auto-style13">Username</td>
            <td class="auto-style13">
                <asp:TextBox ID="txtUsername" runat="server" Width="150px"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td class="auto-style9">
                <asp:TextBox ID="txtPassword" runat="server" TextMode="Password" Width="149px"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td class="auto-style12"></td>
            <td class="auto-style12">
                <asp:ImageButton ID="btnLogin" runat="server" Height="37px" ImageUrl="~/images/login.jpg" OnClick="btnLogin_Click" Width="117px" />
            </td>
            <td class="auto-style12"></td>
        </tr>
    </table>
</asp:Content>
