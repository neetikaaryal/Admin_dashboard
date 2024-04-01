<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Bus Ticket</title> -->
    <style>
        @page {
            size: A4 portrait;
            margin: 1cm;
            /* Set margins to 1cm */
        }

        body {
            color: #333;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            /* Using a web-safe font */
        }

        .container {
            width: 100%;
            text-align: center;
        }

        .header {
            padding: 10px;
            border-bottom: 1px dotted #ec4020;
        }

        .header img {
            width: 150px;
        }

        .content {
            margin-top: 20px;
            display: inline-block;
            text-align: left;
            width: 100%;
        }

        .content h2 {
            text-align: center;
        }

        .trip-details {
            width: 48%;
            display: inline-block;
            vertical-align: top;

        }

        .passenger-details {
            width: 100%;
            display: inline-block;
            vertical-align: top;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .notes {
            margin-top: 20px;
            color: #ec4020;
            text-align: left;
        }

        .notes h3 {
            margin-bottom: 10px;
        }

        .notes ul {
            list-style-type: disc;
            padding-left: 20px;
            /* Added padding for indentation */
        }

        .notes ul li {
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="{{ asset('img/dpaisa_logo.png')}}" alt="DPaisa Logo" style="float: left;">
            <h1 style="color: #EC4121; display: inline-block;">Bus Company Name</h1>
            <img src="img/company_logo.png" alt="Bus-sewa logo" style="float: right;">
        </div>
        <div class="content">
            <h2>Trip Details</h2>
            <div class="trip-details">
                <h5>Departure: City A</h5>
                <h5>Departure Time: 2024-01-12 09:45</h5>
                <h5>Departure Place: Gongabu</h5>
            </div>
            <div class="trip-details">
                <h5>Arrival: City B</h5>
                <h5>Bus Name: Dhaulagiri AC</h5>
                <h5>Bus No.: 7560</h5>
            </div>
            <table>
                <tbody>
                    <tr>
                        <td>2 Adult(s) @ Rs. 1000</td>
                        <td>Rs. 2000</td>
                    </tr>
                    <tr>
                        <td>Discount</td>
                        <td>Rs. 0</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Total</td>
                        <td style="font-weight: bold;">Rs. 2000 </td>
                    </tr>
                </tbody>
            </table>
            <h2>Passenger Details</h2>
            <div class="passenger-details">
                <table>
                    <thead>
                        <tr>
                            <th>SN.</th>
                            <th>Full Name</th>
                            <th>Ticket No.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Passenger Name</td>
                            <td>Ticket123</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h2>Contact Person</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone Number</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Contact Name</td>
                        <td>Contact Phone</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="notes">
            <h3>Notes:</h3>
            <ul>
                <li>Ticket once sold will not be returned.</li>
                <li>Tickets can be cancelled only 24 hours before the departure time upon payment.</li>
                <li>Passenger must follow terms and conditions of bus company/association.</li>
                <li>Passenger must reach boarding point 30 minutes prior the departure time. The company will not be responsible for any delays.</li>
                <li>Bus service can be cancelled or changed from scheduled time or altered in scheduled date, if some unavoidable circumstances arise.</li>
                <li>The passengers are pre-informed that the facilities claimed by the bus company might not be served due to uncontrollable circumstances like road maintenance, accidents, etc.</li>
                <li>Full fare will be charged for children above 5 years of age.</li>
                <li>Passengers will be responsible for themselves and their luggage during stoppages midway.</li>
                <li>Luggage charge is not mentioned in the bus ticket.</li>
            </ul>
        </div>
    </div>
</body>

</html>