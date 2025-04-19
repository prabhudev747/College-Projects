<%@ Page Title="" Language="C#" MasterPageFile="~/Public/Public.Master" AutoEventWireup="true" CodeBehind="Payment.aspx.cs" Inherits="Traffic_Crime.Public.Payment" %>
<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
    <style type="text/css">
        
        .style4
        {
            color: #FFFFFF;
            font-size: 16pt;
            background-color: #0066FF;
        }
        .style5
        {
            text-align: left;
            font-weight: normal;
        }
        .style6
        {
            text-align: left;
            color: #FF3300;
        }
        .style7
        {
            font-weight: bold;
            width: 808px;
            margin-left: 68px;
        }
        
    .auto-style10 {
        text-align: left;
        font-weight: normal;
        height: 41px;
    }
    .auto-style11 {
        height: 41px;
    }
    .auto-style12 {
        text-align: left;
        font-weight: normal;
        height: 81px;
    }
    .auto-style13 {
        height: 81px;
    }
        
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <table class="style7" frame="box" style="border: 3px solid #3366FF">
        <tr>
            <td class="style4" colspan="2">
                TRAFFIC VIOLATION FINE PAYMENT</td>
        </tr>
        <tr>
            <td class="style5">
                Notice No.</td>
            <td>
                <asp:TextBox ID="txtNotice" runat="server" Height="16px" Width="201px" 
                    AutoPostBack="True" ontextchanged="txtNotice_TextChanged"></asp:TextBox>
            &nbsp;<asp:RequiredFieldValidator ID="RequiredFieldValidator10" runat="server" ControlToValidate="txtNotice" ErrorMessage="Enter notice no." ForeColor="Red"></asp:RequiredFieldValidator>
            </td>
        </tr>
        <tr>
            <td class="style5">
                Vehicle
                Reg.No.</td>
            <td>
                <asp:TextBox ID="txtVRegNo" runat="server" Height="16px" Width="140px"></asp:TextBox>
                (eg.KA09MF4125)
                <asp:RequiredFieldValidator ID="RequiredFieldValidator11" runat="server" ControlToValidate="txtVRegNo" ErrorMessage="Enter reg.no." ForeColor="Red"></asp:RequiredFieldValidator>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="style6">
                Payee driving licence details</td>
        </tr>
        <tr>
            <td class="auto-style10">
                Name</td>
            <td class="auto-style11">
                <asp:TextBox ID="txtName" runat="server" Height="17px" Width="173px"></asp:TextBox>
                <asp:RegularExpressionValidator ID="RegularExpressionValidator5" runat="server" ControlToValidate="txtName" ErrorMessage="Enter Alphabets Only" ForeColor="Red" ValidationExpression="[a-zA-Z ]*$"></asp:RegularExpressionValidator>
            </td>
        </tr>
        <tr>
            <td class="auto-style12">
                Address</td>
            <td class="auto-style13">
                <asp:TextBox ID="txtAddress" runat="server" Height="62px" TextMode="MultiLine" 
                    Width="273px"></asp:TextBox>
                <asp:RequiredFieldValidator ID="RequiredFieldValidator9" runat="server" ControlToValidate="txtAddress" ErrorMessage="Enter address" ForeColor="Red"></asp:RequiredFieldValidator>
            </td>
        </tr>
        <tr>
            <td class="style5">
                Issuing RTO</td>
            <td>
                <asp:TextBox ID="txtIssuingRTO" runat="server" Height="17px" Width="173px"></asp:TextBox>
                <asp:RequiredFieldValidator ID="RequiredFieldValidator12" runat="server" ControlToValidate="txtIssuingRTO" ErrorMessage="Enter rto details" ForeColor="Red"></asp:RequiredFieldValidator>
            </td>
        </tr>
        <tr>
            <td class="style6">
                Billing details</td>
            <td>
                &nbsp;</td>
        </tr>
        <tr>
            <td class="style5">
                Amount</td>
            <td>
                <asp:TextBox ID="txtAmount" runat="server" Height="16px" Width="173px" EnableTheming="False"></asp:TextBox>
                <asp:RequiredFieldValidator ID="RequiredFieldValidator13" runat="server" ControlToValidate="txtAmount" ErrorMessage="Enter amount" ForeColor="Red"></asp:RequiredFieldValidator>
            </td>
        </tr>
        <tr>
            <td class="style5">
                Pay Mode</td>
            <td>
                <asp:DropDownList ID="ddlPayMode" runat="server">
                    <asp:ListItem>Debit Card</asp:ListItem>
                    <asp:ListItem>Credit Card</asp:ListItem>
                </asp:DropDownList>
            </td>
        </tr>
        <tr>
            <td class="style3">
                &nbsp;</td>
            <td>
                <asp:ImageButton ID="ImgbtnSubmit" runat="server" Height="44px" 
                    ImageUrl="~/images/SubmitButton.png" Width="127px" 
                    onclick="ImgbtnSubmit_Click" />
            </td>
        </tr>
    </table>
</asp:Content>
