<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "/assets/Oikos Logo.png">
    <link rel="stylesheet" href = "/CSS/student.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .log-body{
            background-color: #f2f2f2;
            margin: 1em;
            padding: 0;
            display: flex;

        }
        .log-container {
            width: 100%;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            
        }

        .filter-container {
            background-color: #f2f2f2;
            color: black;
            padding: 15px;
            text-align: left;

        }

        .filter-container label {
            margin-right: 10px;
            cursor: pointer;
        }

        .filter-container input[type="date"] {
            margin-right: 10px;
        }

        .filter-container button {
            margin-top: 10px;
            margin-left: 60%;
            border-radius: 4px;
            background-color: #323468;
            color: white;
            padding: 8px 16px;
            cursor: pointer;
        }

        .attendance-type {
            background-color: #f2f2f2;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .attendance-type th,
        .attendance-type td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        .attendance-type th {
            background-color: #323468;
            color: #fff;
            
        }

        .attendance-type tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .attendance-type tr:hover {
            background-color: #f1f1f1;
        }
        
        
    </style>
    <title>Oikos Student: Time Record</title>
</head>
<body>
    @include('component.employee.sidenav')
    <div class="main-content">
        <h1>Time Record > Employee Logs</h1>
        <div class="container">
        </div>
        <div class="log-body">
            <div style = "z-index:1;" class="log-container">
                <div class="filter-container">
                    <label for="startDate">Start Date:</label>
                    <input type="date" id="startDate" class="date-input">
                    <label for="endDate">End Date:</label>
                    <input type="date" id="endDate" class="date-input">
                    <button onclick="applyFilter()">Apply Filter</button>
                    <button onclick="clearFilter()">Clear Filter</button>
                </div>
                <h2>Employee Logs</h2>
                <table style = "width: 100%;" class="attendance-type">
                    <thead>
                        <tr>
                            <th colspan="3"></th>
                            <th colspan="2">Morning Attendance</th>
                            <th colspan="2">Afternoon Attendance</th>
                            <th colspan="2">Evening Attendance</th>
                        </tr>
                        <tr>
                            <th>Employee Name</th>
                            <th>Role</th>
                            <th>Date</th>
                            <th>In</th>
                            <th>Out</th>
                            <th>In</th>
                            <th>Out</th>
                            <th>In</th>
                            <th>Out</th>
                        </tr>
                    </thead>
                    <tbody id="logTableBody">
                        <tr>
                            <td>John Doe</td>
                            <td>Student</td>
                            <td>2024-01-30</td>
                            <td>09:00 AM</td>
                            <td>11:00 AM</td>
                            <td>12:00 NN</td>
                            <td>05:00 PM</td>
                            <td>06:00 PM</td>
                            <td>08:00 PM</td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>Student</td>
                            <td>2023-12-31</td>
                            <td>09:00 AM</td>
                            <td>11:00 AM</td>
                            <td>12:00 NN</td>
                            <td>05:00 PM</td>
                            <td>06:00 PM</td>
                            <td>08:00 PM</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> 
    <script>
        let btn = document.querySelector('#btn');
        let sidebar = document.querySelector('.sidebar');

        btn.onclick = function () {
            sidebar.classList.toggle('active');
        }
        function applyFilter() {
        // Get start and end dates from the input fields
        var startDate = document.getElementById('startDate').value;
        var endDate = document.getElementById('endDate').value;

        // Get the table body
        var tableBody = document.getElementById('logTableBody');

        // Get all rows in the table
        var rows = tableBody.getElementsByTagName('tr');

        // Loop through each row and hide/show based on the date range
        for (var i = 0; i < rows.length; i++) {
            var dateCell = rows[i].getElementsByTagName('td')[2]; // Assuming date is in the third column

            if (dateCell) {
                var currentDate = dateCell.textContent || dateCell.innerText;

                // Check if the date is within the specified range
                if (currentDate >= startDate && currentDate <= endDate) {
                    rows[i].style.display = ''; // Show the row
                } else {
                    rows[i].style.display = 'none'; // Hide the row
                }
            }
        }
    }
    function clearFilter() {
        // Get the start and end date input fields
        var startDateInput = document.getElementById('startDate');
        var endDateInput = document.getElementById('endDate');

        // Set their values to empty strings to clear the filter
        startDateInput.value = '';
        endDateInput.value = '';

        // Get the table body
        var tableBody = document.getElementById('logTableBody');

        // Get all rows in the table
        var rows = tableBody.getElementsByTagName('tr');

        // Loop through each row and show it
        for (var i = 0; i < rows.length; i++) {
            rows[i].style.display = '';
        }
    }
    </script>
</body>
</html>