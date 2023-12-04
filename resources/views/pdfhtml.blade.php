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
                <th style="border-bottom: 2px solid black !important; text-align:left;" class="pl-2" colspan="2">
                    SECTION A-DESCRIPTION OF WASTE
                </th>
                <th style="border-bottom: 2px solid black !important; " colspan="3">
                    <p> {{ now()->format('l, j F, Y') }}</p>
                </th>
                <th style=" text-align:left;">
                    <p style="border:none;  width:80%; "> Ref: {{ $ref_no ?? ''}} </p>
                </th>
            </tr>
            <tr>
                <td class="pt-2 pb-2 pr-2 pl-2" colspan="6">
                    <div style="text-align:left; margin-bottom:.5rem;">
                        <label style="margin-bottom: 15px;"> <strong> How is the waste contained (loose, skip, sacks, container)? </strong> </label>
                        <p style="border:none; text-indent:10px; border-bottom:1px dashed black; width:100%; margin-top: 0; margin-bottom: 5px;">{{ $waste_contained ?? ''}}</p>
                    </div>
                    <div style="">
                        <label style="margin-bottom: 15px; text-align:left; "> <strong>How much Waste (items and weight)? <strong> </label>
                        <p style="border:none; text-indent:10px; border-bottom:1px dashed black; width:100%; margin-top: 0;">{{ $waste_quantity ?? ''}}</p>
                    </div>
                </td>
            </tr>

            <tr>
                <th colspan="6" style="border: 2px solid black !important; ">YOUR COLLECTION DETAILS WERE:</th>
            </tr>
            <tr>
                <th class="first-row" style="width:22% !important;">DESCRIPTION</th>
                <th class="middle-row" style="width:14% !important;">QUANTITY</th>
                <th class="middle-row" style="width:16% !important;">APPROX. WEIGHT</th>
                <th style="border-bottom: 1px solid grey !important; width: 2% !important; "> </th>
                <th class="center-row " style="width:22% !important;">PER ITEM (KG)</th>
                <th class="last-row" style="width:24% !important;">EWC CODE</th>
            </tr>

            <tr>
                <td class="first-row">Base Unit</td>
                <td class="middle-row">{{ $base_qty ?? '' }}</td>
                <td class="middle-row">{{ $base_weight ?? ''}}</td>
                <th style="border-bottom: 1px solid grey !important; width: 2% !important; "> </th>
                <td class="center-row">{{ $base_item ?? '' }}</td>
                <td class="last-row">{{ $base_code ?? '' }}</td>
            </tr>
            <tr>
                <td class="first-row">PHOTOCOPER</td>
                <td class="middle-row">{{ $photo_qty ?? ''}}</td>
                <td class="middle-row">{{ $photo_weight ?? ''}}</td>
                <th style="border-bottom: 1px solid grey !important; width: 2% !important; "> </th>
                <td class="center-row">{{ $photo_item ?? ''}}</td>
                <td class="last-row">{{ $photo_code ?? ''}}</td>
            </tr>
            <tr>
                <td class="first-row">SERVER</td>
                <td class="middle-row">{{ $server_qty ?? ''}}</td>
                <td class="middle-row">{{ $server_weight ?? ''}}</td>
                <th style="border-bottom: 1px solid grey !important; width: 2% !important; "> </th>
                <td class="center-row">{{ $server_item ?? ''}}</td>
                <td class="last-row">{{ $server_code ?? ''}}</td>
            </tr>
            <tr>
                <td class="first-row">PRINTER</td>
                <td class="middle-row">{{ $printer_qty ?? ''}}</td>
                <td class="middle-row">{{ $printer_weight ?? ''}}</td>
                <th style="border-bottom: 1px solid grey !important; width: 2% !important; "> </th>
                <td class="center-row">{{ $printer_item ?? ''}}</td>
                <td class="last-row">{{ $printer_code ?? ''}}</td>
            </tr>
            <tr>
                <td class="first-row">DATA CARRYING MEDIA</td>
                <td class="middle-row">{{ $data_qty ?? ''}}</td>
                <td class="middle-row">{{ $data_weight ?? ''}}</td>
                <th style="border-bottom: 1px solid grey !important; width: 2% !important; "> </th>
                <td class="center-row">{{ $data_item ?? ''}}</td>
                <td class="last-row">{{ $data_code ?? ''}}</td>
            </tr>
            <tr>
                <td class="first-row">KEYBOARD</td>
                <td class="middle-row">{{ $keyboard_qty ?? ''}}</td>
                <td class="middle-row">{{ $keyboard_weight ?? ''}}</td>
                <th style="border-bottom: 1px solid grey !important; width: 2% !important; "> </th>
                <td class="center-row">{{ $keyboard_item ?? ''}}</td>
                <td class="last-row">{{ $keyboard_code ?? ''}}</td>
            </tr>
            <tr>
                <td class="first-row">INK / TONER CARTRIDGES</td>
                <td class="middle-row">{{ $ink_qty ?? ''}}</td>
                <td class="middle-row">{{ $ink_weight ?? ''}}</td>
                <th style="border-bottom: 1px solid grey !important; width: 2% !important; "> </th>
                <td class="center-row">{{ $ink_item ?? ''}}</td>
                <td class="last-row">{{ $ink_code ?? ''}}</td>
            </tr>
            <tr>
                <td class="first-row">MOBILE PHONE</td>
                <td class="middle-row">{{ $mobile_qty ?? ''}}</td>
                <td class="middle-row">{{ $mobile_weight ?? ''}}</td>
                <th style="border-bottom: 1px solid grey !important; width: 2% !important; "> </th>
                <td class="center-row">{{ $mobile_item ?? ''}}</td>
                <td class="last-row">{{ $mobile_code ?? ''}}</td>
            </tr>
            <tr>
                <td class="first-row">MISCELLANEOUS</td>
                <td class="middle-row">{{ $miscell_qty ?? ''}}</td>
                <td class="middle-row">{{ $miscell_weight ?? ''}}</td>
                <th style="border-bottom: 1px solid grey !important; width: 2% !important; "> </th>
                <td class="center-row">{{ $miscell_item ?? ''}}</td>
                <td class="last-row">{{ $miscell_code ?? ''}}</td>
            </tr>
            <tr>
                <td colspan="6" style=" border-top: 2px solid black !important;" class="pt-2 pb-2"></td>
            </tr>
            <tr>
                <th colspan="3" style=" border: 2px solid black !important;">SECTION B-CURRENT HOLDER OF WASTE</th>
                <td></td>
                <th colspan="2" style=" border: 2px solid black !important;">SECTION C-PERSON COLLERCTING THE WASTE</th>
            </tr>

            <tr>
                <td colspan="3" class="pl-3 pr-3" style="border: 2px solid black !important;">
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
                <td></td>
                <td colspan="2" class="pl-3 pr-3" style="border: 2px solid black !important;">

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
                <td colspan="6" class="pt-2 pb-2"></td>
            </tr>

            <tr>
                <th colspan="6" style=" border:2px solid black; ">SECTION D-THE TRANSFER</th>
            </tr>

            <tr style=" border-left:2px solid black; border-right:2px solid black;">
                <td colspan="6" class="pl-3 pr-3">
                    <div style="text-align:left;">
                        <p class="section-para">
                            <strong> Transfer Address Or Collection Point:</strong>
                            Who Arranged the transfer: Commercial IT Recycling LTD.
                        </p>
                        <p class="section-para">
                            <strong> Registration number:</strong>
                            CBDU457511
                        </p>
                    </div>
                </td>
            </tr>
            <tr style=" border-left:2px solid black; border-right:2px solid black;">
                <td colspan="3">
                    <table style="width: 100%;" cellspacing="0">
                        <tr align="left">
                            <th colspan="2" class="pl-3">Data to be processed?</th>
                        </tr>
                        <tr align="left">
                            <td class="pl-3">Yes</td>
                            <td><input {{ ($sec_d_check_yes ?? '') ? 'checked' : ''; }} type="checkbox" id="check12"> </td>
                        </tr>
                        <tr align="left">
                            <td class="pl-3">No</td>
                            <td><input {{ ($sec_d_check_no ?? '') ? 'checked' : ''; }} type="checkbox" id="check11"></td>
                        </tr>
                    </table>
                </td>
                <td colspan="3">
                    <table style="width: 100%;" cellspacing="0">
                        <tr align="left">
                            <td style="width: 70%;">Data Wipe HMG level 1</td>
                            <td style="text-align: left;"><input type="checkbox" id="check12" {{ ($sec_d_wipel1 ?? '') ? 'checked' : ''; }}></td>
                        </tr>
                        <tr align="left">
                            <td>Data Wipe HMG level 3</td>
                            <td><input type="checkbox" id="check11" {{ ($sec_d_wipel3 ?? '') ? 'checked' : ''; }}></td>
                        </tr>
                        <tr align="left">
                            <td>Crush (Charges May Apply)</td>
                            <td><input type="checkbox" id="check11" {{ ($sec_d_charges ?? '') ? 'checked' : ''; }}></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="6" style=" border-top: 2px solid black !important;" class="pt-2 pb-2"></td>
            </tr>
            <tr>
                <td colspan="3" class="pl-3 pr-3" style="border: 2px solid black !important; width:40%;">
                    <div for="" style="text-align:left;">
                        <p class="section-para">
                            <strong> Transferee's Signatures:</strong>
                        <div type="text" style="border: 1px solid black; padding:50px  60px 50px 60px "> </div>
                        </p>
                    </div>
                    <div style="text-align:left; margin-bottom:.5rem;">
                        <label style="margin-bottom: 15px;"> <strong> Full Name:</strong> </label>
                        <p style="border:none; text-indent:10px; border-bottom:1px dashed black; width:100%; margin-top: 0; margin-bottom: 5px;">{{ $signature_name_a ?? '' }}</p>
                    </div>
                    <div style="">
                        <label style="margin-bottom: 15px; text-align:left; " > <strong> Representing: <strong> </label>
                        <p style="border:none; text-indent:10px; border-bottom:1px dashed black; width:100%; margin-top: 0;">{{ $signature_repesent_a ?? '' }}</p>
                    </div>
                </td>
                <td></td>
                <td colspan="2" class="pl-3 pr-3" style="border: 2px solid black !important;">
                    <div for="" style="text-align:left;">
                        <p class="section-para">
                            <strong> Transferee's Signatures:</strong>
                        <div style="border: 1px solid black; padding:50px"> </div>
                        </p>
                    </div>
                    <div style="text-align:left; margin-bottom:.5rem;">
                        <label style="margin-bottom: 15px;"> <strong> Full Name:</strong> </label>
                        <p style="border:none; text-indent:10px; border-bottom:1px dashed black; width:100%; margin-top: 0; margin-bottom: 5px;">{{ $signature_name_b ?? '' }}</p>
                    </div>
                    <div style="">
                        <label style="margin-bottom: 15px; text-align:left; " > <strong> Representing: <strong> </label>
                        <p style="border:none; text-indent:10px; border-bottom:1px dashed black; width:100%; margin-top: 0;">{{ $signature_repesent_b ?? '' }}</p>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <!-- <a href="/resume" class="btn btn-primary" target="_blank"> Download </a> -->
</body>

</html>