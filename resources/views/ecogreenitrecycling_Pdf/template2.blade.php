<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }

        @page {
            margin-top: 20px;
            margin-left: 20px;
            margin-right: 20px;
            margin-bottom: 5px;
        }

        table {
            font-size: 12px;
        }

        td {
            font-size: 12px;
        }

        th {
            font-size: 12px;
        }

        p {
            font-size: 12px;
        }

        .logo {
            height: 65px !important;
            width: 65% !important;
        }

        .header {
            display: flex;
            align-items: center;
        }

        /* bootstap  spacing classes */

        .mt-3 {
            margin-top: 1rem;
        }

        .mb-2 {
            margin-bottom: 0.5rem;
        }

        .mb-4 {
            margin-bottom: 1.5rem;
        }

        /* Custom padding classes */
        .p-4 {
            padding: 1.5rem;
        }

        .pt-2 {
            padding-top: 0.5rem;
        }

        .pt-3 {
            padding-top: 1rem;
        }

        .pb-2 {
            padding-bottom: 0.5rem;
        }

        .pb-3 {
            padding-bottom: 1rem;
        }


        .pl-2 {
            padding-left: 0.5rem;
        }

        .pl-3 {
            padding-left: 1rem;
        }


        .pr-2 {
            padding-right: 0.5rem;
        }

        .pr-3 {
            padding-right: 1rem;
        }

        .d-flex {
            display: flex;
        }

        .first-row {
            border-left: 2px solid black !important;
            border-bottom: 1px solid gray !important;
            border-right: 1px solid gray !important;
            text-align: center;
        }

        .middle-row {
            border-left: 1px solid grey !important;
            border-bottom: 1px solid gray !important;
            border-right: 1px solid grey !important;
            text-align: center;
        }

        .last-row {
            border-left: 1px solid grey !important;
            border-bottom: 1px solid gray !important;
            border-right: 2px solid black !important;
            text-align: center;
        }

        .center-row {
            border-bottom: 1px solid gray !important;
            border-right: 1px solid grey !important;
            text-align: center;
        }

        .section-para {
            font-size: 12px !important;
            margin: .35rem 0;
        }

        #signature-pad3 {
            text-align: center;
        }
    </style>

</head>

