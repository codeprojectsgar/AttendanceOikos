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
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .qr-table-container {
        margin-top: 20px;
        position: relative;
        }
        .filter-container h2{
            margin: 0;
        }
        .filter-container label {
            margin-right: 10px;
            cursor: pointer;
        }

        .filter-container input[type="text"] {
            margin-right: 10px;
            border: 2px solid black;
            border-radius: 15px;
            padding: 6px;
        }

        .filter-container button {

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
        .filter-button {
            position: absolute;
            top: 0;
            right: 0;
            background-color: #323468;
            color: white;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 10px;
        }
        .search-container {
            position: relative;
        }
        .search-container input[type="text"] {
            padding-left: 30px;
        }

        .search-container i {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
            cursor: pointer;
        }

    </style>
    <title>Oikos Student: Time Record</title>
</head>
<body>
    @include('component.admin.sidenav')
    <div class="main-content">
        <h1>Students Masterlist</h1>
        <div class="container"></div>
        <div class="log-body">
            <div style="z-index:1;" class="log-container">
                <div class="filter-container">
                    <h2>Filtered List</h2>
                    <label for="search"></label>
                    <div class="search-container">
                        <input type="text" id="search" oninput="applyFilter()">
                        <i class="fas fa-search" id="search-icon"></i>
                    </div>
                </div>
                <table style="width: 100%;" class="attendance-type">
                    <thead>
                        <tr>
                            <th>QR</th>
                            <th>
                                <button class="sort-button" onclick="sortColumnByID()">
                                    <i class="fa fa-sort-numeric-asc"></i>
                                </button>
                                ID
                            </th>
                            <th>
                                <button class="sort-button" onclick="sortColumnByName()">
                                    <i class="fas fa-sort-alpha-down" id="sort-icon-name"></i>
                                </button>
                                Name
                            </th>
                            <th>
                                <button class="sort-button" onclick="sortColumnByDate()">
                                    <i class="fas fa-sort-alpha-down"></i>
                                </button>
                                Date
                            </th>
                            <th>
                                <button class="sort-button" onclick="sortColumnByLevel()">
                                    <i class="fas fa-sort-alpha-down"></i>
                                </button>
                                Level
                            </th>
                            <th>
                                <button class="sort-button" onclick="sortColumnBySection()">
                                    <i class="fas fa-sort-alpha-down"></i>
                                </button>
                                Section
                            </th>
                            <th>
                                <button class="sort-button" onclick="sortColumnByStatus()">
                                <i class="fas fa-sort-alpha-down"></i>
                            </button>
                            Status
                            </th>
                            <th>
                                Action
                            </th> 
                        </tr>
                    </thead>
                    <tbody id="logTableBody">
                        <tr>
                            <td>C137</td>
                            <td>202010421</td>
                            <td>Rick Sanchez</td>
                            <td>03/23/2020</td>
                            <td>Grade 3</td>
                            <td>Neitzche</td>
                            <td>Pending</td>
                            <td><i class="fas fa-edit"></i></td>
                        </tr>
                        <tr>
                            <td>PR1ME</td>
                            <td>202010422</td>
                            <td>Morty Smith</td>
                            <td>02/21/2020</td>
                            <td>Grade 10</td>
                            <td>Plato</td>
                            <td>Enrolled</td>
                            <td><i class="fas fa-edit"></i></td>
                        </tr>
                        <tr>
                            <td>C021</td>
                            <td>201910239</td>
                            <td>Gawr Gura</td>
                            <td>02/04/2019</td>
                            <td>Grade 4</td>
                            <td>Aristotle</td>
                            <td>Enrolled</td>
                            <td><i class="fas fa-edit"></i></td>
                        </tr>
                        <tr>
                            <td>C022</td>
                            <td>202012730</td>
                            <td>Amelia Watson</td>
                            <td>02/03/2020</td>
                            <td>Grade 5</td>
                            <td>Paloma</td>
                            <td>Pending</td>
                            <td><i class="fas fa-edit"></i></td>
                        </tr>
                        <tr>
                            <td>C023</td>
                            <td>202081297</td>
                            <td>Mori Calliope</td>
                            <td>03/23/2020</td>
                            <td>Grade 1</td>
                            <td>Democritus</td>
                            <td>Pending</td>
                            <td><i class="fas fa-edit"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> 
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var tableBody = document.getElementById('logTableBody');
                var rows = tableBody.getElementsByTagName('tr');
                for (var i = 0; i < rows.length; i++) {
                    var statusCell = rows[i].querySelector('td:nth-child(7)');
                    if (statusCell.textContent.toLowerCase() === 'pending') {
                        statusCell.style.color = 'Orange';
                    } else if (statusCell.textContent.toLowerCase() === 'enrolled') {
                        statusCell.style.color = 'green';
                    } else {
                        statusCell.style.color = '';
                    }
                }
                const searchIcon = document.getElementById('search-icon');

            searchIcon.addEventListener('click', function () {
                applyFilter(); 
            });
            });
        
            let btn = document.querySelector('#btn');
            let sidebar = document.querySelector('.sidebar');
        
            btn.onclick = function () {
                sidebar.classList.toggle('active');
            }
        
            function applyFilter() {
                var searchValue = document.getElementById('search').value.toLowerCase();
                var tableBody = document.getElementById('logTableBody');
                var rows = tableBody.getElementsByTagName('tr');
        
                for (var i = 0; i < rows.length; i++) {
                    var searchCell = rows[i].textContent.toLowerCase();
        
                    if (searchValue === '' || searchCell.includes(searchValue)) {
                        rows[i].style.display = '';
                    } else {
                        rows[i].style.display = 'none';
                    }
                }
            }
            let sortDirectionID = 1;
            let sortDirectionName = 1;
             
            let sortDirectionDate = 1;
            let sortDirectionLevel = 1; 
            let sortDirectionSection = 1; 
            let sortDirectionStatus = 1; 
            function sortColumnByID() {
                const tbody = document.querySelector('tbody');
                const rows = Array.from(tbody.querySelectorAll('tr'));

                const sortedRows = rows.sort((a, b) => {
                    const aValue = parseInt(a.children[1].innerText); // Convert text to integer for numeric comparison
                    const bValue = parseInt(b.children[1].innerText);
                    
                    return sortDirectionID * (aValue - bValue); // Compare numeric values
                });

                while (tbody.firstChild) {
                    tbody.removeChild(tbody.firstChild);
                }

                sortedRows.forEach(row => tbody.appendChild(row));

                sortDirectionID *= -1; // Update the sorting direction

                const sortIcon = document.querySelector('.sort-button i:nth-child(2)'); // Update the icon selector
                sortIcon.classList.remove('fa-sort-up', 'fa-sort-down');
                if (sortDirectionID === 1) {
                    sortIcon.classList.add('fa-sort-up');
                } else {
                    sortIcon.classList.add('fa-sort-down');
                }
            }

            function sortColumnByName() {
                const tbody = document.querySelector('tbody');
                const rows = Array.from(tbody.querySelectorAll('tr'));

                const sortedRows = rows.sort((a, b) => {
                    const aValue = a.children[2].innerText;
                    const bValue = b.children[2].innerText;
                    
                    return sortDirectionName * aValue.localeCompare(bValue, undefined, {numeric: true});
                });

                while (tbody.firstChild) {
                    tbody.removeChild(tbody.firstChild);
                }

                sortedRows.forEach(row => tbody.appendChild(row));

                sortDirectionName *= -1; // Update the sorting direction
                const sortIcon = document.getElementById('sort-icon-name');
                if (sortDirectionName === 1) {
                    sortIcon.classList.remove('fa-sort-alpha-down');
                    sortIcon.classList.add('fa-sort-alpha-up');
                } else {
                    sortIcon.classList.remove('fa-sort-alpha-up');
                    sortIcon.classList.add('fa-sort-alpha-down');
                }

            }
            function sortColumnByDate() {
            const tbody = document.querySelector('tbody');
            const rows = Array.from(tbody.querySelectorAll('tr'));

            const sortedRows = rows.sort((a, b) => {
                const aValue = new Date(a.children[3].innerText);
                const bValue = new Date(b.children[3].innerText);
                
                return sortDirectionDate * (aValue - bValue);
            });

            while (tbody.firstChild) {
                tbody.removeChild(tbody.firstChild);
            }

            sortedRows.forEach(row => tbody.appendChild(row));

            sortDirectionDate *= -1;

            const sortIcon = document.querySelector('.sort-button i:nth-child(3)');
            sortIcon.classList.remove('fa-sort-up', 'fa-sort-down');
            if (sortDirectionDate === 1) {
                sortIcon.classList.add('fa-sort-up');
            } else {
                sortIcon.classList.add('fa-sort-down');
            }
        }
            function sortColumnByLevel() {
                const tbody = document.querySelector('tbody');
                const rows = Array.from(tbody.querySelectorAll('tr'));

                const sortedRows = rows.sort((a, b) => {
                    const aValue = extractNumericValue(a.children[4].innerText);
                    const bValue = extractNumericValue(b.children[4].innerText);
                    
                    return sortDirectionLevel * (aValue - bValue);
                });

                while (tbody.firstChild) {
                    tbody.removeChild(tbody.firstChild);
                }

                sortedRows.forEach(row => tbody.appendChild(row));

                sortDirectionLevel *= -1;

                const sortIcon = document.querySelectorAll('.sort-button i:nth-child(3)');
                sortIcon.forEach(icon => {
                    icon.classList.remove('fa-sort-up', 'fa-sort-down');
                    if (sortDirectionLevel === 1) {
                        icon.classList.add('fa-sort-up');
                    } else {
                        icon.classList.add('fa-sort-down');
                    }
                });
            }

            function sortColumnBySection() {
                const tbody = document.querySelector('tbody');
                const rows = Array.from(tbody.querySelectorAll('tr'));

                const sortedRows = rows.sort((a, b) => {
                    const aValue = a.children[5].innerText;
                    const bValue = b.children[5].innerText;
                    
                    return sortDirectionSection * aValue.localeCompare(bValue, undefined, {numeric: true});
                });

                while (tbody.firstChild) {
                    tbody.removeChild(tbody.firstChild);
                }

                sortedRows.forEach(row => tbody.appendChild(row));

                sortDirectionSection *= -1;

                const sortIcon = document.querySelectorAll('.sort-button i:nth-child(4)');
                sortIcon.forEach(icon => {
                    icon.classList.remove('fa-sort-up', 'fa-sort-down');
                    if (sortDirectionSection === 1) {
                        icon.classList.add('fa-sort-up');
                    } else {
                        icon.classList.add('fa-sort-down');
                    }
                });
            }
            function sortColumnByStatus() {
            const tbody = document.querySelector('tbody');
            const rows = Array.from(tbody.querySelectorAll('tr'));

            const sortedRows = rows.sort((a, b) => {
                const aValue = a.children[6].innerText;
                const bValue = b.children[6].innerText;
                
                return sortDirectionStatus * aValue.localeCompare(bValue);
            });

            while (tbody.firstChild) {
                tbody.removeChild(tbody.firstChild);
            }

            sortedRows.forEach(row => tbody.appendChild(row));

            sortDirectionStatus *= -1;

            const sortIcon = document.querySelector('.sort-button i:nth-child(7)');
            sortIcon.classList.remove('fa-sort-up', 'fa-sort-down');
            if (sortDirectionStatus === 1) {
                sortIcon.classList.add('fa-sort-up');
            } else {
                sortIcon.classList.add('fa-sort-down');
            }
        }
            function extractNumericValue(level) {
                const matches = level.match(/\d+/);
                return matches ? parseInt(matches[0]) : 0;
        }
</script>
</body>
</html>