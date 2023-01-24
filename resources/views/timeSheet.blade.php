<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="{{ asset('styles/dom-pdf.css') }}" rel="stylesheet" />
    <link href="{{ asset('styles/portable.css') }}" rel="stylesheet" />
</head>

<body class="font-inter-400 ">
    <table style="width:100%;">
        <tr>
            <td style="width:25%;" class="cell-padding">
                <img src="{{ asset('image/brand-logo-night.png') }}" alt="Brand Logo" style="height: 40px; margin-top: -2px;" />
                <span class="font-inter-700 text-12  uppercase " style="display: block; text-align: center; background-color: lightgray; padding-bottom:2px; margin-top: 10px; margin-bottom: 8px;">Time Shit</span>
                <span class="font-inter-600 text-14" style="display: block; text-align: center; color: gray; margin-top: -2px;">01-11-2023</span>
                <span class="font-inter-400 text-14" style="display: block; text-align: center; color: lightgray; margin-top: -5px;">MM-DD-YYYY</span>
            </td>
            <td style="width:50%;" class="cell-padding">
                <span class="font-inter-500 text-12" style=" display: block;">Client Last Name, First Name (Print Neatly)</span>
                <span class="font-inter-400 border-1  uppercase text-11" style="display: block; margin-top: 3px;">uhler, ethel</span>
                <span class="font-inter-500 text-12" style=" display: block;">Client Address:</span>
                <span class="font-inter-400 border-1  uppercase text-11" style="display: block; margin-top: 3px;">1290 ALLENTOWN RD</span>
                <span class="font-inter-500 text-12" style=" display: block;">Staff Last Name, First Name (PRINT NEATLY) </span>
                <span class="font-inter-400 border-1  uppercase text-11" style="display: block; margin-top: 3px;">VIRGINIA, WAMPOLE</span>
            </td>
            <td style="width:25%; padding-left: 0; padding-right: 0;" class="cell-padding">
                <span class="font-inter-700 text-12  uppercase " style="display: block; margin-left: 10px; margin-right: 10px; text-align: center; background-color: lightgray; padding-bottom:2px; margin-top: 6px; margin-bottom: 6px;">Office Time</span>
                <span class="font-inter-500 text-12" style=" display: block; margin-left: 10px; margin-right: 10px; ">Client ID:</span>
                <span style="display: block; border-bottom: 1px solid black; padding-bottom: 8px;">
                    <span class="font-inter-400 border-1  uppercase text-11" style="display: block; margin-left: 10px; margin-right: 10px;  margin-top: 3px;">201149477</span>
                </span>
                <span class="font-inter-500 text-12" style=" display: block; margin-left: 10px; margin-right: 10px; margin-top: 2px;">Staff Assignment ID:</span>
                <span class="font-inter-400 border-1  uppercase text-11" style="display: block; margin-left: 10px; margin-right: 10px;  margin-top: 3px;">100015</span>
            </td>
        </tr>
    </table>
    <table style="width: 80%; margin: 14px auto;">
        <thead>
            <tr style="background-color: lightgray;">
                <th class="text-12 font-inter-600" style="padding: 4px;">DATE</th>
                <th class="text-12 font-inter-600" style="padding: 4px;">IN</th>
                <th class="text-12 font-inter-600" style="padding: 4px;">OUT</th>
                <th class="text-12 font-inter-600" style="padding: 4px;">TOTAl HOURS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-12" style="text-align: center; padding: 10px;">01-11-2023</td>
                <td class="text-12" style="text-align: center; padding: 10px;">08:00 AM</td>
                <td class="text-12" style="text-align: center; padding: 10px;">02:00 PM</td>
                <td class="text-12" style="text-align: center; padding: 10px;">06</td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%;">
        <tbody>
            <tr>
                <td colspan="2" class="text-11 " style=" padding: 2px 10px 4px 10px; line-height: 12px;">I, the below signee, confirm and verify the Galaxy Home Care staff has worked the hours shown above and the activities marked were performed on the day indicated</td>
            </tr>
            <tr>
                <td class="text-12 font-inter-700 uppercase" style="width: 35%; padding: 0 10 2px 10px;">Client Signature</td>
                <td style="width: 65%; padding: 0 10 2px 10px;"><img src="{{ asset('image/signature.png')}}" style="height: 40px;" alt=""> </td>
            </tr>
            <tr>
                <td colspan="2" class="text-11" style=" padding: 2px 10px 4px 10px; line-height: 12px;">
                    I certify that the documented during the visit hours shown above represent hours worked, and they were
                    properly confirmed by the client or an authorized representative. Travel time, breaks and lunches were taken
                    and recorded in a log which must be provided to my employer for processing. If I choose not to provide the
                    log. I'll be paid for travel time, breaks and lunches in accordance with coordinated schedule and employer
                    policies.
                </td>
            </tr>
            <tr>
                <td class="text-12 font-inter-700 uppercase" style="width: 35%; padding: 0 10 2px 10px;">AGENCY STAFF (HHA) SIGNATURE</td>
                <td style="width: 65%; padding: 0 10 2px 10px;"><img src="{{ asset('image/signature.png')}}" style="height: 40px;" alt=""> </td>
            </tr>
        </tbody>
    </table>
    @php
    $iteratePOC = json_decode(\Illuminate\Support\Facades\File::get(base_path() . '/private/proof-of-concept.json'));
    $timeSheets = array_chunk($iteratePOC, round(count($iteratePOC) / 2));
    @endphp
    <h5 class="font-inter-700 text-12 uppercase " style="margin-top:14px; text-align: center; background-color: lightgray; padding-bottom:2px;">TimeSheet Instruction</h5>
    <p class="text-11 " style="text-align: center; margin-top: -15px;">Time sheets must be completed during the visit hours and signed by client for each visit.</p>
    <h5 class="font-inter-500 text-12" style="margin-top:0px; line-height: 10px;">
        <span style="border-bottom:1px solid black; padding-bottom: 3px;">Instructions to Install HHA eXchange App for Clock IN & OUT</span>
    </h5>
    <table class="text-11" style="width: 100%; border: none; margin-top: -12px;">
        <tbody>
            <tr>
                <td class="font-inter-500" style="width: 8%; border: none;">Step 01:</td>
                <td style=" border: none;"> Please go to Apps Store then search for "HHAeXchange" and Install the App.</td>
            </tr>
            <tr>
                <td class="font-inter-500" style="width: 8%; border: none; padding-bottom: 17px;">Step 02:</td>
                <td style=" border: none;">
                    <p style="margin-top: -0px;">After installing the app, you need to Sign Up</p>
                    <p style="margin-top: -12px; height: 6px;"><span class="font-inter-500">N.B.:</span> If you need more information follow the below video link: <span style="color: blue;">https://www.youtube.com/watch?v=P44VDhwPupg</span></p>
                </td>
            </tr>
            <tr>
                <td class="font-inter-500 " style="width: 8%; border: none; padding-bottom: 17px;">Step 03:</td>
                <td style=" border: none;">After creating Login Information, please update your Profile in HHAeXchange. You need to click the top right corner 3 dots sign to update your profile.</td>
            </tr>
            <tr>
                <td class="font-inter-500" style="width: 8%; border: none; padding-bottom: 17px;">Step 04:</td>
                <td style=" border: none;">Make sure all information is correct. After putting in all the information you will get the Mobile ID number,please take a Screenshot and send it to me to connect you to our Agency.</td>
            </tr>
        </tbody>
    </table>
    <h5 class="font-inter-500 text-12" style="margin-top:10px; line-height: 10px;">
        <span style="border-bottom:1px solid black; padding-bottom: 3px;">How to Clock IN & OUT using Client Phone</span>
    </h5>
    <table class="text-11" style="width: 100%; border: none; margin-top: -10px;">
        <tbody>
            <tr>
                <td class="font-inter-500" style="width: 8%; border: none;">Step 01:</td>
                <td style=" border: none;">You need to Dial# 833-369-1211 from the Client's Phone</td>
            </tr>
            <tr>
                <td class="font-inter-500" style="width: 8%; border: none;">Step 02:</td>
                <td style=" border: none;">Press 1 for Clock IN and Press 2 for Clock OUT</td>
            </tr>
            <tr>
                <td class="font-inter-500 " style="width: 8%; border: none; ">Step 03:</td>
                <td style=" border: none;">You need to put your Assignment ID which is</td>
            </tr>
            <tr>
                <td class="font-inter-500" style="width: 8%; border: none; ">Step 04:</td>
                <td style="border: none;">You need to put at least 4 Duty IDs while you will Clock OUT which are as below</td>
            </tr>
            <tr style="line-height: 12px;">
                <td style="border: none;"></td>
                <td style=" border: none;">
                    <span class="font-inter-500">Duty ID's:</span> 115, 116, 118, 119, 120, 123, 124, 126, 127, 128, 134, 137, 138, 139, 140, 204, 205, 206, 209, 212, 213, 214, 215, 216, 221, 222, 223, 224, 229, 231, 243, 245, 247, 252
                </td>
            </tr>
            <tr>
                <td class="font-inter-500" style="width: 8%; border: none; ">Step 05:</td>
                <td style=" border: none;"> After putting duty IDs, you need to Press “000” to end the Call.</td>
            </tr>
        </tbody>
    </table>
    <h5 class="font-inter-500 text-12" style="margin-top:10px; line-height: 10px;">
        <span style="border-bottom:1px solid black; padding-bottom: 3px;">How to Clock IN & OUT using Mobile App:</span>
    </h5>
    <p class="font-inter-400 text-11" style="line-height: 4px; color: blue;"><span class="font-inter-500" style="width: 8%; display: inline-block; color: black;">Tutorial:</span>https://youtu.be/oLOkNj8_hds</p>
    <!--   footer start-->
    <div>
        <div style="margin: 0 auto; text-align: center; margin-top: 42px;">
            <img src="{{ asset('image/brand-logo-night.png') }}" alt="Brand Logo" style="height: 40px;  " />
        </div>
        <p class="text-11" style="line-height: 12px; text-align: center; border-top: 1px solid black; padding-top: 8px;">
            101 Coventry Cir, Lansdale, PA 19446-6400 □ Phone: +1 (215) 588-5068 □ Fax: +1 (215) 565-0733 <br>
            □ Email: info@galaxyhomecarellc.com
        </p>
    </div>
    <!-- footer end -->
    <table style="width: 100%; border: none;">
        <tbody style="width: 100%;">
            <tr style="width: 100%;">
                @foreach ($timeSheets as $timeSheet)
                <td style="width: 48%; border: none; padding-right: 10px;" class="table">
                    <table style="width: 100%; ">
                        <thead style="background-color: lightgray;">
                            <tr>
                                <th class="font-inter-700 text-11" style="width: 15%;  padding-bottom:2px; ">ID</th>
                                <th class="font-inter-700 text-11" style="width: 60%; text-align:left; padding-left:10px; padding-bottom:2px; ">Performed</th>
                                <th class="font-inter-700 text-11" style="width: 15%;  padding-bottom:2px; ">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($timeSheet as $i => $each)
                            <tr>
                                <td class="font-inter-500 text-10" style="  text-align:center; padding-bottom:2px; line-height: 10px;">{{ $each->code }}</td>
                                <td class="font-inter-500 text-10" style=" padding-left:10px; padding-bottom:2px;  line-height: 10px;">{{ $each->name }}</td>
                                <td class="font-inter-400 text-12" style="text-align:center;  padding-top:2px; line-height: 10px;">
                                    <input type="checkbox" checked style="">
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </td>
                @endforeach
            </tr>
        </tbody>
    </table>
    <ol class="text-11" style="margin-top: 8px;">
        <li>We will not accept any progress note that does not match the care plan in the client's home.</li>
        <li>imes and activities must be completed on each shift. Report any changes or Observations to supervisor and document changes and conversations with supervisor in the comments area.</li>
        <li>Do not do anything that is not in client's care plan.</li>
    </ol>
    <h5 class="font-inter-700 text-12 uppercase" style="margin-top:14px; text-align: center; background-color: lightgray; padding-bottom:2px;">Work Schedule</h5>
    <table style="margin: 0 auto;">
        <thead>
            <tr style="background-color: lightgray;">
                <th class="font-inter-700 text-11" style="padding:0px 10px 2px 10px; text-align: left;">Day</th>
                <th class="font-inter-700 text-11" style="padding:0px 10px 2px 10px;">Time</th>
                <th class="font-inter-700 text-11" style="padding:0px 10px 2px 10px;">AM/PM</th>
                <th class="font-inter-700 text-11" style="padding:0px 10px 2px 10px;">To</th>
                <th class="font-inter-700 text-11" style="padding:0px 10px 2px 10px;">Time</th>
                <th class="font-inter-700 text-11" style="padding:0px 10px 2px 10px;">AM/PM</th>
            </tr>
        </thead>
        @foreach (['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'] as $day)
        <tr>
            <td class="font-inter-500 text-11" style="padding:0px 10px 2px 10px; line-height: 10px;">{{$day}}</td>
            <td class="font-inter-500 text-11" style="padding:0px 10px 2px 10px; line-height: 10px;"></td>
            <td class="font-inter-500 text-11" style="padding:0px 10px 2px 10px; line-height: 10px;"></td>
            <td class="font-inter-500 text-11" style="padding:0px 10px 2px 10px; line-height: 10px;"></td>
            <td class="font-inter-500 text-11" style="padding:0px 10px 2px 10px; line-height: 10px;"></td>
            <td class="font-inter-500 text-11" style="padding:0px 10px 2px 10px; line-height: 10px;"></td>
        </tr>
        @endforeach
    </table>
    <p class="font-inter-400 text-11"><span class="font-inter-500">NOTE:</span> This time sheet requires signatures from the client for each day of your visit. Please have them sign at the end of your visit. Agency IVR/EVV Number: <span class="font-inter-500">1-833-369-1211</span></p>
    <!--   footer start-->
    <div>
        <div style="margin: 0 auto; text-align: center; margin-top: 93px;">
            <img src="{{ asset('image/brand-logo-night.png') }}" alt="Brand Logo" style="height: 40px;  " />
        </div>
        <p class="text-11" style="line-height: 12px; text-align: center; border-top: 1px solid black; padding-top: 8px;">
            101 Coventry Cir, Lansdale, PA 19446-6400 □ Phone: +1 (215) 588-5068 □ Fax: +1 (215) 565-0733 <br>
            □ Email: info@galaxyhomecarellc.com
        </p>
    </div>
    <!-- footer end -->
</body>

</html>