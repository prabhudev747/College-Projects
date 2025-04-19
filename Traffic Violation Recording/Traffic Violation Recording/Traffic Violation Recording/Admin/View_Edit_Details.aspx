<%@ Page Title="" Language="C#" MasterPageFile="~/Admin/Admin.Master" AutoEventWireup="true" CodeBehind="View_Edit_Details.aspx.cs" Inherits="Traffic_Crime.Admin.View_Edit_Details" %>
<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
    <style type="text/css">
        .style4
        {
            width: 100%;
            background-color: #FFFFFF;
        }
        .style5
        {
            font-size: 16pt;
            font-weight: bold;
            color: #990000;
        }
    .auto-style10 {
        font-size: 16pt;
        font-weight: bold;
        color: #FF0000;
    }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <table class="style4">
        <tr>
            <td class="auto-style10">
                View / Edit Officer Details</td>
            <td>
                &nbsp;</td>
        </tr>
        <tr>
            <td colspan="2">
                <asp:GridView ID="GridView1" runat="server" AutoGenerateColumns="False" 
                    CellPadding="10" CellSpacing="10" DataSourceID="SqlDataSource1" 
                    EmptyDataText="No Data Present" DataKeyNames="Tid" 
                    onselectedindexchanged="GridView1_SelectedIndexChanged">
                    <Columns>
                        <asp:ImageField ControlStyle-Height="100" ControlStyle-Width="100" 
                            DataImageUrlField="Photo" HeaderText="Photo">
                            <ControlStyle Height="100px" Width="100px" />
                        </asp:ImageField>
                        <asp:BoundField DataField="FullName" HeaderText="Full Name" />
                        <asp:BoundField DataField="DOB" HeaderText="Date of Birth" />
                        <asp:BoundField DataField="Gender" HeaderText="Gender" />
                        <asp:BoundField DataField="Address" HeaderText="Address" />
                        <asp:BoundField DataField="City" HeaderText="City" />
                        <asp:BoundField DataField="MobileNo" HeaderText="Mobile No." />
                        <asp:CommandField ShowDeleteButton="True" HeaderText="Delete" />
                        <asp:CommandField ShowEditButton="True" HeaderText="Alter" />
                    </Columns>
                    <HeaderStyle BackColor="#FFCC00" />
                </asp:GridView>
            </td>
        </tr>
        <tr>
            <td>
                <asp:SqlDataSource ID="SqlDataSource1" runat="server" 
                    ConnectionString="<%$Connectionstrings:DB%>" 
                    DeleteCommand="Delete from  REGISTER Where Tid=@Tid" 
                    selectcommand="SELECT * FROM  REGISTER " 
                    UpdateCommand="Update REGISTER set FullName=@FullName,Photo=@Photo,DOB=@DOB,Gender=@Gender,Address=@Address,City=@City,MobileNo=@MobileNo Where Tid = @Tid">
                </asp:SqlDataSource>
            </td>
            <td>
                &nbsp;</td>
        </tr>
    </table>
</asp:Content>
