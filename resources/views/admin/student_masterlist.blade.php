<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "/assets/Oikos Logo.png">
    <link rel="stylesheet" href = "/CSS/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Oikos Admin: Student Master List</title>
    <style>
        .add-student-btn {
            font-size: 1em;
            font: sans-serif;
            padding: 10px;
            background-color: #323468;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 1em;
            margin-bottom: 1em;
        }
        .far{
            transform:translateX(1em);
        }
        .modal-mask{
            position:absolute;
            top:0;
            left:0;
            height:100vh;
            width:100%;
            z-index:100;
            background-color:rgba(0, 0, 0, 0.534);
            opacity:1;
            transition:opacity 200ms ease-in-out;
            display:flex;
            align-items:center;
            justify-content: center;
        }
        .form-container{
            background-color:white;
            border-radius:5px;
            width:65%;
            display:flex;
            flex-direction:column;
            padding:2em;
        }
        .form-header{
            display:flex;
            justify-content:space-between;
            align-items:center;
        }
        #form-content {
            display:flex;
            flex-direction:column;
            margin-top:1em;
        }
        .form-group{
            display: flex;
            gap: 1rem;
            margin-top: 1em;
        }
        .form-group-select{
            display: flex;
            flex-direction: column;
        }
        .select-input{
            height:2em;
            font-size:1rem;
            border:1px solid #dedede;
            border-radius: 5px;
            width: 100%;
        }
        .btn-submit{
            padding:1em;
            background-color:#13c36b;
            font-size:.8rem;
            font-weight:bold;
            color:white;
            border:none;
            border-radius: 15px;
            width: 30%;
            transition:opacity 150ms ease-in-out;
        }
        .btn-submit:hover{
            cursor: pointer;
            opacity:75%;
        }
        .btn-cancel{
            padding:1em;
            background-color:#DE3A3B;
            font-size:.8rem;
            font-weight:bold;
            color:white;
            border:none;
            border-radius: 15px;
            width: 30%;
            transition:opacity 150ms ease-in-out;
        }
        .btn-cancel:hover{
            cursor: pointer;
            opacity:75%;
        }
        .submit-group{
            display: flex;
            justify-content: center;
        }
        textarea{
            resize:none;
            font-family:sans-serif;
            font-size:1rem;
            padding:.5rem;
            border:1px solid #dedede;
        }
        .hidden{
            visibility:hidden;
            opacity:0;
        }
        .input-group{
            width:25%;
            display:flex;
            flex-direction:column;
        }
        .input-group-special{
            width:50%;
            display:flex;
            flex-direction:column;
        }
        .input-field{
            border:none; 
            height:2em;
            font-size:1rem;
            border: 1px solid #dedede;
        }
    </style>
