<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tax Declaration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 2px solid red;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 18px;
            text-transform: uppercase;
            margin: 5px 0;
        }

        .header p {
            margin: 5px 0;
        }

        .header img {
            width: 60px;
            height: auto;
        }

        .details,
        .appraisal,
        .assessment {
            margin-bottom: 20px;
        }

        .details table,
        .appraisal table,
        .assessment table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }


        .details th,
        .details td,
        .appraisal th,
        .appraisal td,
        .assessment th,
        .assessment td {
            padding: 5px;
            border: 1px solid #ccc;
            text-align: left;
        }

        .details th {
            background-color: #f1f1f1;
        }

        .section-title {
            font-weight: bold;
            text-align: center;
            background-color: #d9d9d9;
            padding: 5px;
            border: 1px solid #ccc;
            margin-top: 10px;
            text-transform: uppercase;
        }

        .summary {
            margin-top: 20px;
            font-weight: bold;
            text-align: center;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
            color: #666;
        }

        .qr-code {
            text-align: center;
            margin-top: 20px;
        }

        .qr-code img {
            width: 100px;
            height: 100px;
        }

        .notes {
            font-size: 12px;
            margin-top: 10px;
            color: #666;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>City of Taguig</h1>
            <p>Declaration of Real Property</p>
            <p>Owner's Copy</p>
        </div>

        <div class="details">
            <table>
                <tr>
                    <th>Tax Declaration No.</th>
                    <td>EB-001-00995</td>
                    <th>Property Index No.</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Owner</th>
                    <td>Renaissance Printing Services Inc.</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>1ST Ave. Ext, Santa Maria Real Estate Subd., Bagumbayan, Taguig City</td>
                </tr>
            </table>
        </div>

        <div class="appraisal">
            <div class="section-title">Property Appraisal (Building & Other Structure)</div>
            <table>
                <tr>
                    <th>Description</th>
                    <th>Floor Area</th>
                    <th>Type of Structure</th>
                    <th>Market Value</th>
                </tr>
                <tr>
                    <td>Warehouse</td>
                    <td>1,332.00</td>
                    <td>R.C.</td>
                    <td>7,992,000.00</td>
                </tr>
            </table>
        </div>

        <div class="assessment">
            <div class="section-title">Property Assessment (Building & Other Structure)</div>
            <table>
                <tr>
                    <th>Actual Use</th>
                    <th>Market Value</th>
                    <th>Assessment Level</th>
                    <th>Assessed Value</th>
                    <th>Taxability</th>
                </tr>
                <tr>
                    <td>Commercial</td>
                    <td>7,992,000.00</td>
                    <td>75%</td>
                    <td>5,994,000.00</td>
                    <td>Taxable</td>
                </tr>
            </table>
        </div>

        <div class="summary">
            Total Assessed Value: <strong>FIVE MILLION NINE HUNDRED NINETY FOUR THOUSAND PESOS ONLY</strong>
        </div>

        <div class="footer">
            <p>Approved by: Engr. Roberto S. Villaluz</p>
            <p>OIC - City Assessor</p>
            <div class="qr-code">
                <img src="qr-code-placeholder.png" alt="QR Code">
            </div>
            <div class="notes">
                <p>* This declaration is for real property taxation purposes only.</p>
            </div>
        </div>
    </div>
</body>

</html>
