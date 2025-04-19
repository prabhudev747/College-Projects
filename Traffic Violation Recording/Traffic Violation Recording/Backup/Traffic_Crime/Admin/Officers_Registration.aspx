<%@ Page Title="" Language="C#" MasterPageFile="~/Admin/Admin.Master" AutoEventWireup="true" CodeBehind="Officers_Registration.aspx.cs" Inherits="Traffic_Crime.Admin.Officers_Registration" %>
<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
    <style type="text/css">
        
        .style4
        {
            font-size: 15pt;
            background-color: #FFFF00;
        }
        .style5
        {
            font-weight: bold;
            width: 643px;
        }
        .style6
        {
            text-align: left;
            font-weight: normal;
        }
        .style7
        {
            font-weight: bold;
            width: 643px;
            height: 386px;
            margin-left: 174px;
        }
        .style8
        {
            font-weight: bold;
            width: 643px;
            height: 44px;
            margin-left: 174px;
        }
        .style9
        {
            color: #000000;
        }
        
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <table class="style8" frame="box" style="border: 2px solid #3366FF">
        <tr>
            <td class="style4">
                Traffic Police Registration Details</td>
            <td class="style4">
                <asp:HyperLink ID="HyperLink1" runat="server" CssClass="style9" 
                    NavigateUrl="~/Admin/View_Edit_Details.aspx">View / Edit</asp:HyperLink>
            </td>
        </tr>
        </table>
    <table class="style7" frame="box" style="border: 2px solid #3366FF">
        <tr>
            <td class="style6">
                Full Name</td>
            <td>
                <asp:TextBox ID="txtFullName" runat="server" Height="22px" Width="260px"></asp:TextBox>
            </td>
            <td>
                &nbsp;</td>
        </tr>
        <tr>
            <td class="style6">
                Photo</td>
            <td>
                <asp:FileUpload ID="FileUpload_Photo" runat="server" />
            </td>
            <td>
                &nbsp;</td>
        </tr>
        <tr>
            <td class="style6">
                Date of Birth</td>
            <td>
                <asp:TextBox ID="txtDate" runat="server" Height="22px" Width="112px"></asp:TextBox>
            </td>
            <td>
                &nbsp;</td>
        </tr>
        <tr>
            <td class="style6">
                Gender</td>
            <td>
                <asp:RadioButtonList ID="rblGender" runat="server" 
                    RepeatDirection="Horizontal">
                    <asp:ListItem Selected="True">Male</asp:ListItem>
                    <asp:ListItem>Female</asp:ListItem>
                </asp:RadioButtonList>
            </td>
            <td>
                &nbsp;</td>
        </tr>
        <tr>
            <td class="style6">
                Address</td>
            <td>
                <asp:TextBox ID="txtAddress" runat="server" Height="58px" Width="276px" 
                    TextMode="MultiLine"></asp:TextBox>
            </td>
            <td>
                &nbsp;</td>
        </tr>
        <tr>
            <td class="style6">
                City / Town</td>
            <td>
                <asp:TextBox ID="txtCity" runat="server" Height="22px" Width="112px"></asp:TextBox>
            </td>
            <td>
                &nbsp;</td>
        </tr>
        <tr>
            <td class="style6">
                State</td>
            <td>
                <asp:TextBox ID="txtState" runat="server" Height="22px" Width="112px"></asp:TextBox>
            </td>
            <td>
                &nbsp;</td>
        </tr>
        <tr>
            <td class="style6">
                Mobile No.</td>
            <td>
                <asp:TextBox ID="txtMobileNo" runat="server" Height="21px" Width="175px"></asp:TextBox>
            </td>
            <td>
                &nbsp;</td>
        </tr>
        <tr>
            <td class="style6">
                UserId</td>
            <td>
                <asp:TextBox ID="txtUsername" runat="server" Height="22px" Width="112px"></asp:TextBox>
            </td>
            <td>
                &nbsp;</td>
        </tr>
        <tr>
            <td class="style6">
                Password</td>
            <td>
                <asp:TextBox ID="txtPassword" runat="server" Height="22px" Width="112px" 
                    TextMode="Password"></asp:TextBox>
            </td>
            <td>
                &nbsp;</td>
        </tr>
        <tr>
            <td class="style3">
                &nbsp;</td>
            <td>
                <asp:Button ID="btnAdd" runat="server" CssClass="style5" Height="27px" 
                    Text="Add" Width="119px" onclick="btnAdd_Click" />
            </td>
            <td>
                &nbsp;</td>
        </tr>
    </table>
</asp:Content>
