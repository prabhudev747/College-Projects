<%@ Page Title="" Language="C#" MasterPageFile="~/Admin/Admin.Master" AutoEventWireup="true" CodeBehind="Vehicle_Population.aspx.cs" Inherits="Traffic_Crime.Admin.Vehicle_Population" %>
<%@ Register assembly="System.Web.DataVisualization, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35" namespace="System.Web.UI.DataVisualization.Charting" tagprefix="asp" %>
<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
    <style type="text/css">
        .style4
        {
            width: 43%;
            margin-left: 249px;
            background-color: #FFFFFF;
        }
        .style5
        {
            width: 176px;
        }
        .style6
        {
            font-weight: bold;
            font-size: 16pt;
            background-color: #FFFF00;
        }
        .style7
        {
            color: #FFFFFF;
            font-weight: bold;
            background-color: #333333;
        }
        .style8
        {
            font-size: 16pt;
            color: #FF0000;
            font-weight: bold;
        }
        .style9
        {
            width: 52%;
            margin-left: 180px;
            background-color: #FFFFFF;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <table class="style4" frame="box" style="border: 2px solid #FFFF00; height: 188px;">
        <tr>
            <td class="style6" colspan="2">
                VEHICLE POPULATION</td>
        </tr>
        <tr>
            <td class="style5">
                Category</td>
            <td>
                <asp:DropDownList ID="ddlCategory" runat="server" AutoPostBack="True">
                    <asp:ListItem>2 WHEELER</asp:ListItem>
                    <asp:ListItem>4 WHEELER</asp:ListItem>
                </asp:DropDownList>
            </td>
        </tr>
        <tr>
            <td class="style5">
                No. of Vehciles</td>
            <td>
                <asp:TextBox ID="txtVehicleNo" runat="server"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td class="style5">
                Year</td>
            <td>
                <asp:DropDownList ID="ddlYear" runat="server" AutoPostBack="True" 
                    onselectedindexchanged="ddlYear_SelectedIndexChanged">
                    <asp:ListItem>2016</asp:ListItem>
                    <asp:ListItem>2017</asp:ListItem>
                    <asp:ListItem>2018</asp:ListItem>
                    <asp:ListItem>2019</asp:ListItem>
                    <asp:ListItem>2020</asp:ListItem>
                    <asp:ListItem>2021</asp:ListItem>
                </asp:DropDownList>
            </td>
        </tr>
        <tr>
            <td class="style5">
                &nbsp;</td>
            <td>
                <asp:Button ID="btnSubmit" runat="server" CssClass="style7" Height="30px" 
                    onclick="btnSubmit_Click" Text="Add" Width="95px" />
            </td>
        </tr>
        <tr>
            <td class="style5">
                &nbsp;</td>
            <td>
                &nbsp;</td>
        </tr>
    </table>
    <p>
    </p>
    <table class="style9" frame="box" style="border: 2px solid #FFFF00">
        <tr>
            <td class="style8" colspan="2">
                Graph</td>
        </tr>
        <tr>
            <td>
                <asp:Chart ID="Chart1" runat="server" Width="427px">
                    <series>
                        <asp:Series ChartArea="ChartArea1" Legend="Legend1" Name="VehicleNo">
                        </asp:Series>
                    </series>
                    <chartareas>
                        <asp:ChartArea Name="ChartArea1">
                        </asp:ChartArea>
                    </chartareas>
                    <Legends>
                        <asp:Legend Name="Legend1">
                        </asp:Legend>
                    </Legends>
                </asp:Chart>
            </td>
            <td>
                <asp:Chart ID="Chart2" runat="server" Height="321px" Width="297px">
                    <series>
                        <asp:Series ChartType="Pie" Legend="Legend1" Name="Category">
                        </asp:Series>
                    </series>
                    <chartareas>
                        <asp:ChartArea Name="ChartArea1">
                        </asp:ChartArea>
                    </chartareas>
                    <Legends>
                        <asp:Legend Name="Legend1">
                        </asp:Legend>
                    </Legends>
                </asp:Chart>
            </td>
        </tr>
    </table>
</asp:Content>
