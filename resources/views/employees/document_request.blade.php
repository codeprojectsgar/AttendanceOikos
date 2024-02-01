<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "/assets/Oikos Logo.png">
    <link rel="stylesheet" href = "/CSS/employee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Oikos Employee: Document Request</title>
    <style>
        .container{
            margin-top:.5em;
            background-color: rgba(255, 255, 255, 0);
            padding: 0.69em;
            display:flex;
            flex-direction:column;
        }
        #container-title{
            font-weight: 400;
            border-bottom:1px solid #dedede;
            color:#323468;
        }
        .transparent-table {
            border-collapse: collapse;
            width: 100%;
            background-color: rgba(255, 255, 255, 0);
        }
        table {
            border-collapse: collapse; 
        }
        th {
            border: 1px solid #dddddd;
            color: #fff;
            text-align: left;
            padding: 8px;
            background-color: #323468;
            width: 20em;
        }
        td {
            border: 1px solid rgba(255, 255, 255, 0);
            color: black;
            text-align: left;
            padding: 8px;
            background-color: rgba(255, 255, 255, 0);
            width: 20em;
        }
        .entries-container {
            padding: 0.5em;
            background-color: white;
            margin-top: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .pagination {
            margin-left: auto;
            display: flex;
            align-items: center;
            float: right;
        }
        .dropdown {
            margin: 0;
        }
        .dropdown select {
            border-radius: 25px;
            padding: 2.5px;
        }
        .arrow-btn {
            background-color: rgba(255, 255, 255, 0);
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            padding: 8px;
            margin: 0 5px;
        }
        .add-document-request-btn {
            font-size: 1em;
            font: sans-serif;
            padding: 10px;
            background-color: #323468;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .action-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .search-container {
            display: flex;
            align-items: center;
            float: right;
        }
        .search-container input[type="text"] {
            padding: 8px;
            margin-right: 5px;
        }
        .search-btn {
            padding: 8px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        i {
            font-size: 1.2em;
            float: right;
            margin-right: 1em;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="top">
            <div class="logo">
                <i class="fa-solid fa-user-secret"></i>
                <span>Oikos</span>
            </div>
            <i class="fa-solid fa-bars" id = "btn"></i>
        </div>
        <div class="user">
            <img src ="" alt="secret-user" class = "user-img">
            <div class="">
                <p class = "bold">Kafelnikov Dela Rosa</p>
                <p>(Student)</p>
            </div>
        </div>
        <ul>
            <li>
                <a href = "/employees/Home">
                    <i class="fa-solid fa-house"></i>
                    <span class="nav-item">Home</span>
                </a>
                <span class="tooltip">Home</span>
            </li>
            <li>
                <a href = "/employees/User-Info">
                    <i class="fa-solid fa-user"></i>
                    <span class="nav-item">User</span>
                </a>
                <span class="tooltip">User Info</span>
            </li>
            <li>
                <a href = "/employees/Announcement">
                    <i class="fa-solid fa-bullhorn"></i>
                    <span class="nav-item">Announcement</span>
                </a>
                <span class="tooltip">Announcement</span>
            </li>

            <li>
                <a href = "/employees/Document-Request">
                    <i class="fa-solid fa-pen-to-square"></i>
                    <span class="nav-item" >Document Request</span>
                </a>
                <span class="tooltip" style="white-space:nowrap;">Document Request</span>
            </li>

            <li>
                <a href = "/employees/Calendar">
                    <i class="fa-solid fa-calendar"></i>
                    <span class="nav-item">Calendar</span>
                </a>
                <span class="tooltip">Calendar</span>
            </li>
            <li>
                <a href = "/employees/Time-Record">
                    <i class="fa-solid fa-clock"></i>
                    <span class="nav-item" style="height:50px;">Time Record</span>
                </a>
                <span class="tooltip">Time Record</span>
            </li>
            
            <li>
                <a href = "/employees/logout">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="nav-item">Logout</span>
                </a>
                <span class="tooltip">Logout</span>
            </li>
        </ul>
    </div>

    <div class="main-content">
        <h1>Document Request</h1>
        <button class="add-document-request-btn">+ Add Document Request</button>
        <div class="search-container">
            <input type="text" placeholder="Search...">
            <button class="search-btn">&#128269;</button>
        </div>
    <div class="container">
        <table style = "width: 100%;" class="attendance-type">
        <thead>
            <tr>
                <th colspan="2">Request Code</th>
                <th colspan="2">Request Type</th>
                <th colspan="2">Date Requested</th>
                <th colspan="2">Status</th>
            </tr>
        </thead>
    </table>
    <table class="transparent-table">
        <tbody>
            <tr>
                <td>CPE-2024- 01-00001</td>
                <td>Certificate of Good Moral Character</td>
                <td>Jan 01, 2024 </td>
                <td>
                    Pending
                    <i class="fa-solid fa-file-text"></i>
                    <i class="fa-solid fa-download"></i>
                </td>
            </tr>
            
        </tbody>
    </table>
            <div class="entries-container" style = "font-size: 0.69em; ">
                SHOWING 1 TO 1 OF 1 ENTRIES
                <div class="pagination">
                    <button class="arrow-btn">&#9664;</button>
                    <div class="dropdown">
                        <select>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <button class="arrow-btn">&#9654;</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        let btn = document.querySelector('#btn');
        let sidebar = document.querySelector('.sidebar');

        btn.onclick = function () {
            sidebar.classList.toggle('active');
        }
    </script>


</body>
</html>