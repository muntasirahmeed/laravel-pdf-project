<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="{{ asset('styles/dom-pdf.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="text-center">
        <img src="{{ asset('image/brand-logo-night.png') }}" alt="Brand Logo" style="height: 48px;" />
    </div>
    <p>I, the below signee, confirm and verify the Galaxy Home Care staff has worked the hours shown above and the activities marked were performed on the day indicated.</p>
    <p>I certify that the documented during the visit hours shown above represent hours worked, and they were properly confirmed by the client or an authorized representative. Travel time, breaks and lunches were taken and recorded in a log which must be provided to my employer for processing. If I choose not to provide the log. I'll be paid for travel time, breaks and lunches in accordance with coordinated schedule and employer policies.</p>

    @php
    $iteratePOC = json_decode(\Illuminate\Support\Facades\File::get(base_path() . '/private/proof-of-concept.json'));
    $timeSheets = array_chunk($iteratePOC, round(count($iteratePOC) / 2));
    @endphp
    <div class="row">
        @foreach ($timeSheets as $timeSheet)
        <div class="col w-50-percent">
            <table class="table-auto">
                <tr>
                    <th style="width: 30%;">Duty ID</th>
                    <th style="width: 50%;">Performed</th>
                    <th style="width: 20%;">Status</th>
                </tr>
                <tbody>
                    @foreach ($timeSheet as $i => $each)
                    <tr>
                        <td class="fw-600">{{ $each->code }}</td>
                        <td>{{ $each->name }}</td>
                        <td>{{ $i }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endforeach
    </div>
    <ol style="list-style-type: decimal-leading-zero;">
        <li>We will not accept any progress note that does not match the care plan in the client's home.</li>
        <li>Times and activities must be completed on each shift. Report any changes or Observations to supervisor and document changes and conversations with supervisor in the comments area.</li>
        <li>Do not do anything that is not in client's care plan.</li>
    </ol>
    <hr>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <div class="text-center">
        <img src="{{ asset('image/brand-logo-night.png') }}" alt="Brand Logo" style="height: 48px;" />
    </div>

    <h2 class="font-inter-500">TimeSheet Instruction</h2>
    <p>Time sheets must be completed during the visit hours and signed by client for each visit.</p>

    <h3>Instructions to Install HHA eXchange App for Clock IN & OUT</h3>
    <p>Step 01: Please go to Apps Store then search for "HHAeXchange" and Install the App.</p>
    <p>Step 02: After installing the app, you need to Sign Up,</p>
    <p>Step 03: After creating Login Information, please update your Profile in HHAeXchange. You need to click the top right corner 3 dots sign to update your profile.</p>
    <p>Step 04: Make sure all information is correct. After putting in all the information you will get the Mobile ID number,please take a Screenshot and send it to me to connect you to our Agency.</p>


    <h3>How to Clock IN & OUT using Client Phone:</h3>
    <p>Step 01: You need to Dial# 833-369-1211 from the Client's Phone</p>
    <p>Step 02: Press 1 for Clock IN and Press 2 for Clock OUT</p>
    <p>Step 03: You need to put your Assignment ID which is</p>
    <p>Step 04: You need to put at least 4 Duty IDs while you will Clock OUT which are as below:</p>
    <p>Step 05: After putting duty IDs, you need to Press “000” to end the Call.</p>

    <h3>How to Clock IN & OUT using Mobile App:</h3>
    <p>Step 01: You need to Dial# 833-369-1211 from the Client's Phone</p>

    <h3>Work Schedule:</h3>
    <p class="flex flex-1 justify-items-center">

    <table class="table-auto">
        <tr>
            <th>Day</th>
            <th>Time</th>
            <th>AM/PM</th>
            <th>To</th>
            <th>Time</th>
            <th>AM/PM</th>
        </tr>
        @foreach (['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'] as $day)
        <tr>
            <td>{{ $day }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        @endforeach
    </table>
    </p>
    <p>NOTE: This time sheet requires signatures from the client for each day of your visit. Please have them sign at the end of your visit. Agency IVR/EVV Number: 1-833-369-1211</p>
</body>

</html>