<%@ Page Title="" Language="C#" MasterPageFile="~/Officer/Officer.Master" AutoEventWireup="true" CodeBehind="Login.aspx.cs" Inherits="Traffic_Crime.Admin.Login" %>
<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
    <style type="text/css">

        
       

        
        .style2
        {
            margin-left: 461px;
        }
        .style3
        {
            font-weight: bold;
        }

        
       

        
        </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <table class="style2" frame="box" 
        style="border: 2px solid #FF00FF; background-color: #FFFFFF">
        <tr>
            <td class="style4">
                <span class="style3">Login</span>
            </td>
            <td class="style6">
                <asp:Label ID="lblmsg" runat="server" CssClass="style9" style="color: #FF0000"></asp:Label>
            </td>
            <td rowspan="4">
                <img alt="" class="style3" src="../images/Police_department.png" /></td>
        </tr>
        <tr>
            <td class="style4">
                Username</td>
            <td class="style10">
                <asp:TextBox ID="txtUsername" runat="server"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td class="style4">
                Password</td>
            <td class="style10">
                <asp:TextBox ID="txtPassword" runat="server" TextMode="Password"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td class="style4">
                &nbsp;</td>
            <td class="style10">
                <asp:ImageButton ID="Imgbtn_Login" runat="server" Height="46px" 
                    ImageUrl="~/images/user_login.jpg" onclick="Imgbtn_Login_Click" 
                    Width="113px" />
            </td>
        </tr>
    </table>
</asp:Content>