<body>
    <div class="header d-flex">
        <img src="./template1_banner.png" class="logo" alt="logo">
    </div>
    <div style="margin-top: -15px !important;">
        <table style=" width: 100% !important; " cellspacing="0">
            <tr style="border-bottom: 2px solid black !important; width: 100% !important; ">
                <th style="border-bottom: 2px solid black !important; " colspan="8"></th>
                <th colspan="2" style=" text-align:right;">
                    <p style="border:none;  width:80%; "> Ref: {{ $ref_no ?? ''}} </p>
                </th>
            </tr>
            <tr>
                <th colspan="5" style="border: 2px solid black !important; background:black; color:white; ">PART A: Notification Details</th>
                <th colspan="5" style="border: 2px solid black !important; ">1. Consignment Note Code OLE954 / 16118</th>
            </tr>
            <tr>

                <td class="pt-2 pb-2 pr-2 pl-2" colspan="5" style="border: 2px solid black !important; ">
                    <div style="text-align:left;">
                        <label style="margin-bottom: 15px;"> <strong> 2. The waste described below is to be removed from:</strong> </label>
                        <p style="border:none; text-indent:10px;  border-bottom:1px dashed black; width:100%; margin-top: 2px; margin-bottom: 5px;">{{ $waste_contained ?? ''}}</p>
                    </div>
                    <div style="">
                        <label style="margin-bottom: 5px; text-align:left; "> <strong>3. Premises code (If applicable _ _ _ _ _): <strong> </label>
                        <p style="border:none; text-indent:10px;  border-bottom:1px dashed black; width:100%; margin-top: 0;">{{ $prem_code ?? ''}}</p>
                    </div>
                </td>

                <td colspan="5" style="border: 2px solid black !important; ">
                    <div style="text-align:left; margin-bottom:.5rem;">
                        <label style="margin-bottom: 15px;"> <strong> 4. The waste will be taken to: </strong> </label>
                        <p style="border:none; padding-left:10px; text-decoration:underline; width:100%; margin-top: 0; margin-bottom: 5px;">Commercial IT Recycling LTD Unit 3,3 Gibbons Street Dunkirk Industrial estate, Nottingham, NG7 2SB</p>
                    </div>
                    <div style="">
                        <label style="margin-bottom: 5px; text-align:left; "> <strong>5. The waste producer was (If different from 2.): <strong> </label>
                        <p style="border:none; text-indent:10px; text-decoration:underline; width:100%; margin-top: 0;">AS A2</p>
                    </div>
                </td>
            </tr>
            <tr>
                <th colspan="10" style="border: 2px solid black !important; ">PART A: Notification Details</th>
            </tr>
            <tr>
                <td colspan="6" style="border: 2px solid black !important; ">1. The process giving rise to the waste(s) was:</td>
                <td colspan="4" style="border: 2px solid black !important; "> 2. SIC for the process giving rise to the waste:</td>
            </tr>
            <tr>
                <td colspan="10" style="border: 2px solid black !important; ">WASTE DETAILS:</td>
            </tr>
            <tr>
                <th colspan="2" class="first-row">Description</th>
                <th class="middle-row">EWC Code</th>
                <th class="middle-row">Quantity</th>
                <th class="middle-row">Approx Weight (kg)</th>
                <th class="middle-row">Total Weight(kg)</th>
                <th class="middle-row">Component</th>
                <th class="middle-row">Concentration</th>
                <th class="middle-row">Physical Form</th>
                <th class="last-row">Hazard Code(s)</th>
            </tr>
            <tr>
                <td colspan="2" class="first-row">CRT Moniter / TV</td>
                <td class="middle-row">20:01:35</td>
                <td class="middle-row">{{$qty_row1 ?? ''}}</td>
                <td class="middle-row">{{$aprox_weight_r1 ?? ''}}</td>
                <td class="middle-row">{{$total_weight_r1 ?? ''}}</td>
                <td class="middle-row">Lead</td>
                <td class="middle-row">(up to 2.2 kg)</td>
                <td class="middle-row">Solid</td>
                <td class="last-row">H6</td>
            </tr>
            <tr>
                <td class="first-row">
                    <input {{ ($td_check_yes ?? '') ? 'checked' : ''; }} type="checkbox" id="check1"><label for="check1">Laptop</label>
                </td>
                <td class="middle-row">
                    <input {{ ($td_check_no ?? '') ? 'checked' : ''; }} type="checkbox" id="check2"><label for="check2">Tablet</label>
                </td>
                <td class="middle-row">20:01:35</td>
                <td class="middle-row"> {{$qty_row2 ?? ''}}</td>
                <td class="middle-row"> {{$aprox_weight_r2 ?? ''}}</td>
                <td class="middle-row"> {{$total_weight_r2 ?? ''}}</td>
                <td class="middle-row">Lead, Mercury</td>
                <td class="middle-row">Approx 0.5K</td>
                <td class="middle-row">Solid</td>
                <td class="last-row">H6</td>
            </tr>
            <tr>
                <td colspan="2" class="first-row">All in One PC</td>
                <td class="middle-row">20:01:35</td>
                <td class="middle-row"> {{$qty_row3 ?? ''}} </td>
                <td class="middle-row"> {{$aprox_weight_r3 ?? ''}} </td>
                <td class="middle-row"> {{$total_weight_r3 ?? ''}} </td>
                <td class="middle-row">Mercury</td>
                <td class="middle-row">Up to 2%</td>
                <td class="middle-row">Solid</td>
                <td class="last-row">H6</td>
            </tr>
            <tr>
                <td colspan="2" class="first-row">LCD / TFT Monitor</td>
                <td class="middle-row">20:01:35</td>
                <td class="middle-row"> {{$qty_row4 ?? ''}} </td>
                <td class="middle-row"> {{$aprox_weight_r4 ?? ''}} </td>
                <td class="middle-row"> {{$total_weight_r4 ?? ''}} </td>
                <td class="middle-row">Mercury</td>
                <td class="middle-row">Up to 2%</td>
                <td class="middle-row">Solid</td>
                <td class="last-row">H6</td>
            </tr>
            <tr>
                <td colspan="2" class="first-row">Batteries</td>
                <td class="middle-row">20:01:35</td>
                <td class="middle-row"> {{$qty_row6 ?? ''}} </td>
                <td class="middle-row"> {{$aprox_weight_r6 ?? ''}} </td>
                <td class="middle-row"> {{$total_weight_r6 ?? ''}} </td>
                <td class="middle-row">Mercury</td>
                <td class="middle-row">Approx 50%</td>
                <td class="middle-row">Solid</td>
                <td class="last-row">H6</td>
            </tr>
            <tr>
                <td colspan="2" class="first-row">Misc</td>
                <td class="middle-row">20:01:35</td>
                <td class="middle-row">{{$qty_row7 ?? ''}} </td>
                <td class="middle-row">{{$aprox_weight_r7 ?? ''}} </td>
                <td class="middle-row">{{$total_weight_r7 ?? ''}} </td>
                <td class="middle-row"></td>
                <td class="middle-row"></td>
                <td class="middle-row">Solid</td>
                <td class="last-row">H6</td>
            </tr>
            <tr>
                <td class="first-row" colspan="3">All waste is contained loose in the vehicle</td>
                <td class="middle-row" colspan="4">Total Weight KG = {{$weight_kg ?? ''}}</td>
                <td class="last-row" colspan="3">None of the waste is dangerous for carriage</td>
            </tr>
            <tr class="first-row">
                <td colspan="6">The information below is to be completed for each EWC identified.</td>
                <td colspan="2">Packaging</td>
                <td colspan="2">Special</td>
            </tr>
            <tr class="first-row">
                <td colspan="1">EWC Code</td>
                <td colspan="2">UN identification number(s)</td>
                <td colspan="2">Proper Shipping name(s)</td>
                <td colspan="2">UN class(s)</td>
                <td colspan="2">group(s)</td>
                <td colspan="1">requirements</td>
            </tr>
            <tr>
                <th colspan="6" style=" border: 2px solid black !important;">PART C-Carrier Certificate</th>
                <th colspan="4" style=" border: 2px solid black !important;">PART D-Consignor's Certificate</th>
            </tr>

            <tr>
                <td colspan="6" style="border: 2px solid black !important; ">
                    <p>(If more than one carrier is used, please attach a schedule for subsequent
                        carriers. If a schedule of carriers is attached tick here)
                        <input {{ ($p_check ?? '') ? 'checked' : ''; }} type="checkbox" id="check1">
                        I certify that I today collected the consignment and that the details in A2, A4
                        and B3 are correct & I have been advised of any specific handling
                        requirements.<br>
                        Where this note comprises part of a multiple collection the round number
                        and collection number are: {{$round_no ?? '' }}<br>
                        1. Carrier name:commercial IT Recycling LTD Unit 3, 3 Gibbons Street, Dunkirk Industrial estate, Nottingham, NG7 25B<br>
                        2. Waste Carrier license: CBDU457511<br>
                        3. Vehicle Registration number: DC 19 OOH<br>
                        4. Carriers Signature<br>
                    <div style="padding: 10px 50px;  text-align: center;  align-items:center; font-weight:bolder;">
                        <img src="{{$signature_image_a ?? '' }}" style="width: 200px; height: auto;  text-align: center;  align-items:center; font-weight:bolder; " alt="sinature">
                    </div>
                    Date: {{ $date_a ?? ''}}  Time: {{ $time_a ?? ''}}
                    </p>
                </td>
                <td colspan="4" style="border: 2px solid black !important; ">
                    <p>I certify that the information in A, B & C has been completed and is correct, that the carrier is registered or exempt and was advised of the appropriate precautionary measures. All of the waste is packaged and labelled correctly and the carrier has been advised of any special handling requirements.
                        I confirm that i have fulfilledmy duty to apply the waste hierarchy has required by regulation 12 of the Waste (England and Wales) Regulations 2011.
                        <br>
                        Consignor name: {{$cons_name ?? ''}}
                        <br>
                        On behaif of (Organisation stated in Part A/1):
                        Date: {{$date_b ?? ''}}
                    <div style="padding: 10px 50px;  text-align: center;  align-items:center; font-weight:bolder;">
                        <img src="{{$signature_image_a ?? '' }}" style="width: 200px; height: auto;  text-align: center;  align-items:center; font-weight:bolder; " alt="sinature">
                    </div>
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="10" style="border: 2px solid black !important;"> PART E - Consignee's certificate (where more than one waste type is
                    collected all of the information given below must be completed for each EWC)
                </td>
            </tr>

            <tr>
                <td colspan="3" style="border: 2px solid black !important;">EWC Code(s) Received</td>
                <td colspan="4" style="border: 2px solid black !important;"> Quantity of each EWC code Received (KG)</td>
                <td colspan="1" style="border: 2px solid black !important;">Accepted / Rejected</td>
                <td colspan="2" style="border: 2px solid black !important;"> Waste Operation (R or D code)</td>
            </tr>
            <tr>
                <td colspan="3" style="border: 2px solid black !important;">20:01:35</td>
                <td colspan="4" style="border: 2px solid black !important;">{{$ewc_qty_r1 ?? ''}} </td>
                <td colspan="1" style="border: 2px solid black !important;">{{$waste_code_r1 ?? ''}}</td>
                <td colspan="2" style="border: 2px solid black !important;">{{$acept_rej_r1 ?? ''}}</td>
            </tr>
            <tr>
                <td colspan="3" style="border: 2px solid black !important;">20:01:33</td>
                <td colspan="4" style="border: 2px solid black !important;">{{$ewc_qty_r2 ?? ''}}  </td>
                <td colspan="1" style="border: 2px solid black !important;">{{$waste_code_r2 ?? ''}} </td>
                <td colspan="2" style="border: 2px solid black !important;"> {{$acept_rej_r2 ?? ''}} </td>
            </tr>

            <tr>
                <td colspan="6" style=" border:2px solid black; ">
                    <P>1. I RECEIVED WASTE AT THE ADDRESS GIVEN IN A4<br>
                        2. VEHICLE REGISTRATION: DC 19 OOH<br>
                        3. WHERE THE WASTE IS REJECTED, PLEASE PROVIDE DETAILS:
                        Data to be processed?<br>
                        <span class="checkboxs">
                            <label for="check1">Yes <input {{ ($check_yes ?? '') ? 'checked' : ''; }} type="checkbox" id="check1"></label>
                        </span>
                        <span class="checkboxs">
                            <label for="check2">No <input {{ ($check_no ?? '') ? 'checked' : ''; }} type="checkbox" id="check2"></label>
                        </span>
                    </P>
                </td>
                <td colspan="2" style=" border:2px solid black; ">
                    <p>
                        Name: {{$name ?? ''}}
                        <br>
                    <div style="padding: 10px 50px;  text-align: center;  align-items:center; font-weight:bolder;">
                        <img src="{{$signature_image_a ?? '' }}" style="width: 200px; height: auto;  text-align: center;  align-items:center; font-weight:bolder; " alt="sinature">
                    </div>
                    </p><br>
                    Date: {{$date_c ?? ''}}<br>
                    </p>
                </td>
                <td colspan="2" style=" border:2px solid black; ">
                    <p>
                        Commercial IT Recycling LTD<br>
                        Unit 3,3 Gibbons Street<br>
                        Dunkirk Industrial estate<br>
                        Nottingham<br>
                        NG7 2SB<br>
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="10" style="border: 2px solid black !important;">
                    I CERTIFY THAT WASTE PERMIT / EXEMPT WASTE OPERATION NUMBER:
                    EXP/MP3646YY AUTHORISES THE MANAGEMENT OF THE WASTE DESCRIBED IN B AT THE ADDRESS GIVEN IN A4 WHERE THE CONSIGNMENT FORMS PART OF A MULTIPLE CONNECTIONS, AS
                    IDENTIFIED IN PART C.<br>
                    THE COLLECTION ARE: {{$collection ?? ''}}
                </td>
            </tr>
        </table>
    </div>
</body>

</html>