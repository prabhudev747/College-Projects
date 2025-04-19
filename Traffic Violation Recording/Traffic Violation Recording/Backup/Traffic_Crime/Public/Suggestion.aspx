<%@ Page Title="" Language="C#" MasterPageFile="~/Public/Public.Master" AutoEventWireup="true" CodeBehind="Suggestion.aspx.cs" Inherits="Traffic_Crime.Public.Suggestion" %>
<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
    <style type="text/css">
       
        .style4
        {
            color: #CC0000;
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
            margin-left: 209px;
        }
       
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <table class="style6" frame="box" style="border: 2px solid #0066FF">
        <tr>
            <td class="style4" colspan="2">
                Suggestions</td>
        </tr>
        <tr>
            <td class="style5">
                Name</td>
            <td>
                <asp:TextBox ID="txtName" runat="server" Height="22px" Width="178px"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td class="style5">
                Mobile No.</td>
            <td>
                <asp:TextBox ID="txtContactNo" runat="server" Height="22px" Width="140px"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td class="style5">
                Email</td>
            <td>
                <asp:TextBox ID="txtEmail" runat="server" Height="22px" Width="173px"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td class="style5">
                Suggestion Type</td>
            <td>
                <asp:DropDownList ID="ddlSuggestionType" runat="server">
                    <asp:ListItem>Traffice Rules</asp:ListItem>
                    <asp:ListItem>Traffic Fines</asp:ListItem>
                </asp:DropDownList>
            </td>
        </tr>
        <tr>
            <td class="style5">
                Suggestion Description</td>
            <td>
                <asp:TextBox ID="txtDescription" runat="server" Height="102px" TextMode="MultiLine" 
                    Width="309px"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td class="style3">
                &nbsp;</td>
            <td>
                <asp:ImageButton ID="ImgbtnSubmit" runat="server" Height="44px" 
                    ImageUrl="~/images/SubmitButton.png" Width="104px" 
                    onclick="ImgbtnSubmit_Click" />
            </td>
        </tr>
    </table>
</asp:Content>
