<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Send Email') }}
        </h2>
    </x-slot>
    <style>
        *,
        :before,
        :after {
            box-sizing: border-box;
        }

        html {
            font: 18px 'Helvetica Neue', sans-serif;
        }

        body {
            text-align: center;
            background-color: #fafafa;
        }

        #myCanvas {
            border: 4px solid #444;
            border-radius: 15px;
            background-color: #fafafa;
        }

        .container {
            margin: 150px auto;
        }

        .signature-component {
            text-align: left;
            display: inline-block;
            max-width: 100%;

            h1 {
                margin-bottom: 0;
            }

            h2 {
                margin: 0;
                font-size: 100%;
            }

            button {
                padding: 1em;
                background: transparent;
                box-shadow: 2px 2px 4px #777;
                margin-top: .5em;
                border: 1px solid #777;
                font-size: 1rem;

                &.toggle {
                    background: rgba(red, .2);
                }
            }

            canvas {
                display: block;
                position: relative;
                border: 1px solid;
            }

            img {
                position: absolute;
                left: 0;
                top: 0;
            }
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="row d-flex justify-content-end">
               
                    <div class="table-responsive-lg">
                        <div class="container">

                            <div>
                                <div class="head">
                                    <img src="./Computer_IT.png" alt="logo" style="width: 15%;" />
                                    <p>www.computeritdisposal.co.uk <span>HAZARDOUS WASTE CONSIGNMENT NOTE</span></p>
                                </div>
                            </div>


                            <table border="2" class="table1">
                                <tr align="center">
                                    <th class="color" colspan="5">PART A: Notification Details</th>
                                    <th colspan="4">1. Consignment Note Code OLE954 / 16118</th>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        <p>2. The waste described below is to be removed from:</p><br><br>
                                        <p>3. Premises code (If applicable _ _ _ _ _)</p><br>
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
                                    <td colspan="9">PART B: Description of the waste</td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="bdnone">1. The process giving rise to the waste(s) was:
                                    <td colspan="4" class="bdnone">2. SIC for the process giving rise to the waste:</td>
                                </tr>

                                <tr>
                                    <td class="bdnone">WASTE DETAILS:</td>
                                </tr>





                                <tr align="center">

                                    <td>Description</td>
                                    <td>EWC Code</td>
                                    <td>Quantity</td>
                                    <td>Approx Weight (kg)</td>
                                    <td>Total Weight(kg)</td>
                                    <td>Component</td>
                                    <td>Concentration</td>
                                    <td>Physical Form</td>
                                    <td>Hazard Code(s)</td>

                                </tr>
                                <tr align="center">
                                    <td>CRT Moniter / TV</td>
                                    <td>20:01:35</td>
                                    <td><input type="number"></td>
                                    <td><input type="number"></td>
                                    <td><input type="number"></td>
                                    <td>Lead</td>
                                    <td>(up to 2.2 kg)</td>
                                    <td>Solid</td>
                                    <td>H6</td>
                                </tr>
                                <tr align="center">
                                    <td class="lap border"><input type="checkbox" id="check1"><label for="check1">Laptop</label>
                                        <input type="checkbox" id="check2"><label for="check2">Tablet</label>
                                    </td>
                                    <td>20:01:35</td>
                                    <td><input type="number"></td>
                                    <td><input type="number"></td>
                                    <td><input type="number"></td>
                                    <td>Lead, Mercury</td>
                                    <td>Approx 0.5KG</td>
                                    <td>Solid</td>
                                    <td>H6</td>
                                </tr>
                                <tr align="center">
                                    <td>All in One PC</td>
                                    <td>20:01:35</td>
                                    <td><input type="number"></td>
                                    <td><input type="number"></td>
                                    <td><input type="number"></td>
                                    <td>Mercury</td>
                                    <td>Up to 2%</td>
                                    <td>Solid</td>
                                    <td>H6</td>
                                </tr>
                                <tr align="center">
                                    <td>LCD / TFT Monitor</td>
                                    <td>20:01:35</td>
                                    <td><input type="number"></td>
                                    <td><input type="number"></td>
                                    <td><input type="number"></td>
                                    <td>Mercury</td>
                                    <td>Up to 2%</td>
                                    <td>Solid</td>
                                    <td>H6</td>
                                </tr>
                                <tr align="center">
                                    <td>Batteries</td>
                                    <td>20:01:35</td>
                                    <td><input type="number"></td>
                                    <td><input type="number"></td>
                                    <td><input type="number"></td>

                                    <td>Approx 50%</td>
                                    <td>Solid</td>
                                    <td>H6</td>
                                </tr>
                                <tr align="center">
                                    <td>UPS Systems</td>
                                    <td>20:01:35</td>
                                    <td><input type="number"></td>
                                    <td><input type="number"></td>
                                    <td><input type="number"></td>
                                    <td>Mercury</td>
                                    <td>Up to 2%</td>
                                    <td>Solid</td>
                                    <td>H6</td>
                                </tr>
                                <tr align="center">
                                    <td>Misc</td>
                                    <td>20:01:35</td>
                                    <td><input type="number"></td>
                                    <td><input type="number"></td>
                                    <td><input type="number"></td>
                                    <td></td>
                                    <td></td>
                                    <td>Solid</td>
                                    <td>H6</td>
                                </tr>
                                <tr>
                                    <td colspan="2">All waste is contained loose in the vehicle</td>
                                    <td colspan="3">Total Weight KG =</td>
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
                                    <!-- </tr>
        <tr>
            <td colspan="All"></td>
        </tr> -->
                                <tr class="color">
                                    <td colspan="5">PART C-Carrier Certificate</td>
                                    <td colspan="4">PART D-Consignor's Certificate</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        <p>(If more than one carrier is used, please attach a schedule for subsequent
                                            carriers. If a schedule of carriers is attached tick here)<br>
                                            I certify that I today collected the consignment and that the details in A2, A4
                                            and B3 are correct & I have been advised of any specific handling
                                            requirements.<br><br>

                                            Where this note comprises part of a multiple collection the round number
                                            and collection number are:__________________/___________.<br><br>

                                            1. Carrier name:<br>
                                            commercial IT Recycling LTD<br>
                                            Unit 3, 3 Gibbons Street, Dunkirk Industrial estate, Nottingham, NG7 25B<br><br>
                                            2. Waste Carrier license: CBDU457511<br>
                                            3. Vehicle Registration number: DC 19 OOH<br>
                                            4. Carriers Signature<br>
                                            <br><br>
                                            Date: <input type="date" class="date"> Time: <input type="time" class="date">
                                        </p>
                                    </td>
                                    <td colspan="4">
                                        <p>I certify that the information in A, B & C has been completed and is correct, that<br>
                                            the carrier is registered or exempt and was advised of the appropriate<br>
                                            precautionary measures. All of the waste is packaged and labelled correctly and<br>
                                            the carrier has been advised of any special handling requirements.<br>
                                            I confirm that i have fulfilledmy duty to apply the waste hierarchy has required<br>
                                            by regulation 12 of the Waste (England and Wales) Regulations 2011.<br><br>

                                            Consignor name: <input type="text" class="date"><br>
                                            On behaif of (Organisation stated in Part A/1):<br><br><br>
                                            @include('signature')
                                            <br><br>
                                            Date: <input type="date" class="date">
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
                                    <td colspan="3"></td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr align="center">
                                    <td colspan="2">20:01:33</td>
                                    <td colspan="3"> </td>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>

                                </tr>
                                <tr>
                                    <td colspan="3" class="bdnone">
                                        <P>1. I RECEIVED WASTE AT THE ADDRESS GIVEN IN A4<br>
                                            2. VEHICLE REGISTRATION: DC 19 OOH<br>
                                            3. WHERE THE WASTE IS REJECTED, PLEASE PROVIDE DETAILS:
                                            Data to be processed?<br><br>
                                            <span class="checkboxs">
                                                <input type="checkbox" id="check1">
                                                <label for="check1">Yes</label>
                                                <input type="checkbox" id="check2">
                                                <label for="check2">No</label>
                                            </span>
                                        </P>
                                    </td>
                                    <td colspan="3" class="bdnone">
                                        <p>
                                            Name:<input type="text" class="date">
                                            <br><br>
                                            Signature: ............. ............. ............. <br><br>
                                            Date: <input type="date" class="date"><br>

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
                                        THE COLLECTION ARE:<input type="text" class="date">
                                    </td>
                                </tr>
                                </tr>

                            </table>




                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- add user modal start --}}
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="adduser" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="user-from" action="storeUser" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" id="bearer_token" value="{{session('bearer_token')}}">
                        <input type="hidden" name="password" id="password" value="12345678">
                        <input type="hidden" name="id" id="user_id" value="">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">User Name:</label>
                            <input type="text" name="name" class="form-control" id="user-name">
                            <label for="recipient-name" class="col-form-label">User Email:</label>
                            <input type="email" name="email" class="form-control" id="user-email">
                            <label for="recipient-name" class="col-form-label">Email Subject:</label>
                            <input type="text" name="subject" class="form-control" id="subject">
                            <label for="recipient-name" class="col-form-label">Email Body:</label>
                            <textarea name="body" class="form-control" id="body">  </textarea>
                            <label for="recipient-name" class="col-form-label">Email Files:</label>
                            <input type="file" name="file" class="border p-2 form-control" id="file" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                        <button type="submit" style="background-color:green;" class="btn btn-success" id="btn_save">Send Email</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- add user modal end --}}
    @include('apicall')
</x-app-layout>