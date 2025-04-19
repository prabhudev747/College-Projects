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
            }
        .style6
        {
            text-align: left;
            font-weight: normal;
        }
        .style7
        {
            font-weight: bold;
            width: 806px;
            height: 442px;
            margin-left: 86px;
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
        
    .auto-style10 {
        text-align: left;
        font-size: 16pt;
        color: #FFFFFF;
        height: 35px;
        background-color: #CC0000;
    }
    .auto-style11 {
        font-size: 16pt;
        color: #FFFFFF;
        height: 35px;
        background-color: #CC0000;
    }
        
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <table class="style7" frame="box" style="border: 2px solid #3366FF">
        <tr>
            <td class="auto-style10" colspan="4">
                Traffic Police Details</td>
        </tr>
        <tr>
            <td class="style6">
                Full Name</td>
            <td>
                <asp:TextBox ID="txtFullName" runat="server" Height="16px" Width="297px"></asp:TextBox>
            </td>
            <td>
                <asp:RegularExpressionValidator ID="RegularExpressionValidator5" runat="server" ControlToValidate="txtFullName" ErrorMessage="Enter Alphabets Only" ForeColor="Red" ValidationExpression="[a-zA-Z ]*$"></asp:RegularExpressionValidator>
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
                <asp:RequiredFieldValidator ID="RequiredFieldValidator8" runat="server" ControlToValidate="FileUpload_Photo" ErrorMessage="Add photo" ForeColor="Red"></asp:RequiredFieldValidator>
            </td>
            <td>
                &nbsp;</td>
        </tr>
        <tr>
            <td class="style6">
                Date of Birth</td>
            <td>
                <asp:TextBox ID="txtDate" runat="server" Height="16px" Width="196px" TextMode="Date"></asp:TextBox>
            </td>
            <td>
                <asp:RequiredFieldValidator ID="RequiredFieldValidator10" runat="server" ControlToValidate="txtDate" ErrorMessage="Enter dob" ForeColor="Red"></asp:RequiredFieldValidator>
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
            <td rowspan="4">
                <asp:Image ID="Image3" runat="server" Height="142px" ImageUrl="~/images/cartoon-police-officer-clipart-1.jpg" Width="164px" />
            </td>
        </tr>
        <tr>
            <td class="style6">
                Address</td>
            <td>
                <asp:TextBox ID="txtAddress" runat="server" Height="58px" Width="306px" 
                    TextMode="MultiLine"></asp:TextBox>
            </td>
            <td>
                <asp:RequiredFieldValidator ID="RequiredFieldValidator9" runat="server" ControlToValidate="txtAddress" ErrorMessage="Enter address" ForeColor="Red"></asp:RequiredFieldValidator>
            </td>
        </tr>
        <tr>
            <td class="style6">
                City / Town</td>
            <td>
                <asp:TextBox ID="txtCity" runat="server" Height="18px" Width="175px"></asp:TextBox>
            </td>
            <td>
                <asp:RequiredFieldValidator ID="RequiredFieldValidator11" runat="server" ControlToValidate="txtCity" ErrorMessage="Enter details" ForeColor="Red"></asp:RequiredFieldValidator>
            </td>
        </tr>
        <tr>
            <td class="style6">
                EmailId</td>
            <td>
                <asp:TextBox ID="txtEmailid" runat="server" Height="16px" Width="290px"></asp:TextBox>
            </td>
            <td>
                <asp:RegularExpressionValidator ID="RegularExpressionValidator1" runat="server" ControlToValidate="txtEmailid" ErrorMessage="Enter Valid Email format" ForeColor="Red" ValidationExpression="\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*"></asp:RegularExpressionValidator>
            </td>
        </tr>
        <tr>
            <td class="style6">
                Mobile No.</td>
            <td>
                <asp:TextBox ID="txtMobileNo" runat="server" Height="16px" Width="172px"></asp:TextBox>
            </td>
            <td>
                <asp:RegularExpressionValidator ID="RegularExpressionValidator2" runat="server" ControlToValidate="txtMobileNo" ErrorMessage="Should be exact 10 digit" ForeColor="Red" ValidationExpression="[0-9]{10}"></asp:RegularExpressionValidator>
            </td>
            <td>
                &nbsp;</td>
        </tr>
        <tr>
            <td class="style6">
                Username</td>
            <td>
                <asp:TextBox ID="txtUsername" runat="server" Height="16px" Width="146px"></asp:TextBox>
            </td>
            <td>
                <asp:RequiredFieldValidator ID="RequiredFieldValidator12" runat="server" ControlToValidate="txtUsername" ErrorMessage="Enter username" ForeColor="Red"></asp:RequiredFieldValidator>
            </td>
            <td>
                &nbsp;</td>
        </tr>
        <tr>
            <td class="style6">
                Password</td>
            <td>
                <asp:TextBox ID="txtPassword" runat="server" Height="16px" Width="142px" 
                    TextMode="Password"></asp:TextBox>
            </td>
            <td>
                <asp:RequiredFieldValidator ID="RequiredFieldValidator13" runat="server" ControlToValidate="txtPassword" ErrorMessage="Enter password" ForeColor="Red"></asp:RequiredFieldValidator>
            </td>
            <td>
                &nbsp;</td>
        </tr>
        <tr>
            <td class="style3">
                &nbsp;</td>
            <td>
                <asp:Button ID="btnAdd" runat="server" CssClass="style5" Height="32px" 
                    Text="Add" Width="127px" onclick="btnAdd_Click" />
            </td>
            <td>
                &nbsp;</td>
            <td>
                &nbsp;</td>
        </tr>
    </table>
</asp:Content>
