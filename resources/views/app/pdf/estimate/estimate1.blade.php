<!DOCTYPE html>
<html>
<head>
    <title>Estimate</title>
    {{-- <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"> --}}
    <style type="text/css">
        body {
            font-family: 'Roboto', sans-serif;
        }

        html {
            margin: 0px;
            padding: 0px;
        }

        table {
            border-collapse: collapse;
        }

        hr {
            color:rgba(0, 0, 0, 0.2);
            position: absolute;
            top: 90px;
            left: 0px;
            width: 100%;
            margin: 0 30px 0 30px;
        }

        .header-center {
            text-align: center
        }

        .header-table {
            position: absolute;
            width: 100%;
            height: 90px;
            left: 0px;
            top: -50px;
        }

        .header-logo {
            height: 50px;
            margin-top: 20px;
            text-transform: capitalize;
            color: #817AE3;
        }

        .inv-flex{
            display:flex;
        }

        .inv-data{
            text-align:right;
            margin-right:120px;
        }
        .inv-value{
            text-align:left;
            margin-left:160px;
        }
        .header {
            font-family: 'Roboto', sans-serif;
            font-size: 20px;
            color: rgba(0, 0, 0, 0.7);
        }

        .TextColor1 {
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            color: rgba(0, 0, 0, 0.5);
        }

        @page {
            margin-top: 60px !important;
        }

        .wrapper {
           display: block;
           margin-top: 0px;
           padding-top: 16px;
           padding-bottom: 20px;
        }

        .address {
            /* display: inline-block; */
            padding-top: 30px
        }

        .company {
            float: left;
            padding-left: 30px;
            font-weight: normal;
            display: inline;
            float:left;
            width:30%;
            text-transform: capitalize;
            margin-bottom: 2px;
        }

        .company h1 {
            font-style: normal;
            font-weight: normal;
            font-size: 15px;
            line-height: 22px;
            letter-spacing: 0.05em;
            margin-bottom: 0px;
        }

        .company-add {
            margin-top: 2px;
            text-align: left;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 15px;
            color: #595959;
        }

        .job-add {
            /* display: inline; */
            float: right;
            padding: 10px 30px 0 0;
        }
        .amount-due {
            background-color: #f2f2f2;
        }

        .textRight {
            text-align: right;
        }

        .textLeft {
            text-align: left;
        }

        .textStyle1 {
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 18px;
            padding-right: 40px;
        }

        .textStyle2 {
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 18px;
            text-align: right;
        }
        .bill-add {
            width:45%;
            padding: 0px 0 0 0px;
        }

        /* -------------------------- */
        /* shipping style */

        .ship-address-container {
            float: right;
            padding-left: 30px;
        }

        .ship-to {
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 18px;
            padding: 0px;
            margin-top: 27px;
            margin-bottom: 0px;
        }

        .ship-user-name {
            max-width: 250px
            font-style: normal;
            font-weight: normal;
            font-size: 15px;
            line-height: 22px;
            padding: 0px;
            margin: 0px;
        }
        .ship-user-address {
            font-style: normal;
            font-weight: normal;
            font-size: 10px;
            line-height: 15px;
            color: #595959;
            padding: 0px;
            margin: 0px;
            width: 160px;
        }
        .ship-user-phone {
            font-style: normal;
            font-weight: normal;
            font-size: 10px;
            line-height: 15px;
            color: #595959;
            padding: 0px;
            margin: 0px;
        }

        /* -------------------------- */
        /* billing style */

        .bill-address-container {
            float: left;
            padding-left: 30px;
        }

        .bill-to {
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 18px;
            padding: 0px;
            margin-top: 27px;
            margin-bottom: 0px;
        }

        .bill-user-name {
            max-width: 250px
            font-style: normal;
            font-weight: normal;
            font-size: 15px;
            line-height: 22px;
            padding: 0px;
            margin: 0px;
        }

        .bill-user-address {
            font-style: normal;
            font-weight: normal;
            font-size: 10px;
            line-height: 15px;
            color: #595959;
            padding: 0px;
            margin: 0px;
            width: 160px;
        }

        .bill-user-phone {
            font-style: normal;
            font-weight: normal;
            font-size: 10px;
            line-height: 15px;
            color: #595959;
            padding: 0px;
            margin: 0px;
        }

        .table2 {
            margin-top: 35px;
            border-bottom: 1px solid #EAF1FB;
            padding: 0px 30px 0 30px;
            page-break-before: avoid;
            page-break-after: auto;
        }

        .table2 hr {
            height:0.1px;
        }

        .ItemTableHeader {
            font-size: 13.5;
            text-align: center;
            color: rgba(0, 0, 0, 0.85);
            padding: 5px;
        }

        tr.main-table-header th {
            border-bottom: 0.620315px solid #E8E8E8;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 18px;
        }

        tr.item-details td {
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 18px;
        }

        .items {
            font-size: 13;
            color: rgba(0, 0, 0, 0.6);
            text-align: center;
            padding: 5px;
        }

        .padd8 {
            padding-top: 8px;
            padding-bottom: 8px;
        }

        .padd2 {
            padding-top: 2px;
            padding-bottom: 2px;
        }
        .table3 {
            border-top: none;
            box-sizing: border-box;
            width: 630px;
            page-break-inside: avoid;
            page-break-before: auto;
            page-break-after: auto;

        }

        .total-border-left {
            border: 1px solid #E8E8E8!important;
            border-right: 0px !important;
            padding-top: 0px;
            padding:8px !important;
        }
        .total-border-right {
            border: 1px solid #E8E8E8!important;
            border-left: 0px !important;
            padding-top: 0px;
            padding:8px !important;

        }
        .inv-item {
            border-color: #d9d9d9;
        }

        .no-border {
            border: none;
        }

        .desc {
            font-weight: 100;
            text-align: justify;
            font-size: 10px;
            margin-bottom: 15px;
            margin-top:7px;
            color:rgba(0, 0, 0, 0.85);
        }

        .notes {
            font-family: 'Roboto', sans-serif;
            font-style: normal;
            font-weight: 300;
            font-size: 12px;
            color: #595959;
            margin-top: 15px;
            margin-left: 30px;
            width: 442px;
            text-align: left;
            page-break-inside: avoid;
        }

        .notes-label {
            font-family: 'Roboto', sans-serif;
            font-style: normal;
            font-weight: normal;
            font-size: 15px;
            line-height: 22px;
            letter-spacing: 0.05em;
            color: #040405;
            width: 108px;
            height: 19.87px;
            padding-bottom: 10px;
        }

    </style>
</head>
<body>
    <div class="header-table">
        <table width="100%">
            <tr>
                <td class="header-center">
                    @if($logo)
                        <img class="header-logo" src="{{ $logo }}" alt="Company Logo">
                    @else
                        @if($estimate->user->company)
                        <h2 class="header-logo"> {{$estimate->user->company->name}} </h2>
                        @endif
                    @endif
                </td>
            </tr>
        </table>
        <hr class="header-line" style="border: 0.620315px solid #E8E8E8;" />
    </div>
    <div class="wrapper">
        <div class="address">
            <div class="company">
                @include('app.pdf.estimate.partials.company-address')
            </div>
            <div class="job-add">
                <table>
                    <tr>
                        <td class="textStyle1" style="text-align: left; color: #55547A">Estimate Number</td>
                        <td class="textStyle2"> &nbsp;{{$estimate->estimate_number}}</td>
                    </tr>
                    <tr>
                        <td class="textStyle1" style="text-align: left; color: #55547A">Estimate Date </td>
                        <td class="textStyle2"> &nbsp;{{$estimate->formattedEstimateDate}}</td>
                    </tr>
                    <tr>
                        <td class="textStyle1" style="text-align: left; color: #55547A">Expiry Date</td>
                        <td class="textStyle2"> &nbsp;{{$estimate->formattedExpiryDate}}</td>
                    </tr>
                </table>
            </div>
            <div style="clear: both;"></div>
        </div>
        <div class="bill-add">
            <div class="bill-address-container">
                @include('app.pdf.estimate.partials.billing-address')
            </div>
            @if($estimate->user->billingaddress && ($estimate->user->billingaddress->name || $estimate->user->billingaddress->address_street_1 || $estimate->user->billingaddress->address_street_2 || $estimate->user->billingaddress->country || $estimate->user->billingaddress->state || $estimate->user->billingaddress->city || $estimate->user->billingaddress->zip || $estimate->user->billingaddress->phone))
                <div class="ship-address-container">
            @else
                <div class="ship-address-container " style="float:left;padding-left:0px;">
            @endif
                @include('app.pdf.estimate.partials.shipping-address')
            </div>
            <div style="clear: both;"></div>
        </div>
        <div style="position:relative">
            @include('app.pdf.estimate.partials.table')
        </div>
        @include('app.pdf.estimate.partials.notes')
    </div>
</body>
</html>
