<!DOCTYPE html>
<html>

<head>
    <title>Tracking System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            width: 100%;
            text-align: center;
            margin-bottom: 20px;
        }

        .header table {
            width: 100%;
            border-collapse: collapse;
        }

        .header .logo {
            width: 20%;
            /* Adjust width as needed */
            text-align: center;
            vertical-align: middle;
        }

        .header .logo img {
            width: 100px;
            /* Adjust size as needed */
            height: auto;
        }

        .header .header-text {
            width: 60%;
            text-align: center;
            vertical-align: middle;
        }

        .header .header-text h1 {
            font-size: 18px;
            margin: 5px 0;
        }

        .header .header-text h2 {
            font-size: 16px;
            margin: 5px 0;
        }

        .header .header-text h3 {
            font-size: 14px;
            margin: 5px 0;
        }

        .details {
            width: 100%;
            border: 1px solid black;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .details table {
            width: 100%;
            border-collapse: collapse;
        }

        .details td {
            vertical-align: top;
            padding: 10px;
            font-size: 12px;
            border: 1px solid black;
        }

        .details .qr-code {
            text-align: center;
            width: 150px;
            border-left: 1px solid black;
            padding-top: 10px;
            /* Add padding to push it down */
            vertical-align: top;
            /* Ensures it remains aligned with other content */
        }

        .details .qr-code img {
            width: 100px;
            height: 100px;
            margin-top: 80px;
            /* Additional margin for fine-tuning */
        }


        .event-header {
            background-color: #d9534f;
            color: white;
            text-align: center;
            padding: 5px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table th,
        .table td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }


        .footer-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .footer-table td {
            border: 1px solid black;
            padding: 0;
            /* Remove default padding */
            font-size: 12px;
            vertical-align: top;
            text-align: left;
            position: relative;
            /* Enable positioning for text placement */
        }

        .footer-table .signature-box {
            height: 50px;
            /* Adjust height for signature space */
            padding: 5px;
            /* Add padding for text positioning */
        }

        .footer-table .signature-box span {
            position: absolute;
            top: 5px;
            left: 5px;
            font-size: 12px;
        }



        .footer {
            font-size: 10px;
            text-align: left;
            /* Change from center to left */
            margin-top: 20px;
            border-top: 1px dashed black;
            padding-top: 10px;
        }

        .claim-stub {
            border: 1px solid black;
            margin-top: 10px;
            font-size: 12px;
        }

        .claim-stub-header {
            background-color: #d9534f;
            color: white;
            text-align: center;
            padding: 5px;
            font-weight: bold;
        }

        .claim-stub table {
            width: 100%;
            border-collapse: collapse;
        }

        .claim-stub table td {
            vertical-align: top;
            padding: 10px;
        }

        .claim-stub .qr-code {
            text-align: center;
            width: 120px;
        }

        .claim-stub .qr-code img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <table>
                <tr>
                    <!-- Left Logo -->
                    <td class="logo">
                        <div class="logo-stack">
                            <img src="{{ public_path('img/IT.jpg') }}" alt="IT Logo">
                            {{-- <img src="{{ public_path('img/assessor.png') }}" alt="Assessor Logo"> --}}
                        </div>
                    </td>
                    <!-- Header Text -->
                    <td class="header-text">
                        <h1>CITY OF TAGUIG</h1>
                        <h2>OFFICE OF THE CITY ASSESSOR</h2>
                        <h3>Tracking System</h3>
                    </td>
                    <!-- Right Logo -->
                    <td class="logo">
                        <img src="{{ public_path('img/taguigseal.jpg') }}" alt="QR Code">
                    </td>
                </tr>
            </table>
        </div>


        <div class="details">
            <table>
                <tr>
                    <!-- Details Section -->
                    <td>
                        <p><strong>DATE:</strong> {{ $trackingData?->Date }}</p>
                        <p><strong>ORIGINATING OFFICER:</strong> {{ $trackingData?->Username }}</p>
                        <p><strong>TRANSACTION TYPE:</strong> {{ $trackingData?->Transaction }}</p>
                        <p><strong>NO. OF ACCOUNT/S:</strong> {{ $trackingData?->NoOfTransaction }}</p>
                    </td>
                    <td class="qr-code" rowspan="2">
                        <img src="{{ public_path('img/qrcode.jpg') }}" alt="QR Code">
                        <p>{{ $trackingData?->TrackingNo }}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><strong>APPLICANT:</strong> {{ $trackingData?->Applicant }}</p>
                        <p><strong>ADDRESS:</strong> {{ $trackingData?->Address }}</p>
                        <p><strong>REPRESENTATIVE:</strong> {{ $trackingData?->Representative }}</p>
                        <p><strong>CONTACT NO.:</strong> {{ $trackingData?->ContactNo }}</p>
                    </td>
                </tr>
            </table>
        </div>


        <!-- Event History Section -->
        <div class="event-header">Event History</div>
        <table class="table">
            <thead>
                <tr>
                    <th>Station</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Event</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Receiving</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Appraisal</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Tax Mapping</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Printing</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>For Signature</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Validation</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Releasing</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <table class="footer-table">
            <tr>
                <td class="signature-box">
                    <span>Received By:</span>
                </td>
                <td class="signature-box">
                    <span>Released By:</span>
                </td>
            </tr>
        </table>


        <!-- Footer -->
        <div class="footer">
            Assessor's Office: 0919 079 9114
        </div>

        <!-- Claim Stub -->
        <div class="claim-stub">
            <div class="claim-stub-header">Claim Stub</div>
            <table>
                <tr>
                    <td>
                        <p><strong>DATE:</strong>  {{ $trackingData?->Date }}</p>
                        <p><strong>APPLICANT:</strong> {{ $trackingData?->Applicant }}</p>
                        <p><strong>ADDRESS:</strong> {{ $trackingData?->Address }}</p>
                        <p><strong>TRANSACTION TYPE:</strong> {{ $trackingData?->Transaction }}</p>
                        <p><strong>NO. OF ACCOUNT/S:</strong> {{ $trackingData?->NoOfTransaction }}</p>
                    </td>
                    <td class="qr-code">
                        <img src="{{ public_path('img/qrcode.jpg') }}" alt="QR Code">

                        <p>2501190217160001</p>
                    </td>
                </tr>
            </table>
        </div>

    </div>
</body>

</html>
