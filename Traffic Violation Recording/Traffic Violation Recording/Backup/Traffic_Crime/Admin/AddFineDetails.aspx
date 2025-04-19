<%@ Page Title="" Language="C#" MasterPageFile="~/Admin/Admin.Master" AutoEventWireup="true" CodeBehind="AddFineDetails.aspx.cs" Inherits="Traffic_Crime.Admin.AddFineDetails" %>
<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
    <style type="text/css">
        .style4
        {
            width: 100%;
            background-color: #FFFFFF;
        }
        .style5
        {
            width: 130px;
        }
        .style6
        {
            font-weight: bold;
            font-size: 16pt;
            color: #FF0000;
        }
        .style7
        {
            font-weight: bold;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <table class="style4" frame="box" style="border: 2px solid #FF0000">
        <tr>
            <td class="style6" colspan="2">
                Add Fine Details</td>
        </tr>
        <tr>
            <td class="style5">
                Vehicle Reg.No.</td>
            <td>
                <asp:TextBox ID="txtVehicleRegNo" runat="server" Height="23px" Width="189px" 
                    palceholder="Vehicle registration no."></asp:TextBox>
                </td>
        </tr>
        <tr>
            <td class="style5">
                Notice No.</td>
            <td>
                <asp:TextBox ID="txtNoticeNo" runat="server" Height="23px" Width="189px" 
                    palceholder="Vehicle registration no."></asp:TextBox>
                </td>
        </tr>
        <tr>
            <td class="style5">
                Date</td>
            <td>
                <asp:TextBox ID="txtDate" runat="server" Height="23px" Width="189px" 
                    palceholder="Vehicle registration no."></asp:TextBox>
                </td>
        </tr>
        <tr>
            <td class="style5">
                Time</td>
            <td>
                <asp:DropDownList ID="ddlVHrs" runat="server">
                    <asp:ListItem>Hours</asp:ListItem>
                    <asp:ListItem>01</asp:ListItem>
                    <asp:ListItem>02</asp:ListItem>
                    <asp:ListItem>03</asp:ListItem>
                    <asp:ListItem>04</asp:ListItem>
                    <asp:ListItem>05</asp:ListItem>
                    <asp:ListItem>06</asp:ListItem>
                    <asp:ListItem>07</asp:ListItem>
                    <asp:ListItem>08</asp:ListItem>
                    <asp:ListItem>09</asp:ListItem>
                    <asp:ListItem>10</asp:ListItem>
                    <asp:ListItem>11</asp:ListItem>
                    <asp:ListItem>12</asp:ListItem>
                </asp:DropDownList>
                <asp:DropDownList ID="ddlVMinutes" runat="server">
                    <asp:ListItem>Minutes</asp:ListItem>
                    <asp:ListItem>00</asp:ListItem>
                    <asp:ListItem>01</asp:ListItem>
                    <asp:ListItem>02</asp:ListItem>
                    <asp:ListItem>03</asp:ListItem>
                    <asp:ListItem>04</asp:ListItem>
                    <asp:ListItem>05</asp:ListItem>
                    <asp:ListItem>06</asp:ListItem>
                    <asp:ListItem>07</asp:ListItem>
                    <asp:ListItem>08</asp:ListItem>
                    <asp:ListItem>09</asp:ListItem>
                    <asp:ListItem>10</asp:ListItem>
                    <asp:ListItem>11</asp:ListItem>
                    <asp:ListItem>12</asp:ListItem>
                    <asp:ListItem>13</asp:ListItem>
                    <asp:ListItem>14</asp:ListItem>
                    <asp:ListItem>15</asp:ListItem>
                    <asp:ListItem>16</asp:ListItem>
                    <asp:ListItem>17</asp:ListItem>
                    <asp:ListItem>18</asp:ListItem>
                    <asp:ListItem>19</asp:ListItem>
                    <asp:ListItem>20</asp:ListItem>
                    <asp:ListItem>21</asp:ListItem>
                    <asp:ListItem>22</asp:ListItem>
                    <asp:ListItem>23</asp:ListItem>
                    <asp:ListItem>24</asp:ListItem>
                    <asp:ListItem>25</asp:ListItem>
                    <asp:ListItem>26</asp:ListItem>
                    <asp:ListItem>27</asp:ListItem>
                    <asp:ListItem>28</asp:ListItem>
                    <asp:ListItem>29</asp:ListItem>
                    <asp:ListItem>30</asp:ListItem>
                    <asp:ListItem>31</asp:ListItem>
                    <asp:ListItem>32</asp:ListItem>
                    <asp:ListItem>33</asp:ListItem>
                    <asp:ListItem>34</asp:ListItem>
                    <asp:ListItem>35</asp:ListItem>
                    <asp:ListItem>36</asp:ListItem>
                    <asp:ListItem>37</asp:ListItem>
                    <asp:ListItem>38</asp:ListItem>
                    <asp:ListItem>39</asp:ListItem>
                    <asp:ListItem>40</asp:ListItem>
                    <asp:ListItem>41</asp:ListItem>
                    <asp:ListItem>42</asp:ListItem>
                    <asp:ListItem>43</asp:ListItem>
                    <asp:ListItem>44</asp:ListItem>
                    <asp:ListItem>45</asp:ListItem>
                    <asp:ListItem>46</asp:ListItem>
                    <asp:ListItem>47</asp:ListItem>
                    <asp:ListItem>48</asp:ListItem>
                    <asp:ListItem>49</asp:ListItem>
                    <asp:ListItem>50</asp:ListItem>
                    <asp:ListItem>51</asp:ListItem>
                    <asp:ListItem>52</asp:ListItem>
                    <asp:ListItem>53</asp:ListItem>
                    <asp:ListItem>54</asp:ListItem>
                    <asp:ListItem>55</asp:ListItem>
                    <asp:ListItem>56</asp:ListItem>
                    <asp:ListItem>57</asp:ListItem>
                    <asp:ListItem>58</asp:ListItem>
                    <asp:ListItem>59</asp:ListItem>
                </asp:DropDownList>
            </td>
        </tr>
        <tr>
            <td class="style5">
                Offence</td>
            <td>
                <asp:TextBox ID="txtOffence" runat="server" Height="23px" Width="189px" 
                    palceholder="Vehicle registration no."></asp:TextBox>
                </td>
        </tr>
        <tr>
            <td class="style5">
                Amount</td>
            <td>
                <asp:TextBox ID="txtAmount" runat="server" Height="23px" Width="189px" 
                    palceholder="Vehicle registration no."></asp:TextBox>
                </td>
        </tr>
        <tr>
            <td class="style5">
                &nbsp;</td>
            <td>
                <asp:Button ID="btnAddDetails" runat="server" CssClass="style7" 
                     Text="Add Details" Width="98px" onclick="btnAddDetails_Click" />
            </td>
        </tr>
    </table>
</asp:Content>
