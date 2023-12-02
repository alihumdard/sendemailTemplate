<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    <link rel="stylesheet" type="text/css" href="./second.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        }
    </style>

</head>

<body>

    <div class="container">
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
                        Ref: <input type="text">
                    </strong></p>
            </div>
        </div>
<div class="row">
        <table border="1" cellspacing="0">
            <tr>
                <th colspan="3" class="bdnone"> SECTION A-DESCRIPTION OF WASTE</th>

                <th colspan="2" class="bdnone datealign"><p id="date"></p></th>
            </tr>
            <tr>
                <td colspan="5">A1: How is the waste contained:
                    (loose,skip,sacks,container)
                    <input type="text" class="increase"><br><br>
                    A2: How much Waste (items and weight):
                    <input type="text" class="increase"><br><br>
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
                <td><input type="number"></td>
                <td><input type="number"></td>
                <td><input type="number"></td>
                <td><input type="number"></td>
            </tr>
            <tr align="center">
                <td>PHOTOCOPER</td>
                <td><input type="number"></td>
                <td><input type="number"></td>
                <td><input type="number"></td>
                <td><input type="number"></td>
            </tr>
            <tr align="center">
                <td>SERVER</td>
                <td><input type="number"></td>
                <td><input type="number"></td>
                <td><input type="number"></td>
                <td><input type="number"></td>
            </tr>
            <tr align="center">
                <td>PRINTER</td>
                <td><input type="number"></td>
                <td><input type="number"></td>
                <td><input type="number"></td>
                <td><input type="number"></td>
            </tr>
            <tr align="center">
                <td>DATA CARRYING MEDIA</td>
                <td><input type="number"></td>
                <td><input type="number"></td>
                <td><input type="number"></td>
                <td><input type="number"></td>
            </tr>
            <tr align="center">
                <td>KEYBOARD</td>
                <td><input type="number"></td>
                <td><input type="number"></td>
                <td><input type="number"></td>
                <td><input type="number"></td>
            </tr>
            <tr align="center">
                <td>INK / TONER CARTRIDGES</td>
                <td><input type="number"></td>
                <td><input type="number"></td>
                <td><input type="number"></td>
                <td><input type="number"></td>
            </tr>
            <tr align="center">
                <td>MOBILE PHONE</td>
                <td><input type="number"></td>
                <td><input type="number"></td>
                <td><input type="number"></td>
                <td><input type="number"></td>
            </tr>
            <tr align="center">
                <td>MISCELLANEOUS</td>
                <td><input type="number"></td>
                <td><input type="number"></td>
                <td><input type="number"></td>
                <td><input type="number"></td>
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
                                <input type="checkbox" id="check">
                                <label for="check">Yes</label>
                            </p><br>
                            Full Name: <input type="text" class="increase"><br><br>
                            Company Name & Address: <input type="text" class="increase"><br><br>
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
                            <p>Full Name: <input type="text" class="increase"><br><br>

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
                                    <tr align="center"><td>Yes</td><td><input type="checkbox" id="check12"></td></tr>
                                    <tr align="center"><td>No</td><td><input type="checkbox" id="check11"></td></tr>
                                </table>
                                <table style="width: 30%;">
                                    <tr align="center"><td>Data Wipe HMG level 1</td><td><input type="checkbox" id="check12"></td></tr>
                                    <tr align="center"><td>Data Wipe HMG level 3</td><td><input type="checkbox" id="check11"></td></tr>
                                    <tr align="center"><td>Crush (Charges May Apply)</td><td><input type="checkbox" id="check11"></td></tr>
                                </table></div>
                                Email address for audit report (if required):
                                    <input type="text" class="increase">
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
                                <style>
                                    #signature-pad {
                                        text-align: center;
                                    }
                                </style>
                            <div id="signature-pad" class="mb-2 text-center">
                                <canvas id="driver_signature" style="border: 2px solid gray;"></canvas>
                            </div>
                            <div id="signature-pad" class="mb-2 text-center">
                            <button class="button-primary-outlined button-round" id="clearSignature">Clear</button>
                            </div>                            

                            <script src="https://unpkg.com/signature_pad"></script>
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    var canvas = document.getElementById('driver_signature');
                                    var signaturePad = new SignaturePad(canvas, {
                                        backgroundColor: 'white',
                                        penColor: 'black',
                                    });

                                    // Clear the signature
                                    document.getElementById('clearSignature').addEventListener('click', function() {
                                        signaturePad.clear();
                                    });
                                });
                            </script>
                            </p><br>
                            <p>Name: <input type="text" class="increase"></p><br>
                            <p>Representing: <input type="text" class="increase"></p>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6" style="padding-right: 0;">
            <table class="table4" border="1">
                    <tr>
                        <td>
                            <p>Transferee's Signatures:<br><br>
                            <style>
                                    #signature-pad {
                                        text-align: center;
                                    }
                                </style>
                            <div id="signature-pad2" class="mb-2 text-center">
                                <canvas id="driver_signature2" style="border: 2px solid gray;"></canvas>
                            </div>
                            <div id="signature-pad2" class="mb-2 text-center">
                                <button class="button-primary-outlined button-round" id="clearSignature2">Clear</button>
                            </div>
                            
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    var canvas = document.getElementById('driver_signature2');
                                    var signaturePad = new SignaturePad(canvas, {
                                        backgroundColor: 'white',
                                        penColor: 'black',
                                    });

                                    // Clear the signature
                                    document.getElementById('clearSignature2').addEventListener('click', function() {
                                        signaturePad.clear();
                                    });
                                });
                            </script>
                            </p><br>
                            <p>Name: <input type="text" class="increase"></p><br>
                            <p>Representing:<input type="text" class="increase"> </p>
                        </td>
                    </tr>
                </table>
            </div>
        </div><br>
    </div>

    <img src="pdf_download.png" alt="PDF Download" id="printButton1">

    <script>
        document.getElementById("printButton1").addEventListener("click", function() {
            // Open the print dialog
            window.print();
        });
    </script>
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

    </script>

</body>

</html>