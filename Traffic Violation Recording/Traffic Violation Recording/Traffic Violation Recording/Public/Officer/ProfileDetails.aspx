<%@ Page Title="" Language="C#" MasterPageFile="~/Officer/Officer.Master" AutoEventWireup="true" CodeBehind="ProfileDetails.aspx.cs" Inherits="Traffic_Crime.Officer.ProfileDetails" %>
<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
    <style type="text/css">

        .auto-style10 {
        color: #333333;
        width: 293px;
    }
    .auto-style11 {
        color: #0000FF;
        font-size: 14pt;
    }
        .auto-style12 {
            font-size: 36pt;
            width: 101px;
        }
        .auto-style13 {
            width: 101px;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <table style="width: 100%; margin-bottom: 0px;">
        <tr>
            <td class="auto-style10">&nbsp;</td>
            <td class="auto-style8" colspan="2">
                <asp:Label ID="lblmsg" runat="server" style="font-weight: 700; color: #0000FF"></asp:Label>
            </td>
        </tr>
        <tr>
            <td class="auto-style10">&nbsp;</td>
            <td class="auto-style11" colspan="2"><strong style="font-size: 20pt">Profile Details</strong></td>
        </tr>
        <tr>
            <td class="auto-style10">&nbsp;</td>
            <td class="auto-style12">&nbsp;</td>
            <td>
                <asp:GridView ID="GridView1" runat="server" AutoGenerateColumns="False" Height="110px" Width="91px">
                    <Columns>
                        <asp:ImageField DataImageUrlField="Photo" HeaderText="Photo">
                            <ControlStyle Height="150px" Width="150px" />
                        </asp:ImageField>
                    </Columns>
                </asp:GridView>
            </td>
        </tr>
        <tr>
            <td class="auto-style10">&nbsp;</td>
            <td class="auto-style13">Full Name</td>
            <td>
                <asp:Label ID="lblName" runat="server"></asp:Label>
            </td>
        </tr>
        <tr>
            <td class="auto-style10">&nbsp;</td>
            <td class="auto-style13">Gender</td>
            <td>
                <asp:Label ID="lblGender" runat="server"></asp:Label>
            </td>
        </tr>
        <tr>
            <td class="auto-style10">&nbsp;</td>
            <td class="auto-style13">Email id</td>
            <td>
                <asp:Label ID="lblemailid" runat="server"></asp:Label>
            </td>
        </tr>
        <tr>
            <td class="auto-style10">&nbsp;</td>
            <td class="auto-style13">Mobile No.</td>
            <td>
                <asp:Label ID="lblMobileno" runat="server"></asp:Label>
            </td>
        </tr>
    </table>
</asp:Content>
