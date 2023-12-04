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
            margin-top: 30px;
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
    </style>

</head>

<body>
    <div class="header d-flex">
        <img src="./template1_banner.png" class="logo" alt="logo">
    </div>

    <div>
        <table style=" width: 100% !important; " cellspacing="0">
            <tr style="border-bottom: 2px solid black !important; width: 100% !important; ">
                <th style="border-bottom: 2px solid black !important; " colspan="8"></th>
                <th style=" text-align:left;">
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
                        <p style="border:none; text-indent:10px;  text-decoration:underline; width:100%; margin-top: 2px; margin-bottom: 5px;">{{ $waste_contained ?? ''}}</p>
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
                <td colspan="5" style="border: 2px solid black !important; ">1. The process giving rise to the waste(s) was:</td>
                <td colspan="5" style="border: 2px solid black !important; "> 2. SIC for the process giving rise to the waste:</td>
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
                <td class="middle-row"></td>
                <td class="middle-row"></td>
                <td class="middle-row"></td>
                <td class="middle-row">Lead</td>
                <td class="middle-row">(up to 2.2 kg)</td>
                <td class="middle-row">Solid</td>
                <td class="last-row">H6</td>
            </tr>

            <tr>
                <td  class="first-row" >
                    <input type="checkbox" id="check1"><label for="check1">Laptop</label>
                </td>
                <td  class="middle-row">
                    <input type="checkbox" id="check2"><label for="check2">Tablet</label>
                </td>
                <td class="middle-row">20:01:35</td>
                <td class="middle-row"></td>
                <td class="middle-row"></td>
                <td class="middle-row"></td>
                <td class="middle-row">Lead, Mercury</td>
                <td class="middle-row">Approx 0.5K</td>
                <td class="middle-row">Solid</td>
                <td class="last-row">H6</td>
            </tr>

            <tr>
                <td colspan="2" class="first-row">All in One PC</td>
                <td class="middle-row">20:01:35</td>
                <td class="middle-row"></td>
                <td class="middle-row"></td>
                <td class="middle-row"></td>
                <td class="middle-row">Mercury</td>
                <td class="middle-row">Up to 2%</td>
                <td class="middle-row">Solid</td>
                <td class="last-row">H6</td>
            </tr>

            <tr>
                <td colspan="2" class="first-row">LCD / TFT Monitor</td>
                <td class="middle-row">20:01:35</td>
                <td class="middle-row"></td>
                <td class="middle-row"></td>
                <td class="middle-row"></td>
                <td class="middle-row">Mercury</td>
                <td class="middle-row">Up to 2%</td>
                <td class="middle-row">Solid</td>
                <td class="last-row">H6</td>
            </tr>

            <tr>
                <td colspan="2" class="first-row">Batteries</td>
                <td class="middle-row">20:01:35</td>
                <td class="middle-row"></td>
                <td class="middle-row"></td>
                <td class="middle-row"></td>
                <td class="middle-row">Mercury</td>
                <td class="middle-row">Approx 50%</td>
                <td class="middle-row">Solid</td>
                <td class="last-row">H6</td>
            </tr>
            
            <tr>
                <td colspan="2" class="first-row">Misc</td>
                <td class="middle-row">20:01:35</td>
                <td class="middle-row"></td>
                <td class="middle-row"></td>
                <td class="middle-row"></td>
                <td class="middle-row"></td>
                <td class="middle-row"></td>
                <td class="middle-row">Solid</td>
                <td class="last-row">H6</td>
            </tr>

            <tr>
                <td class="first-row" colspan="3">All waste is contained loose in the vehicle</td>
                <td class="middle-row" colspan="4">Total Weight KG = </td>
                <td class="last-row" colspan="3">None of the waste is dangerous for carriage</td>
            </tr>
            <tr class="first-row">
                <td colspan="6">The information below is to be completed for each EWC identified.</td>
                <td colspan="2">Packaging</td>
                <td  colspan="2">Special</td>
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
                <td colspan="10" style=" border-top: 2px solid black !important;" class="pt-2 pb-2"></td>
            </tr>
            <tr>
                <th colspan="5" style=" border: 2px solid black !important;">PART C-Carrier Certificate</th>
                <th colspan="5" style=" border: 2px solid black !important;">PART D-Consignor's Certificate</th>
            </tr>

            <tr>
                <td colspan="5" class="pl-3 pr-3" style="border: 2px solid black !important;">
                    <p style="font-size: 12px !important;  text-align: justify;"> By signing in section D below I confirm that I have fulfilled my
                        duty to apply the waste hierarchy as required by Regulations
                        12 of th waste (England and Wales) Regulations 2011
                    </p>
                    <div style="text-align:left;" class="mb-2 ">
                        <input type="checkbox" {{ ($yes_check ?? '') ? 'checked' : ''; }}>
                        <label for="check" style="margin-bottom: 2px !important;">Yes</label>
                    </div>

                    <div style="text-align:left; margin-bottom:.5rem;">
                        <label style="margin-bottom: 15px;"> <strong>Full Name:</strong> </label>
                        <p style="border:none; text-indent:10px; border-bottom:1px dashed black; width:100%; margin-top: 0; margin-bottom: 5px;">{{ $sec_b_name ?? '' }}</p>
                    </div>
                    <div style="">
                        <label style="margin-bottom: 15px; text-align:left; "> <strong>Company Name & Address:<strong> </label>
                        <p style="border:none; text-indent:10px; border-bottom:1px dashed black; width:100%; margin-top: 0;">{{ $sec_b_comp ?? '' }}</p>
                    </div>

                    <p style="font-size: 10px !important;  text-align: justify;">What are you:(Producers of waste / importer of waste / local authority / holder of environmental
                        permit)
                    </p>
                </td>
                <td colspan="5" class="pl-3 pr-3" style="border: 2px solid black !important;">

                    <div for="" style="text-align:left;">
                        <div style="text-align:left; margin-bottom:.5rem;">
                            <label style="margin-bottom: 15px;"> <strong>Full Name:</strong> </label>
                            <p style="border:none; text-indent:10px; border-bottom:1px dashed black; width:100%; margin-top: 0; margin-bottom: 5px;">{{ $sec_c_name ?? '' }}</p>
                        </div>
                        <p class="section-para">
                            <strong> Company And Address:</strong>
                            <i> Comm ercial IT Recycling LTD Unit 3,3 Gibbons Street Dunkirk Industrial estate Nottingham< NG7 2SB. </i>
                        </p>
                        <p class="section-para">
                            <strong> Name Of Local Council:</strong>
                            Nottingham City Council.
                        </p>
                        <p class="section-para">
                            <strong> What Are You:</strong>
                            Commercial IT Recycling LTD.
                        </p>
                        <p class="section-para">
                            <strong> Registered:</strong>
                            Carrier / Broker Dealer of Waste TIER 11 Exemption.
                        </p>
                        <p class="section-para">
                            <strong> Registration Number:</strong>
                            CBDU457511 EXP/MP3646YY.
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="border: 2px solid black !important;"> PART E - Consignee's certificate (where more than one waste type is collected all of the information given below must be completed for each EWC)</td>
            </tr>
            <tr>
                <td colspan="2" style="border: 2px solid black !important;">EWC Code(s) Received</td>
                <td colspan="3" style="border: 2px solid black !important;"> Quantity of each EWC code Received (KG)</td>
                <td colspan="2" style="border: 2px solid black !important;">Accepted / Rejected</td>
                <td colspan="3" style="border: 2px solid black !important;"> Waste Operation (R or D code)</td>
            </tr>
            <tr>
                <td colspan="2" style="border: 2px solid black !important;">20:01:35</td>
                <td colspan="3" style="border: 2px solid black !important;"> </td>
                <td colspan="2" style="border: 2px solid black !important;"></td>
                <td colspan="3" style="border: 2px solid black !important;"></td>
            </tr>
            <tr>
                <td colspan="2" style="border: 2px solid black !important;">EWC Code(s) Received</td>
                <td colspan="3" style="border: 2px solid black !important;"> </td>
                <td colspan="2" style="border: 2px solid black !important;"></td>
                <td colspan="3" style="border: 2px solid black !important;"></td>
            </tr>
            <tr>
                <td colspan="10" class="pt-2 pb-2"></td>
            </tr>

            <tr>
                <th colspan="5" style=" border:2px solid black; "></th>
                <th colspan="5" style=" border:2px solid black; "></th>
            </tr>
        </table>
    </div>
</body>

</html>