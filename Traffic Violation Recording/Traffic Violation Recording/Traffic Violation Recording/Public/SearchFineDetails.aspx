<%@ Page Title="" Language="C#" MasterPageFile="~/Public/Public.Master" AutoEventWireup="true" CodeBehind="SearchFineDetails.aspx.cs" Inherits="Traffic_Crime.Public.FineDetails" %>
<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
    <style type="text/css">
        .style2
        {
            width: 100%;
        }
        .style3
        {
            height: 33px;
        }
        .style4
        {
            width: 262px;
        }
        .style5
        {
            height: 33px;
            width: 262px;
        }
        .style6
        {
            width: 485px;
        }
        .style7
        {
            height: 33px;
            width: 485px;
        }
        .style9
        {
            width: 485px;
            font-weight: bold;
            color: #0066FF;
            font-size: 13pt;
        }
        .style10
        {
            font-weight: bold;
            color: #FF0000;
            font-size: 14pt;
        }
        .auto-style10 {
            color: #FF0000;
        }
        .auto-style11 {
            font-weight: bold;
            color: #0000FF;
            font-size: 16pt;
        }
        .auto-style12 {
            font-size: 16pt;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <table class="style2">
        <tr>
            <td class="style4">
                &nbsp;</td>
            <td class="auto-style11" colspan="2">
                <asp:Label ID="lblWarning" runat="server" CssClass="auto-style12" style="color: #FF0000; font-weight: 700"></asp:Label>
            </td>
        </tr>
        <tr>
            <td class="style4">
                &nbsp;</td>
            <td class="auto-style11" colspan="2">
                Find traffic and parking fines for your vehicle license plate.</td>
        </tr>
        <tr>
            <td class="style5">
            </td>
            <td class="style7">
                <asp:TextBox ID="txtSearch" runat="server" Height="16px" Width="189px" 
                    palceholder="Vehicle registration no."></asp:TextBox>
                (<span class="auto-style10">eg.&nbsp; KA09MF4252</span>)</td>
            <td class="style3">
            </td>
        </tr>
        <tr>
            <td class="style4">
                &nbsp;</td>
            <td class="style6">
                <asp:ImageButton ID="ImgbtnSearch" runat="server" Height="30px" 
                    ImageUrl="~/images/Go-Now-Button.png" Width="119px" 
                    onclick="ImgbtnSearch_Click" />
            &nbsp;</td>
            <td>
                &nbsp;</td>
        </tr>
        <tr>
            <td class="style4">
                &nbsp;</td>
            <td class="style6">
                &nbsp;</td>
            <td>
                &nbsp;</td>
        </tr>
        <tr>
            <td class="style4">
                &nbsp;</td>
            <td class="style6">
                <asp:GridView ID="GridView1" runat="server" AutoGenerateColumns="False" 
                    CellPadding="3" CellSpacing="5" Width="421px">
                    <Columns>
                        <asp:BoundField HeaderText="VEHICLE" DataField="VRegNo" />
                        <asp:BoundField HeaderText="NOTICE NUMBER" DataField="NoticeNo" />
                        <asp:BoundField HeaderText="DATE" DataField="Date" />
                        <asp:BoundField HeaderText="TIME" DataField="Time" />
                        <asp:BoundField HeaderText="OFFENCE" DataField="Offence" />
                        <asp:BoundField HeaderText="AMOUNT" DataField="Amount" />
                    </Columns>
                    <HeaderStyle BackColor="#FF9933" />
                    <RowStyle Wrap="False" />
                </asp:GridView>
            </td>
            <td>
                &nbsp;</td>
        </tr>
        <tr>
            <td class="style4">
                &nbsp;</td>
            <td class="style6">
                &nbsp;</td>
            <td>
                &nbsp;</td>
        </tr>
        <tr>
            <td class="style4">
                &nbsp;</td>
            <td class="style6">
                <asp:HyperLink ID="HyperLink1" runat="server" 
                    NavigateUrl="~/Public/Payment.aspx" CssClass="style10">To Pay Traffic fines online..(Click here)</asp:HyperLink>
            </td>
            <td>
                &nbsp;</td>
        </tr>
    </table>
</asp:Content>