</head>
<body>
    @include('component.admin.sidenav')
    <div class="main-content">
        <h1>Student Master List</h1>
        <button class="add-student-btn">+ Add a Student</button>
            <div class="std-log-container">
                <div class="header-std-list"><h2>Student List</h2>
                    <div class="std-filter-container">
                        <div class="search-table-container">
                            <div class="std-search-container">
                                <input type="text" id="search" size="30" placeholder="Search...">
                                <button id="search-icon" class="search-btn"></button>
                                <input type="text" id="search" size="30" placeholder="Search..." oninput="applyFilter()">
                            </div>
                        </div>
                    </div>
                <div class="form-group-select">
                        <label for="grade-level" style="margin-top: 1em;">Grade Level</label>
                        <select id="grade-level" class="select-input">
                        <option value="null">
                            ---
                        </option>
                        <option value="1">
                        <option value="Grade 1">
                            Grade 1
                        </option>
                        <option value="2">
                        <option value="Grade 2">
                            Grade 2
                        </option>
                        <option value="3">
                        <option value="Grade 3">
                            Grade 3
                        </option>
                        <option value="4">
                        <option value="Grade 4">
                            Grade 4
                        </option>
                        <option value="5">
                        <option value="Grade 5">
                            Grade 5
                        </option>
                        <option value="6">
                        <option value="Grade 6">
                            Grade 6
                        </option>
                        <option value="7">
                        <option value="Grade 7">
                            Grade 7
                        </option>
                        <option value="8">
                        <option value="Grade 8">
                            Grade 8
                        </option>
                        <option value="9">
                        <option value="Grade 9">
                            Grade 9
                        </option>
                        <option value="10">
                        <option value="Grade 10">
                            Grade 10
                        </option>
                        <option value="11">
                        <option value="Grade 11">
                            Grade 11
                        </option>
                        <option value="12">
                        <option value="Grade 12">
                            Grade 12
                        </option>
                    </select>
                    <label for="section" style="margin-top: 1em;">Section</label>
                    <select id="section" class="select-input">
                        <option value="null">
                            ---
                        </option>
                        <option class = "_1" value="Luke" hidden>
                            Luke
                        </option>
                        <option class = "_1" value="Tyrone" hidden>
                            Tyrone
                        </option>
                        <option class = "_1" value="Adrian" hidden>
                            Adrian
                        </option>
                        <option class = "_1" value="Fuack" hidden>
                            Fuack
                        </option>
                        <option class = "_2" value="Eyo" hidden>
                            Eyo
                        </option>
                        <option class = "_2" value="Leggo" hidden>
                            Leggo
                        </option>
                        <option class = "_2" value="Bruh" hidden>
                            Bruh
                        </option>
                        <option class = "_2" value="Cap" hidden>
                            Cap
                        </option>
                        <option class = "_3" value="Placeholder" hidden>
                            Placeholder
                        </option>
                        <option class = "_3" value="Masipag" hidden>
                            Masipag
                        </option>
                        <option class = "_3" value="Matatag" hidden>
                            Matatag
                        </option>
                        <option class = "_3" value="Blood" hidden>
                            Blood
                        </option>
                    </select>
                </div>

                <br><br>
                <div class="submit-group">
                    <button class="btn-submit">Add</button>
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

        document.addEventListener('DOMContentLoaded', function () {
            // Add an event listener to the search input field
            var searchInput = document.getElementById('search');
            searchInput.addEventListener('input', function () {
                applyFilter(); // Call the function to apply search filter
            });

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
        });

        setRowColors();

        function applyFilter() {
            var searchValue = document.getElementById('search').value.toLowerCase();
            var tableBody = document.getElementById('logTableBody');
            var rows = tableBody.getElementsByTagName('tr');
            for (var i = 0; i < rows.length; i++) {
                var rowText = rows[i].textContent.toLowerCase();
                if (searchValue === '' || rowText.includes(searchValue)) {
                    rows[i].style.display = '';
                } else {
                    rows[i].style.display = 'none';
                }
            }
        }

        function setRowColors() {
            var tableBody = document.getElementById('logTableBody');
            var rows = tableBody.getElementsByTagName('tr');
            for (var i = 0; i < rows.length; i++) {
                var statusCell = rows[i].querySelector('td:nth-child(7)');
                var statusText = statusCell.textContent.trim().toLowerCase();
                // Set color based on status
                if (statusText === 'pending') {
                    statusCell.style.color = 'orange'; // Set color to orange for pending
                } else if (statusText === 'enrolled') {
                    statusCell.style.color = 'green'; // Set color to green for enrolled
                } else {
                    statusCell.style.color = ''; // Reset color if neither pending nor enrolled
                }
            }
        }

        let sortDirectionID = 1;
        let sortDirectionName = 1;
        let sortDirectionDate = 1;
        let sortDirectionLevel = 1;
        let sortDirectionSection = 1;

        function extractNumericValue(level) {
            let closeModal = document.querySelector('.far');
            let textArea = document.querySelector('textarea');
            let select = document.querySelector('select');
            let gradeElement = document.getElementById('grade-level');
        }

        btn.onclick = function () {
            sidebar.classList.toggle('active');
        };

        toggleModal.onclick = () => {
            showModal.classList.remove('hidden');
            select.value = "null";
        };

        closeModal.onclick = () => {
            showModal.classList.toggle('hidden');
            select.value = "null";
            select.value = "Certificate of Good Moral Character";
            textArea.value = "";
        };

        gradeElement.addEventListener('change', () => {
            let sectionSelector = '._' + gradeElement.value;
            let previousSelected = document.querySelectorAll('.show');
            let sections = document.querySelectorAll(sectionSelector);
            if (!previousSelected) {
                return;
            } else {
                previousSelected.forEach(prev => {
                    prev.hidden = true;
                    prev.classList.remove('show');
                });
            }
            sections.forEach(section => {
                section.hidden = false;
                section.classList.toggle('show');
            });
        });
    </script>
</body>
</html>