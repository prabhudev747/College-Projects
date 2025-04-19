<%@ Page Title="" Language="C#" MasterPageFile="~/Public/Public.Master" AutoEventWireup="true" CodeBehind="Suggestion.aspx.cs" Inherits="Traffic_Crime.Public.Suggestion" %>
<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
    <style type="text/css">
       
        .style4
        {
            color: #FF0000;
            font-size: 16pt;
        }
        .style5
        {
            text-align: left;
            font-weight: normal;
        }
        .style6
        {
            font-weight: bold;
            margin-left: 71px;
        }
       
        .auto-style10 {
            text-align: left;
            font-weight: normal;
            width: 161px;
        }
        .auto-style11 {
            width: 161px;
        }
        .auto-style12 {
            text-align: left;
            font-weight: normal;
            width: 161px;
            height: 41px;
        }
        .auto-style13 {
            height: 41px;
        }
       
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <table class="style6" frame="box" style="border: 2px solid #0066FF; width: 824px; height: 332px;">
        <tr>
            <td class="style4" colspan="2">
                Suggestions</td>
        </tr>
        <tr>
            <td class="auto-style10">
                Name</td>
            <td>
                <asp:TextBox ID="txtName" runat="server" Height="18px" Width="279px"></asp:TextBox>
            &nbsp;<asp:RequiredFieldValidator ID="RequiredFieldValidator10" runat="server" ControlToValidate="txtName" ErrorMessage="Enter name" ForeColor="Red"></asp:RequiredFieldValidator>
            </td>
        </tr>
        <tr>
            <td class="auto-style10">
                Mobile No.</td>
            <td>
                <asp:TextBox ID="txtContactNo" runat="server" Height="17px" Width="208px"></asp:TextBox>
            &nbsp;<asp:RegularExpressionValidator ID="RegularExpressionValidator2" runat="server" ControlToValidate="txtContactNo" ErrorMessage="Should be exact 10 digit" ForeColor="Red" ValidationExpression="[0-9]{10}"></asp:RegularExpressionValidator>
            </td>
        </tr>
        <tr>
            <td class="auto-style12">
                Email</td>
            <td class="auto-style13">
                <asp:TextBox ID="txtEmail" runat="server" Height="18px" Width="278px"></asp:TextBox>
            &nbsp;<asp:RegularExpressionValidator ID="RegularExpressionValidator1" runat="server" ControlToValidate="txtEmail" ErrorMessage="Enter Valid Email format" ForeColor="Red" ValidationExpression="\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*"></asp:RegularExpressionValidator>
            </td>
        </tr>
        <tr>
            <td class="auto-style10">
                Suggestion Type</td>
            <td>
                <asp:DropDownList ID="ddlSuggestionType" runat="server">
                    <asp:ListItem>Traffic Rules</asp:ListItem>
                    <asp:ListItem>Traffic Fines</asp:ListItem>
                </asp:DropDownList>
            </td>
        </tr>
        <tr>
            <td class="auto-style10">
                Suggestion Description</td>
            <td>
                <asp:TextBox ID="txtDescription" runat="server" Height="71px" TextMode="MultiLine" 
                    Width="293px"></asp:TextBox>
            &nbsp;<asp:RequiredFieldValidator ID="RequiredFieldValidator11" runat="server" ControlToValidate="txtDescription" ErrorMessage="Enter description" ForeColor="Red"></asp:RequiredFieldValidator>
            </td>
        </tr>
        <tr>
            <td class="auto-style11">
                &nbsp;</td>
            <td>
                <asp:ImageButton ID="ImgbtnSubmit" runat="server" Height="44px" 
                    ImageUrl="~/images/SubmitButton.png" Width="135px" 
                    onclick="ImgbtnSubmit_Click" />
            </td>
        </tr>
    </table>
</asp:Content>
