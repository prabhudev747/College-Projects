<%@ Page Title="" Language="C#" MasterPageFile="~/Login/login.Master" AutoEventWireup="true" CodeBehind="Public.aspx.cs" Inherits="Traffic_Crime.Login.Public" %>
<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
    <style type="text/css">

        .auto-style10 {
            color: #FF0000;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <table style="width: 99%; height: 285px;">
        <tr>
            <td class="auto-style8" rowspan="5">
            </td>
            <td colspan="2" style="text-align: center">
                <asp:Label ID="lblmsg" runat="server" style="color: #FF0000; font-weight: 700"></asp:Label>
            </td>
            <td style="text-align: center">&nbsp;</td>
            <td rowspan="4">&nbsp;</td>
        </tr>
        <tr>
            <td class="auto-style10"><strong>PUBLIC&nbsp; LOGIN</strong></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Username:
                <asp:TextBox ID="txtUsername" runat="server"></asp:TextBox>
            </td>
            <td>Password:<asp:TextBox ID="txtPassword" runat="server" TextMode="Password"></asp:TextBox>
            </td>
            <td>
                <asp:ImageButton ID="btnLogin" runat="server" Height="56px" ImageUrl="~/images/user_login.jpg" OnClick="btnLogin_Click1" />
            </td>
        </tr>
        <tr>
            <td class="auto-style9" colspan="2">
                <asp:HyperLink ID="HyperLink1" runat="server" NavigateUrl="~/Login/Register.aspx" style="font-weight: 700; font-size: 12pt;">New User Click Here!..........</asp:HyperLink>
            </td>
            <td class="auto-style9">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center">&nbsp;</td>
            <td style="text-align: center">&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>
</asp:Content>
