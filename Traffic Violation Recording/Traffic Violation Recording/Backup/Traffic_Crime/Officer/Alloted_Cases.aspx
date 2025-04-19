<%@ Page Title="" Language="C#" MasterPageFile="~/Officer/Officer.Master" AutoEventWireup="true" CodeBehind="Alloted_Cases.aspx.cs" Inherits="Traffic_Crime.Admin.Alloted_Cases" %>
<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
    <style type="text/css">
        .style2
        {
            width: 60%;
            margin-left: 184px;
        }
        .style5
        {
            font-weight: bold;
            color: #FFFFFF;
            font-size: 18pt;
            background-color: #0066FF;
        }
        .style4
        {
            width: 139px;
        }
        .style6
        {
            background-color: #FFFFCC;
        }
        .style7
        {
            color: #FF3300;
            font-weight: bold;
            font-size: 15pt;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <table class="style2" frame="box" style="border: 2px solid #0066FF">
        <tr>
            <td class="style5" colspan="3">
                ALLOTTED CASE</td>
        </tr>
        <tr>
            <td class="style4">
                Case Assigned To Me</td>
            <td colspan="2">
                <asp:DropDownList ID="ddlAssignedTo" runat="server" AutoPostBack="True" 
                    DataSourceID="SqlDataSource1" DataTextField="AssignedTo" 
                    DataValueField="AssignedTo" 
                    onselectedindexchanged="ddlAssignedTo_SelectedIndexChanged">
                </asp:DropDownList>
            </td>
        </tr>
        <tr>
            <td class="style4">
                Complaint No.</td>
            <td colspan="2">
                <asp:TextBox ID="txtComplaintno" runat="server" ReadOnly="True"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td class="style4">
                Date of Allotment</td>
            <td colspan="2">
                <asp:TextBox ID="txtDate" runat="server" ReadOnly="True"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td class="style4">
                Case Status</td>
            <td colspan="2">
                <asp:RadioButtonList ID="rblCaseStatus" runat="server">
                    <asp:ListItem>Not Yet Started</asp:ListItem>
                    <asp:ListItem>Under Progress</asp:ListItem>
                    <asp:ListItem>Completed</asp:ListItem>
                </asp:RadioButtonList>
            </td>
        </tr>
        <tr>
            <td class="style4">
                Case
                Status Details</td>
            <td colspan="2">
                <asp:TextBox ID="txtStatus" runat="server" CssClass="style6" Height="107px" 
                    TextMode="MultiLine" Width="348px"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td class="style4">
                &nbsp;</td>
            <td colspan="2">
                <asp:ImageButton ID="ImgbtnSubmit" runat="server" Height="42px" 
                    ImageUrl="~/images/SubmitButton.png" onclick="ImgbtnSubmit_Click" />
            </td>
        </tr>
        <tr>
            <td class="style4">
                &nbsp;</td>
            <td class="style7" colspan="2">
                VIOLATION DETAILS</td>
        </tr>
        <tr>
            <td class="style4">
                &nbsp;</td>
            <td colspan="2">
                <asp:GridView ID="GridView1" runat="server" Width="317px" 
                    AutoGenerateColumns="False">
                    <Columns>
                        <asp:BoundField DataField="VoilationDetails" HeaderText="Voilation Details" />
                    </Columns>
                    <HeaderStyle BackColor="#3366FF" ForeColor="White" />
                </asp:GridView>
            </td>
        </tr>
        <tr>
            <td class="style4">
                &nbsp;</td>
            <td>
                <asp:SqlDataSource ID="SqlDataSource1" runat="server" 
                    ConnectionString="<%$Connectionstrings:DB%>" 
                    
                    selectcommand="SELECT distinct AssignedTo FROM  CASE_ASSIGN " 
                   >
                </asp:SqlDataSource>
            </td>
            <td>
                &nbsp;</td>
        </tr>
    </table>
</asp:Content>
