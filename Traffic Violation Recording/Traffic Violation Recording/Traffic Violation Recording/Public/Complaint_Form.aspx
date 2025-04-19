<%@ Page Title="" Language="C#" MasterPageFile="~/Public/Public.Master" AutoEventWireup="true" CodeBehind="Complaint_Form.aspx.cs" Inherits="Traffic_Crime.Public.Complaint_Form" %>
<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
    <style type="text/css">
        .style2
        {
            width: 99%;
            margin-left: 0px;
        }
        .style3
        {
            color: #FF9900;
            font-weight: bold;
            font-size: 15pt;
        }
        .style4
        {
            width: 870px;
            margin-left: 46px;
        }
    .style5
    {
        text-align: center;
    }
    .style6
    {
            width: 204px;
        }
        .style7
        {
            width: 204px;
            height: 38px;
        }
        .style8
        {
            height: 38px;
        }
        .style9
        {
            width: 204px;
            height: 54px;
        }
        .style10
        {
            height: 54px;
        }
        .style11
        {
            color: #FF9900;
        }
        .style12
        {
            width: 204px;
            color: #3366FF;
            font-weight: bold;
        }
        .style13
        {
            text-align: center;
            color: #FF0000;
            font-size: 14pt;
        height: 25px;
    }
    .style14
    {
        color: #3333FF;
        font-weight: bold;
    }
    .style15
    {
        font-size: 14pt;
    }
    .style16
    {
        height: 25px;
    }
    .style17
    {
        width: 100%;
    }
        .auto-style10 {
            text-align: center;
            color: #0000FF;
            font-size: 16pt;
            height: 25px;
            width: 863px;
        }
        .auto-style11 {
            font-weight: bold;
            font-size: 15pt;
        }
        .auto-style12 {
            width: 204px;
            height: 40px;
        }
        .auto-style13 {
            height: 40px;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <table class="style17">
        <tr>
            <td class="style16">
                </td>
            <td class="auto-style10">
                <strong>Getting Touch with your traffic police station is much easier now !</strong></td>
            <td class="style16">
                </td>
        </tr>
        </table>
 <fieldset style="border: 2px solid #0066FF" class="style4">
    <legend style="border-style: none; color:red"><span class="auto-style11">Post Your 
        Complaint</span>:</legend>
    <table class="style2">
        <tr>
            <td class="style7">
                Vehicle Registration No.</td>
            <td class="style8">
                <asp:TextBox ID="txtRegNo" runat="server" Width="167px"></asp:TextBox>
            </td>
            <td class="style8">
                <asp:RequiredFieldValidator ID="RequiredFieldValidator10" runat="server" ControlToValidate="txtRegNo" ErrorMessage="Enter reg.No." ForeColor="Red"></asp:RequiredFieldValidator>
            </td>
            <td class="style8">
                Violation Type</td>
            <td class="style8">
                <asp:DropDownList ID="ddlVType" runat="server" AutoPostBack="True">
                    <asp:ListItem>Select Type</asp:ListItem>
                    <asp:ListItem>NO PARKING</asp:ListItem>
                    <asp:ListItem>NOT WEARING SEAT BELT</asp:ListItem>
                    <asp:ListItem>PARKING ON FOOTPATH</asp:ListItem>
                    <asp:ListItem>RIDDING WITHOUT HELMET</asp:ListItem>
                    <asp:ListItem>NO NUMBER PLATES</asp:ListItem>
                    <asp:ListItem>SIGNAL JUMP</asp:ListItem>
                    <asp:ListItem>DRINK AND DRIVE</asp:ListItem>
                    <asp:ListItem>RASH DRIVING</asp:ListItem>
                    <asp:ListItem>UNDER AGE DRIVERS </asp:ListItem>
                    <asp:ListItem></asp:ListItem>
                </asp:DropDownList>
            </td>
        </tr>
        <tr>
            <td class="style6">
                Violation Date</td>
            <td>
                <asp:TextBox ID="txtVDate" runat="server" TextMode="Date" Width="167px"></asp:TextBox>
            </td>
            <td>
                <asp:RequiredFieldValidator ID="RequiredFieldValidator9" runat="server" ControlToValidate="txtVDate" ErrorMessage="Enter date" ForeColor="Red"></asp:RequiredFieldValidator>
            </td>
            <td>
                Violation Time</td>
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
            <td class="style9">
                Violation Place</td>
            <td class="style10">
                <asp:TextBox ID="txtVPlace" runat="server" Width="168px"></asp:TextBox>
            </td>
            <td class="style10">
                <asp:RegularExpressionValidator ID="RegularExpressionValidator6" runat="server" ControlToValidate="txtVPlace" ErrorMessage="Enter Alphabets Only" ForeColor="Red" ValidationExpression="[a-zA-Z ]*$"></asp:RegularExpressionValidator>
            </td>
            <td class="style10">
                Violation details</td>
            <td class="style10">
                <asp:TextBox ID="txtVDetails" runat="server" Height="55px" TextMode="MultiLine" 
                    Width="225px"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td class="style6">
                &nbsp;</td>
            <td>
                &nbsp;</td>
            <td>
                &nbsp;</td>
            <td>
                &nbsp;</td>
            <td>
                <asp:RequiredFieldValidator ID="RequiredFieldValidator11" runat="server" ControlToValidate="txtVDetails" ErrorMessage="Enter details" ForeColor="Red"></asp:RequiredFieldValidator>
            </td>
        </tr>
        <tr>
            <td class="style12">
                Please enter your details here</td>
            <td class="style11">
                &nbsp;</td>
            <td class="style11">
                &nbsp;</td>
            <td class="style11">
                &nbsp;</td>
            <td class="style11">
                &nbsp;</td>
        </tr>
        <tr>
            <td class="auto-style12">
                Name</td>
            <td class="auto-style13">
                <asp:TextBox ID="txtName" runat="server" Height="16px" Width="195px"></asp:TextBox>
            </td>
            <td class="auto-style13">
                <asp:RegularExpressionValidator ID="RegularExpressionValidator5" runat="server" ControlToValidate="txtName" ErrorMessage="Enter Alphabets Only" ForeColor="Red" ValidationExpression="[a-zA-Z ]*$"></asp:RegularExpressionValidator>
            </td>
            <td class="auto-style13">
                Mobile No.</td>
            <td class="auto-style13">
                <asp:TextBox ID="txtMobileNo" runat="server" Width="197px"></asp:TextBox>
            </td>
        </tr>
        <tr>
            <td class="style6">
                Email</td>
            <td>
                <asp:TextBox ID="txtEmail" runat="server" Height="16px" Width="202px"></asp:TextBox>
            </td>
            <td>
                <asp:RegularExpressionValidator ID="RegularExpressionValidator1" runat="server" ControlToValidate="txtEmail" ErrorMessage="Enter Valid Email format" ForeColor="Red" ValidationExpression="\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*"></asp:RegularExpressionValidator>
            </td>
            <td>
                &nbsp;</td>
            <td>
                <asp:RegularExpressionValidator ID="RegularExpressionValidator2" runat="server" ControlToValidate="txtMobileNo" ErrorMessage="Should be exact 10 digit" ForeColor="Red" ValidationExpression="[0-9]{10}"></asp:RegularExpressionValidator>
            </td>
        </tr>
        <tr>
            <td class="style6">
                &nbsp;</td>
            <td>
                &nbsp;</td>
            <td>
                &nbsp;</td>
            <td>
                &nbsp;</td>
            <td>
                &nbsp;</td>
        </tr>
        <tr>
            <td class="style12">
                Please upload violation image</td>
            <td>
                &nbsp;</td>
            <td>
                &nbsp;</td>
            <td>
                &nbsp;</td>
            <td>
                &nbsp;</td>
        </tr>
        <tr>
            <td class="style6">
                Photo</td>
            <td>
                <asp:FileUpload ID="FileUpload_Photo" runat="server" />
            </td>
            <td>
                &nbsp;</td>
            <td>
                <asp:RequiredFieldValidator ID="RequiredFieldValidator8" runat="server" ControlToValidate="FileUpload_Photo" ErrorMessage="Add photo" ForeColor="Red"></asp:RequiredFieldValidator>
            </td>
            <td>
                &nbsp;</td>
        </tr>
        <tr>
            <td class="style6">
                &nbsp;</td>
            <td>
                <asp:ImageButton ID="ImgbtnSubmit" runat="server" Height="42px" 
                    ImageUrl="~/images/SubmitButton.png" Width="130px" 
                    onclick="ImgbtnSubmit_Click" />
            </td>
            <td>
                &nbsp;</td>
            <td>
                &nbsp;</td>
            <td>
                &nbsp;</td>
        </tr>
    </table></fieldset>
</asp:Content>
