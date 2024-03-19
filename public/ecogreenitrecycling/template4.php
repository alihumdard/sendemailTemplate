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
        table {
            margin: 0 0 1%;
        }

        #signature-pad4 {
            text-align: center;
        }

        #signature-pad3 {
            text-align: center;
        }
    </style>

</head>

<body>

    <div class="container">
        <form action="/api/generatepdf" id="pdfForm" method="post">
            <input type="hidden" name="signature_image_1" id="signature_image_signature3" value="">
            <input type="hidden" name="signature_image_2" id="signature_image_signature4" value="">
            <input type="hidden" name="signature_image_3" id="signature_image_signature5" value="">
            <input type="hidden" name="file_name" id="file_name2" value="">
            <input type="hidden" name="view_name" id="view_name" value="ecogreenitrecycling_Pdf.template4">
            <div class="row">
                <div class="col-md-4 d-flex logu">
                    <img src="./ecogreen.webp" class="container logo" alt="logo">
                    <p>www.computeritdisposals.co.uk</p>
                </div>
                <div class="col-md-4 d-flex">
                    <h2><strong>Hazardous waste consignment note</strong></h2>
                </div>
                <div class="col-md-4 d-flex">
                    <p><strong><br>
                            Ref: <input name="ref_no" id="ref_no" type="text">
                        </strong></p>
                </div>
            </div>
            <div class="row table-responsive">
                <table border="2" class="table1">
                    <tr align="center">
                        <th class="color" colspan="5">PART A: Notification Details</th>
                        <th colspan="4">1. Consignment Note Code OLE954 / 16118</th>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <p>2. The waste described below is to be removed from:</p>
                            <textarea name="waste_contained" id="waste_contained" type="text" class=" form-control date"></textarea><br>
                            <p>3. Premises code (If applicable _ _ _ _ _)</p>
                            <input name="prem_code" id="prem_code" type="code" class=" form-control date"><br><br>
                        </td>

                        <td colspan="4" align="center">
                            <p>4. The waste will be taken to:</p><br>
                            Commercial IT Recycling LTD<br>
                            Unit 3,3 Gibbons Street Dunkirk Industrial estate, Nottingham, NG7 2SB
                            <p><br>5. The waste producer was (If different from 2.)<br><br>
                                AS A2
                            </p>

                        </td>
                    </tr>
                    <tr class="color" align="center">
                        <td colspan="9"><b>PART B: Description of the waste</b></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="bdnone">1. The process giving rise to the waste(s) was: </td>
                        <td colspan="4" class="bdnone">2. SIC for the process giving rise to the waste:</td>
                    </tr>

                    <tr>
                        <td class="bdnone">WASTE DETAILS:</td>
                    </tr>
                    <tr align="center">

                        <td>
                            <h6>Description</h6>
                        </td>
                        <td>
                            <h6>EWC Code</h6>
                        </td>
                        <td>
                            <h6>Quantity</h6>
                        </td>
                        <td>
                            <h6>Approx Weight (kg)</h6>
                        </td>
                        <td>
                            <h6>Total Weight(kg)</h6>
                        </td>
                        <td>
                            <h6>Component</h6>
                        </td>
                        <td>
                            <h6>Concentration</h6>
                        </td>
                        <td>
                            <h6>Physical Form</h6>
                        </td>
                        <td>
                            <h6>Hazard Code(s)</h6>
                        </td>

                    </tr>
                    <tr align="center">
                        <td>CRT Moniter / TV</td>
                        <td>20:01:35</td>
                        <td><input name="qty_row1" id="qty_row1" type="number"></td>
                        <td><input name="aprox_weight_r1" id="aprox_weight_r1" type="number"></td>
                        <td><input name="total_weight_r1" id="total_weight_r1" type="number"></td>
                        <td>Lead</td>
                        <td>(up to 2.2 kg)</td>
                        <td>Solid</td>
                        <td>H6</td>
                    </tr>
                    <tr align="center">
                        <td class="lap border">
                            <input type="checkbox" name="td_check_yes" id="td_check_yes">
                            <label for="check1">Laptop</label><br>
                            <input type="checkbox" name="td_check_no" id="td_check_no"><label for="check2">Tablet</label>
                        </td>
                        <td>20:01:35</td>
                        <td><input name="qty_row2" id="qty_row2" type="number"></td>
                        <td><input name="aprox_weight_r2" id="aprox_weight_r2" type="number"></td>
                        <td><input name="total_weight_r2" id="total_weight_r2" type="number"></td>
                        <td>Lead, Mercury</td>
                        <td>Approx 0.5KG</td>
                        <td>Solid</td>
                        <td>H6</td>
                    </tr>
                    <tr align="center">
                        <td>All in One PC</td>
                        <td>20:01:35</td>
                        <td><input name="qty_row3" id="qty_row3" type="number"></td>
                        <td><input name="aprox_weight_r3" id="aprox_weight_r3" type="number"></td>
                        <td><input name="total_weight_r3" id="total_weight_r3" type="number"></td>
                        <td>Mercury</td>
                        <td>Up to 2%</td>
                        <td>Solid</td>
                        <td>H6</td>
                    </tr>
                    <tr align="center">
                        <td>LCD / TFT Monitor</td>
                        <td>20:01:35</td>
                        <td><input name="qty_row4" id="qty_row4" type="number"></td>
                        <td><input name="aprox_weight_r4" id="aprox_weight_r4" type="number"></td>
                        <td><input name="total_weight_r4" id="total_weight_r4" type="number"></td>
                        <td>Mercury</td>
                        <td>Up to 2%</td>
                        <td>Solid</td>
                        <td>H6</td>
                    </tr>
                    <tr align="center">
                        <td>Batteries</td>
                        <td>20:01:35</td>
                        <td><input name="qty_row5" id="qty_row5" type="number"></td>
                        <td><input name="aprox_weight_r5" id="aprox_weight_r5" type="number"></td>
                        <td><input name="total_weight_r5" id="total_weight_r5" type="number"></td>
                        <td>Mercury</td>
                        <td>Approx 50%</td>
                        <td>Solid</td>
                        <td>H6</td>
                    </tr>
                    <tr align="center">
                        <td>UPS Systems</td>
                        <td>20:01:35</td>
                        <td><input name="qty_row6" id="qty_row6" type="number"></td>
                        <td><input name="aprox_weight_r6" id="aprox_weight_r6" type="number"></td>
                        <td><input name="total_weight_r6" id="total_weight_r6" type="number"></td>
                        <td>Mercury</td>
                        <td>Up to 2%</td>
                        <td>Solid</td>
                        <td>H6</td>
                    </tr>
                    <tr align="center">
                        <td>Misc</td>
                        <td>20:01:35</td>
                        <td><input name="qty_row7" id="qty_row7" type="number"></td>
                        <td><input name="aprox_weight_r7" id="aprox_weight_r7" type="number"></td>
                        <td><input name="total_weight_r7" id="total_weight_r7" type="number"></td>
                        <td></td>
                        <td></td>
                        <td>Solid</td>
                        <td>H6</td>
                    </tr>
                    <tr>
                        <td colspan="2">All waste is contained loose in the vehicle</td>
                        <td colspan="3">Total Weight KG =<input name="weight_kg" id="weight_kg" type="number" class="date"></td>
                        <td colspan="4">None of the waste is dangerous for carriage</td>
                    </tr>
                    <tr>
                        <td colspan="5" class="bdnone">The information below is to be completed for each EWC identified</td>
                        <td colspan="2" align="center" class="bdnone">Packaging</td>
                        <td colspan="2" align="center" class="bdnone">Special</td>
                    </tr>
                    <tr align="center">
                        <td class="bdnone">EWC Code</td>
                        <td colspan="2" class="bdnone">UN identification number(s)</td>
                        <td colspan="3" class="bdnone">Proper Shipping name(s)</td>
                        <td class="bdnone">UN class(s)</td>
                        <td class="bdnone">group(s)</td>
                        <td class="bdnone">requirements</td>
                </table>
                <br>
            </div>
            <div class="row table-responsive">
                <table border="2" class="table1">
                    <tr class="color">
                        <td colspan="5" align="center"><b>PART C-Carrier Certificate</b></td>
                        <td colspan="4" align="center"><b>PART D-Consignor's Certificate</b></td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <p>(If more than one carrier is used, please attach a schedule for subsequent
                                carriers. If a schedule of carriers is attached tick here)<input name="p_check" id="p_check" type="checkbox" id="check1"><br>
                                I certify that I today collected the consignment and that the details in A2, A4
                                and B3 are correct & I have been advised of any specific handling
                                requirements.<br><br>

                                Where this note comprises part of a multiple collection the round number
                                and collection number are:<input class="form-control" name="round_no" id="round_no" type="text" class="date"><br><br>

                                1. Carrier name:<br>
                                commercial IT Recycling LTD<br>
                                Unit 3, 3 Gibbons Street, Dunkirk Industrial estate, Nottingham, NG7 25B<br><br>
                                2. Waste Carrier license: CBDU457511<br>
                                3. Vehicle Registration number: DC 19 OOH<br>
                                4. Carriers Signature<br>
                            <div id="signature-pad3" class="mb-2 text-center">
                                <canvas id="driver_signature3" style="border: 2px solid gray;"></canvas>
                            </div>
                            <div id="signature-pad3" class="mb-2 text-center">
                                <button class="button-primary-outlined button-round" id="clearSignature3">Clear</button>
                            </div>
                            </p><br>
                            Date: <input name="date_a" id="date_a" type="date" class="date"> Time: <input name="time_a" id="time_a" type="time" class="date">
                            </p>
                        </td>
                        <td colspan="4">
                            <p>I certify that the information in A, B & C has been completed and is correct, that<br>
                                the carrier is registered or exempt and was advised of the appropriate<br>
                                precautionary measures. All of the waste is packaged and labelled correctly and<br>
                                the carrier has been advised of any special handling requirements.<br>
                                I confirm that i have fulfilledmy duty to apply the waste hierarchy has required<br>
                                by regulation 12 of the Waste (England and Wales) Regulations 2011.<br><br>

                                Consignor name: <input name="cons_name" id="cons_name" type="text" class="form-control date"><br>
                                On behaif of (Organisation stated in Part A/1):<br><br><br>
                            <div id="signature-pad4" class="mb-2 text-center">
                                <canvas id="driver_signature4" style="border: 2px solid gray;"></canvas>
                            </div>
                            <div id="signature-pad4" class="mb-2 text-center">
                                <button class="button-primary-outlined button-round" id="clearSignature4">Clear</button>
                            </div>
                            </p><br>
                            Date: <input name="date_b" id="date_b" type="date" class="date">
                            </p>
                        </td>

                    </tr>
                    <tr>
                        <td colspan="9" class="color">PART E - Consignee's certificate (where more than one waste type is
                            collected all of the information given below must be completed for each EWC)</td>
                    </tr>

                    <tr align="center">
                        <td colspan="2">EWC Code(s) Received</td>
                        <td colspan="3">Quantity of each EWC code Received (KG)</td>
                        <td colspan="2">Accepted / Rejected</td>
                        <td colspan="3">Waste Operation (R or D code)</td>
                    </tr>
                    <tr align="center">
                        <td colspan="2">20:01:35</td>
                        <td colspan="3"><input name="ewc_qty_r1" id="EWC_qty_r1" type="text" class="increase"></td>
                        <td colspan="2"><input name="acept_rej_r1" id="acept_rej_r1" type="text" class="increase"></td>
                        <td colspan="2"><input name="waste_code_r1" id="waste_code_r1" type="text" class="increase"></td>
                    </tr>
                    <tr align="center">
                        <td colspan="2">20:01:33</td>
                        <td colspan="3"><input name="ewc_qty_r2" id="EWC_qty_r2" type="text" class="increase"></td>
                        <td colspan="2"><input name="acept_rej_r2" id="acept_rej_r2" type="text" class="increase"></td>
                        <td colspan="2"><input name="waste_code_r2" id="waste_code_r2" type="text" class="increase"></td>

                    </tr>
                </table><br>
            </div>
            <div class="row table-responsive">
                <table border="2" class="table1">
                    <tr>
                        <td colspan="3" class="bdnone">
                            <P>1. I RECEIVED WASTE AT THE ADDRESS GIVEN IN A4<br>
                                2. VEHICLE REGISTRATION: DC 19 OOH<br>
                                3. WHERE THE WASTE IS REJECTED, PLEASE PROVIDE DETAILS:
                                Data to be processed?<br><br>
                                <span class="checkboxs">
                                    <label for="check1">Yes <input name="check_yes" id="check_yes" type="checkbox" id="check1"></label>
                                </span>
                                <span class="checkboxs">
                                    <label for="check2">No <input name="check_no" id="check_no" type="checkbox" id="check2"></label>
                                </span>
                            </P>
                        </td>
                        <td colspan="3" class="bdnone">
                            <p>
                                Name:<input name="name" id="name" type="text" class="increase">
                                <br>
                            <div id="signature-pad5" class="mb-2 text-center">
                                <canvas id="driver_signature5" style="border: 2px solid gray;"></canvas>
                            </div>
                            <div id="signature-pad5" class="mb-2 text-center">
                                <button class="button-primary-outlined button-round" id="clearSignature5">Clear</button>
                            </div>
                            </p><br>
                            Date: <input name="date_c" id="date_c" type="date" class="date"><br>

                            </p>
                        </td>
                        <td colspan="3" class="bdnone">
                            <p>
                                Commercial IT Recycling LTD<br>
                                Unit 3,3 Gibbons Street<br>
                                Dunkirk Industrial estate<br>
                                Nottingham<br>
                                NG7 2SB<br>
                            </p>
                        </td>
                    <tr>
                        <td colspan="9" class="bdnone">I CERTIFY THAT WASTE PERMIT / EXEMPT WASTE OPERATION NUMBER:
                            EXP/MP3646YY AUTHORISES THE MANAGEMENT OF THE WASTE DESCRIBED<br>
                            IN B AT THE ADDRESS GIVEN IN A4 WHERE THE CONSIGNMENT FORMS PART OF A MULTIPLE CONNECTIONS, AS
                            IDENTIFIED IN PART C.<br>
                            <br><br>
                            THE COLLECTION ARE:<input name="collection" id="collection" type="text" class="form-control increase">
                        </td>
                    </tr>
                    </tr>

                </table><br>
            </div>
            <input type="image" class="img-fluid" src="pdf_download.png" alt="PDF Download" id="printButton1">
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var canvas = document.getElementById('driver_signature3');
            var signaturePad = new SignaturePad(canvas, {
                backgroundColor: 'white',
                penColor: 'black',
            });

            // Clear the signature
            document.getElementById('clearSignature3').addEventListener('click', function() {
                signaturePad.clear();
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            var canvas = document.getElementById('driver_signature4');
            var signaturePad = new SignaturePad(canvas, {
                backgroundColor: 'white',
                penColor: 'black',
            });

            // Clear the signature
            document.getElementById('clearSignature4').addEventListener('click', function() {
                signaturePad.clear();
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            var canvas = document.getElementById('driver_signature5');
            var signaturePad = new SignaturePad(canvas, {
                backgroundColor: 'white',
                penColor: 'black',
            });

            // Clear the signature
            document.getElementById('clearSignature5').addEventListener('click', function() {
                signaturePad.clear();
            });
        });

        document.getElementById('pdfForm').addEventListener('submit', function(event) {
            event.preventDefault();

            let canvas_singature1 = document.getElementById('driver_signature3');
            let signatureImage_1 = canvas_singature1.toDataURL();
            document.getElementById('signature_image_signature3').value = signatureImage_1;

            let canvas_singature2 = document.getElementById('driver_signature4');
            let signatureImage_2 = canvas_singature2.toDataURL();
            document.getElementById('signature_image_signature4').value = signatureImage_2;


            let canvas_singature3 = document.getElementById('driver_signature5');
            let signatureImage_3 = canvas_singature3.toDataURL();
            document.getElementById('signature_image_signature5').value = signatureImage_3;

            let name = prompt('Enter your name:');
            if (name) {
                document.getElementById('file_name2').value = name;
                event.target.submit();
            }
        });
    </script>
</body>

</html>