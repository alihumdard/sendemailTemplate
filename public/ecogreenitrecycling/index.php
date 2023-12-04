<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    <link rel="stylesheet" type="text/css" href="./second.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/signature_pad"></script>
    <style>
        @media print {
            #printButton {
                display: none;
            }

            #clearSignature {
                display: none;
            }

            #clearSignature2 {
                display: none;
            }

            @page {
                size: 11.5in 11in;
            }

            /* Set zoom level to 120% */
            body {
                transform: scale(1);
                transform-origin: top;
            }

            #signature-pad {
                text-align: center;
            }
        }
    </style>

</head>

<body>

    <div class="container">
        <form action="/api/generatepdf" id="pdfForm" method="post"> 
            <input type="hidden" name="signature_image_a" id="signature_image_a" value="">
            <input type="hidden" name="signature_image_b" id="signature_image_b" value="">
            <input type="hidden" name="file_name" id="file_name" value="">
            <input type="hidden" name="view_name" id="view_name" value="ecogreenitrecycling_Pdf.index">
            <div class="row">
                <div class="col-md-4 d-flex logu">
                    <img src="./Computer_IT.png" class="container logo" alt="logo">
                    <p>www.computeritdisposals.co.uk</p>
                </div>
                <div class="col-md-4 d-flex">
                    <h1><strong>DUTY OF CARE</strong></h1>
                </div>
                <div class="col-md-4 d-flex">
                    <p><strong><br>
                            Ref: <input name="ref_no" id="ref_no" type="text">
                        </strong></p>
                </div>
            </div>
            <div class="row">
                <table border="1" cellspacing="0">
                    <tr>
                        <th colspan="3" class="bdnone"> SECTION A-DESCRIPTION OF WASTE</th>

                        <th colspan="2" class="bdnone datealign">
                            <p id="date"></p>
                        </th>
                    </tr>
                    <tr>
                        <td colspan="5">A1: How is the waste contained:
                            (loose,skip,sacks,container)
                            <input name="waste_contained" id="waste_contained" type="text" class="increase"><br><br>
                            A2: How much Waste (items and weight):
                            <input name="waste_quantity" id="waste_quantity" type="text" class="increase"><br><br>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="5" style="text-align: center;">YOUR COLLECTION DETAILS WERE:</th>
                    </tr>
                    <tr align="center">
                        <th>DESCRIPTION</th>
                        <th>QUANTITY</th>
                        <th>APPROX. WEIGHT</th>
                        <th>PER ITEM (KG)</th>
                        <th>EWC CODE</th>
                    </tr>
                    <tr align="center">
                        <td>Base Unit</td>
                        <td><input name="base_qty" id="base_qty" type="number"></td>
                        <td><input name="base_weight" id="base_weight" type="number"></td>
                        <td><input name="base_item" id="base_item" type="number"></td>
                        <td><input name="base_code" id="base_code" type="number"></td>
                    </tr>
                    <tr align="center">
                        <td>PHOTOCOPER</td>
                        <td><input name="photo_qty" id="photo_qty" type="number"></td>
                        <td><input name="photo_weight" id="photo_weight" type="number"></td>
                        <td><input name="photo_item" id="photo_item" type="number"></td>
                        <td><input name="photo_code" id="photo_code" type="number"></td>
                    </tr>
                    <tr align="center">
                        <td>SERVER</td>
                        <td><input name="server_qty" id="server_qty" type="number"></td>
                        <td><input name="server_weight" id="server_weight" type="number"></td>
                        <td><input name="server_item" id="server_item" type="number"></td>
                        <td><input name="server_code" id="server_code" type="number"></td>
                    </tr>
                    <tr align="center">
                        <td>PRINTER</td>
                        <td><input name="printer_qty" id="printer_qty" type="number"></td>
                        <td><input name="printer_weight" id="printer_weight" type="number"></td>
                        <td><input name="printer_item" id="printer_item" type="number"></td>
                        <td><input name="printer_code" id="printer_code" type="number"></td>
                    </tr>
                    <tr align="center">
                        <td>DATA CARRYING MEDIA</td>
                        <td><input name="data_qty" id="data_qty" type="number"></td>
                        <td><input name="data_weight" id="data_weight" type="number"></td>
                        <td><input name="data_item" id="data_item" type="number"></td>
                        <td><input name="data_code" id="data_code" type="number"></td>
                    </tr>
                    <tr align="center">
                        <td>KEYBOARD</td>
                        <td><input name="keyboard_qty" id="keyboard_qty" type="number"></td>
                        <td><input name="keyboard_weight" id="keyboard_weight" type="number"></td>
                        <td><input name="keyboard_item" id="keyboard_item" type="number"></td>
                        <td><input name="keyboard_code" id="keyboard_code" type="number"></td>
                    </tr>
                    <tr align="center">
                        <td>INK / TONER CARTRIDGES</td>
                        <td><input name="ink_qty" id="ink_qty" type="number"></td>
                        <td><input name="ink_weight" id="ink_weight" type="number"></td>
                        <td><input name="ink_item" id="ink_item" type="number"></td>
                        <td><input name="ink_code" id="ink_code" type="number"></td>
                    </tr>
                    <tr align="center">
                        <td>MOBILE PHONE</td>
                        <td><input name="mobile_qty" id="mobile_qty" type="number"></td>
                        <td><input name="mobile_weight" id="mobile_weight" type="number"></td>
                        <td><input name="mobile_item" id="mobile_item" type="number"></td>
                        <td><input name="mobile_code" id="mobile_code" type="number"></td>
                    </tr>
                    <tr align="center">
                        <td>MISCELLANEOUS</td>
                        <td><input name="miscell_qty" id="miscell_qty" type="number"></td>
                        <td><input name="miscell_weight" id="miscell_weight" type="number"></td>
                        <td><input name="miscell_item" id="miscell_item" type="number"></td>
                        <td><input name="miscell_code" id="miscell_code" type="number"></td>
                    </tr>
                </table><br>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex" style="padding-left: 0;">
                    <table class="table2" border="1">

                        <tr align="center">
                            <th>SECTION B-CURRENT HOLDER OF WASTE</th>
                        </tr>
                        <tr>

                            <td>
                                <p>By signing in section D below I confirm that I have fulfilled my <br>
                                    duty to apply the waste hierarchy as required by Regulations <br>12
                                    of th waste (England and Wales) Regulations 2011<br><br>
                                <p class="checkbox">
                                    <input name="yes_check" id="yes_check" type="checkbox">
                                    <label for="yes_check">Yes</label>
                                </p><br>
                                Full Name: <input name="sec_b_name" id="sec_b_name" type="text" class="increase"><br><br>
                                Company Name & Address: <input name="sec_b_comp" id="sec_b_comp" type="text" class="increase"><br><br>
                                What are you:<br>
                                (Producers of waste / importer of waste / local authority / holder of environmental
                                permit)
                                </p><br>
                            </td>
                        </tr>

                    </table>
                </div>
                <div class="col-md-6 d-flex" style="padding-right: 0;">
                    <table border="1" class="table3">
                        <tr>
                            <th>SECTION C-PERSON COLLERCTING THE WASTE</th>
                        </tr>
                        <tr>
                            <td>
                                <p>Full Name: <input name="sec_c_name" id="sec_c_name" type="text" class="increase"><br><br>

                                    Company And Address: <strong> &nbsp;&nbsp; Commercial IT Recycling LTD <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        Unit 3,3 Gibbons Street <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dunkirk
                                        Industrial estate <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nottingham<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NG7
                                        2SB
                                    </strong>
                                <p>Name Of Local Council: &nbsp;&nbsp;&nbsp;&nbsp;Nottingham City Council<br>
                                    What Are You:
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Commercial
                                    IT Recycling LTD<br>
                                    Registered:
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Carrier
                                    / Broker<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dealer
                                    of Waste <br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TIER
                                    11 Exemption<br>
                                    Registration Number: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CBDU457511<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EXP/MP3646YY
                                </p>
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="padding: 0 0;">
                    <table border="1">
                        <tr align="center">
                            <th>SECTION D-THE TRANSFER</th>
                        </tr>
                        <tr>
                            <td>
                                <p>Transfer Address Or Collection Point:<br>
                                    Who Arranged the transfer: Commercial IT Recycling LTD <br>
                                    Registration number: CBDU457511
                                <div class="d-flex" style="justify-content: space-around;">
                                    <table style="width: 30%;">
                                        <th colspan="2">Data to be processed?</th>
                                        <tr align="center">
                                            <td>Yes</td>
                                            <td><input name="sec_d_check_yes" id="sec_d_check_yes" type="checkbox" id="check12"></td>
                                        </tr>
                                        <tr align="center">
                                            <td>No</td>
                                            <td><input name="sec_d_check_no" id="sec_d_check_no" type="checkbox" id="check11"></td>
                                        </tr>
                                    </table>
                                    <table style="width: 30%;">
                                        <tr align="center">
                                            <td>Data Wipe HMG level 1</td>
                                            <td><input name="sec_d_wipel1" id="sec_d_wipel1" type="checkbox" id="check12"></td>
                                        </tr>
                                        <tr align="center">
                                            <td>Data Wipe HMG level 3</td>
                                            <td><input name="sec_d_wipel3" id="sec_d_wipel3" type="checkbox" id="check11"></td>
                                        </tr>
                                        <tr align="center">
                                            <td>Crush (Charges May Apply)</td>
                                            <td><input name="sec_d_charges" id="sec_d_charges" type="checkbox" id="check11"></td>
                                        </tr>
                                    </table>
                                </div>
                                Email address for audit report (if required):
                                <input name="sec_d_email" id="sec_d_email" type="email" class="increase">
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6" style="padding-left: 0;">
                    <table class="table4" border="1">
                        <tr>
                            <td>
                                <p>Transferee's Signatures:<br><br>
                                <div class="mb-2 text-center">
                                    <canvas id="signature_pad_a" style="border: 2px solid gray;"></canvas>
                                </div>
                                <div class="mb-2 text-center">
                                    <button type="button" class="button-primary-outlined button-round" id="clearSignature_a">Clear</button>
                                </div>
                                </p><br>
                                <p>Name: <input name="signature_name_a" id="signature_name_a" type="text" class="increase"></p><br>
                                <p>Representing: <input name="signature_repesent_a" id="signature_repesent_a" type="text" class="increase"></p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6" style="padding-right: 0;">
                    <table class="table4" border="1">
                        <tr>
                            <td>
                                <p>Transferee's Signatures:<br><br>
                                <div class="mb-2 text-center">
                                    <canvas id="signature_pad_b" style="border: 2px solid gray;"></canvas>
                                </div>
                                <div class="mb-2 text-center">
                                    <button type="button" class="button-primary-outlined button-round" id="clearSignature_b">Clear</button>
                                </div>
                                </p><br>
                                <p>Name: <input name="signature_name_b" id="signature_name_b" type="text" class="increase"></p><br>
                                <p>Representing:<input name="signature_repesent_b" id="signature_repesent_b" type="text" class="increase"> </p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div><br>
            <input type="image" class="img-fluid" src="pdf_download.png" alt="PDF Download" id="printButton1">
        </form>
    </div>
    <script>
        "use strict";

        function DateAndTime() {
            var dt = new Date();
            // var MilliSec = dt.getMilliseconds();  + MilliSec + "MilliSec " (for milliseconds).

            //strings
            var days = [
                "Sunday",
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday"
            ];

            //strings
            var months = [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December"
            ];

            document.getElementById("date").innerHTML =
                days[dt.getDay()] +
                ", " +
                dt.getDate() +
                " " +
                months[dt.getMonth()] +
                ", " +
                dt.getFullYear();
        }

        new DateAndTime();
        setInterval("DateAndTime()", 1000);


        document.addEventListener('DOMContentLoaded', function() {
            var canvas = document.getElementById('signature_pad_a');
            var signaturePad = new SignaturePad(canvas, {
                backgroundColor: 'white',
                penColor: 'black',
            });

            // Clear the signature
            document.getElementById('clearSignature_a').addEventListener('click', function() {
                signaturePad.clear();
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            var canvas = document.getElementById('signature_pad_b');
            var signaturePad = new SignaturePad(canvas, {
                backgroundColor: 'white',
                penColor: 'black',
            });

            // Clear the signature
            document.getElementById('clearSignature_b').addEventListener('click', function() {
                signaturePad.clear();
            });
        });

        document.getElementById('pdfForm').addEventListener('submit', function(event) {
            event.preventDefault();

            let canvas_a = document.getElementById('signature_pad_a');
            let signatureImage_a = canvas_a.toDataURL();
            document.getElementById('signature_image_a').value = signatureImage_a;

            let canvas_b = document.getElementById('signature_pad_b');
            let signatureImage_b = canvas_b.toDataURL();
            document.getElementById('signature_image_b').value = signatureImage_b;
 
            var name = prompt('Enter your name:');

            if (name) {
                document.getElementById('file_name').value = name;
                event.target.submit();
            }
        });
    </script>
</body>

</html>