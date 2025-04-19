<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="WebForm1.aspx.cs" Inherits="Traffic_Crime.WebForm2" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
         <asp:DropDownList ID="DropDownList1" runat="server" OnSelectedIndexChanged="DropDownList1_SelectedIndexChanged" AutoPostBack="True">
                    </asp:DropDownList>
    <div>
    
        <table style="width:100%" runat="server">
            <tr>
                <td class="auto-style1">&nbsp;</td>
                <td class="auto-style2">&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="auto-style1">&nbsp;</td>
                <td class="auto-style2">Patient Diagnosis Page !!!</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="auto-style1">&nbsp;</td>
                <td class="auto-style2">Patient Id:</td>
                <td>
                   
                            </td>
            </tr>
            <tr>
                <td class="auto-style1">&nbsp;</td>
                <td class="auto-style2">Patient Name:>
                        &nbsp;
                                               
                            &nbsp;&nbsp;</td>
                <td>
                        <asp:TextBox ID="TextBox1" runat="server"></asp:TextBox>
                       
                            </td>
            </tr>
            <tr>
                <td class="auto-style1">&nbsp;</td>
                <td class="auto-style2">Clinical Symptoms:></td>
                <td>
                        <asp:TextBox ID="cs" runat="server" TextMode="MultiLine" Rows="3" Columns="40" AutoPostBack="true" ></asp:TextBox>
                       
                            </td>
            </tr>
            <tr>
                <td class="auto-style1">&nbsp;</td>
                <td class="auto-style2">Addiction History :</td>
                <td>
                        <asp:TextBox ID="ah" runat="server" TextMode="MultiLine" Rows="3" Columns="40" AutoPostBack="true" ></asp:TextBox>
                       
                            </td>
            </tr>
            <tr>
                <td class="auto-style1">&nbsp;</td>
                <td class="auto-style2">Common Condition:</td>
                <td>
                        <asp:TextBox ID="cc" runat="server" TextMode="MultiLine" Rows="3" Columns="40" AutoPostBack="true" ></asp:TextBox>
                       
                            </td>
            </tr>
            <tr>
                <td class="auto-style1">&nbsp;</td>
                <td class="auto-style2">Diagnosis:</td>
                <td>
                        <asp:TextBox ID="diag" runat="server" TextMode="MultiLine" Rows="3" Columns="40" AutoPostBack="true" ></asp:TextBox>
                       
                            </td>
            </tr>
            <tr>
                <td class="auto-style1">&nbsp;</td>
                <td class="auto-style2">Diagnosis Symptoms:</td>
                <td>
                        <asp:TextBox ID="diags" runat="server" TextMode="MultiLine" Rows="3" Columns="40" AutoPostBack="true" ></asp:TextBox>
                       
                            </td>
            </tr>
            <tr>
                <td class="auto-style1">&nbsp;</td>
                <td class="auto-style2">&nbsp;</td>
                <td>
                       
                            <asp:Button ID="submit" runat="server" Text="Save Data !!" />
                            </td>
            </tr>
            <tr>
                <td class="auto-style1">&nbsp;</td>
                <td class="auto-style2">&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </table>
    
    </div>
    </form>
</body>
</html>
