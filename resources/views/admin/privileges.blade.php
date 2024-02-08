<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/Oikos Logo.png">
    <link rel="stylesheet" href="/CSS/admin.css">
    <link rel="stylesheet" href = "/CSS/Admin_Privileges.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- implemented sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <script src="https://cdn.rawgit.com/neocotic/qrious/4.0.2/qrious.min.js"></script>
    

    <title>Oikos Admin: Privileges</title>

    <style>
       
    </style>
</head>
<body>
    @include('component.admin.sidenav')
   
    <div class="TBG"></div>
    <div class="main-content">
        <h1 id="header">Privileges</h1>
        <div class="container">
            <div class="PBG">
                <div class="user-pic">
                    <img src="/assets/testpic.png" alt="User Picture">
                </div>
                <p id = "UN1">Admin</p>
                <p id = "UNRole">IT Admin</p>
                <div class="buttons-container">
                    <div class="button" onclick="openTab('Tab1')" data-tab="Tab1">Create</div>
                    <div class="button" onclick="openTab('Tab2')" data-tab="Tab2">Role</div>
                    <div class="button" onclick="openTab('Tab3')" data-tab="Tab3">Update</div>
                    <div class="button" onclick="openTab('Tab4')" data-tab="Tab4">Remove Account</div>
                </div>
                <div class="vertical-line"></div>                
                <div id="Tab1" class="tab-content">
                    <p id = "AddPicText">Upload a Profile Picture:</p>
                    <div class="upload-button-container">
                        <label for="file-upload" class="upload-button">
                            <input type="file" id="file-upload" accept="image/*" onchange="displayUserPic(this)">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                        </label>
                    </div>
                    <p id = "Tab1Header">Create an Account</p>
                    <div class = "create-inputs">
                        <div class="input-field">
                            <label for="firstName">First Name:</label>
                            <input type="text" id="firstName" name="firstName" required>
                        </div>
                        <div class="input-field">
                            <label for="lastName">Last Name:</label>
                            <input type="text" id="lastName" name="lastName" required>
                        </div>
                        <div class="input-field">
                            <label for="middleName">Middle Name:</label>
                            <input type="text" id="middleName" name="middleName" required>
                        </div>
                        <div class="input-field">
                            <label for="address">Address:</label>
                            <input type="text" id="address" name="address" required>
                        </div>
                        <div class="input-field">
                            <label for="contactnumber">Contact Num:</label>
                            <input type="text" id="contactnumber" name="contactnumber" required>
                        </div>   
                    </div>
                    <div class = "create-inputs2">
                        <div class="input-field">
                            <label for="age">Age:</label>
                            <input type="text" id="age" name="age" required>
                        </div>
                        <div class="input-field">
                            <label for="email">Email:</label>
                            <input type="text" id="email" name="email" required>
                        </div>
                        <div class="input-field">
                            <label for="gender">Gender:</label>
                            <select id="gender" name="gender" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                            <button id="generateQRButton" onclick="generateQRCode()">Generate QR Code</button>
                            <div id="qrcode" style="margin-top: 20px;"></div>     
                            <button id="cancelButton">Cancel</button>
                            <button id="createAccountButton" onclick="submitCreateAccount()">Create Account</button>               
                    </div>              
                </div>
                <div id="Tab2" class="tab-content tab2">
                    <p id = "Tab2Header">Add a Role</p>
                    <div id="searchContainer">
                        <label for="search">Search:</label>
                        <input type="text" id="search" oninput="filterAccounts()" placeholder="Enter Employee Name">
                    </div>
                    <div class="input-field">
                        <label for="Jtitle">Job Title:</label>
                        <select id="Jtitle" name="Jtitle" required>
                            <option value="pos1">Position1</option>
                            <option value="pos2">Postion2</option>
                        </select>
                    </div>
                    <div id="employeeIdContainer">
                        <label for="employeeId">Employee ID:</label>
                        <input id="employeeId" type="text" placeholder="Employee ID" readonly>
                        <button type="submit" id="submitID" onclick="submitForm()">Submit</button>
                    </div>
                </div>
                <div id="Tab3" class="tab-content tab3">
                    <p id = "Tab3Header">Update Account Details</p>
                    <div id="searchContainerTab3">
                        <label for="searchTab3">Search by Name:</label>
                        <input type="text" id="searchTab3" oninput="filterAccountsTab3()" placeholder="Enter Employee Name">
                    </div>
                    <div class="input-field">
                        <label for="lastNameTab3">Last Name:</label>
                        <input type="text" id="lastNameTab3" name="lastNameTab3">
                    </div>
                    <div class="input-field">
                        <label for="firstNameTab3">First Name:</label>
                        <input type="text" id="firstNameTab3" name="firstNameTab3">
                    </div>
                    <div class="input-field">
                        <label for="middleNameTab3">Middle Name:</label>
                        <input type="text" id="middleNameTab3" name="middleNameTab3">
                    </div>
                    <div class="input-field">
                        <label for="idTab3">ID:</label>
                        <input type="text" id="idTab3" name="idTab3">
                    </div>
                    <button onclick="updateAccountInfo()">Update Account Info</button>
                </div>
                <div id="Tab4" class="tab-content tab4">
                    <p id = "Tab4Header">Remove an Account</p>
                    <div class="input-field">
                        <label for="employeeIdTab4">Employee ID:</label>
                        <input id="employeeIdTab4" type="text" placeholder="Employee ID">
                    </div>
                    <div class="input-field">
                        <label for="roleTab4">Role:</label>
                        <select id="roleTab4" name="roleTab4" required>
                            <option value="role1">Position1</option>
                            <option value="role2">Position2</option>
                        </select>
                    </div>
                    <button id="removeButtonTab4" onclick="removeAccount()">Remove Account</button>
                    <button id="cancelButtonTab4" onclick="cancelRemoval()">Cancel</button>
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

        function logout(){
            Swal.fire({
                position: 'center',
                icon: 'question',
                title: 'Are you sure you want to log-out',
                cancelButtonText: 'No',
                showConfirmButton: true,
                confirmButtonColor: 'green',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Reload the page
                    window.location.href='/admin/logout';
                }
            });
        }


        function openTab(tabName) {
    // Remove 'active' class from all buttons
    let buttons = document.querySelectorAll('.button');
    buttons.forEach(button => {
        button.classList.remove('active');
    });

    // Add 'active' class to the clicked button
    let clickedButton = document.querySelector(`.button[data-tab="${tabName}"]`);
    if (clickedButton) {
        clickedButton.classList.add('active');
    }

    // Hide all tab contents
    let tabContents = document.querySelectorAll('.tab-content');
    tabContents.forEach(content => {
        content.style.display = 'none';
    });

    // Show the selected tab content
    let selectedTab = document.getElementById(tabName);
    if (selectedTab) {
        selectedTab.style.display = 'block';
    }
}


        document.getElementById('createAccountButton').addEventListener('click', function () {
    // Call the function to submit data to the database
    submitCreateAccount();
});

function submitCreateAccount() {
    // Retrieve the entered data
    const firstName = document.getElementById('firstName').value;
    const lastName = document.getElementById('lastName').value;
    // ... (add other fields as needed)

    // Create an object to store the data
    const userData = {
        firstName: firstName,
        lastName: lastName,
        // ... (add other fields as needed)
    };

    // Save the data to localStorage
    localStorage.setItem('userData', JSON.stringify(userData));

    // Show success popup
    showSuccessPopup();
}

function showSuccessPopup() {
    Swal.fire({
        title: 'Account Created Successfully!',
        icon: 'success',
        confirmButtonColor: 'green',
        confirmButtonText: 'OK'
    });
}

//Tab 2
//Tab 2
//Tab 2
//Tab 2

document.getElementById('cancelButton').addEventListener('click', function () {
    // Clear all input fields
    document.querySelectorAll('.input-field input').forEach(input => {
        input.value = '';
    });
});
        document.addEventListener('DOMContentLoaded', function () {
            openTab('Tab1'); // Set the default tab
            // ... rest of your code
        });

    // Retrieve the last generated ID from local storage
    let lastGeneratedId = localStorage.getItem('lastGeneratedId');
    // Initialize the counter based on the last generated ID or start from 202400000
    let employeeIdCounter = lastGeneratedId ? parseInt(lastGeneratedId.split('-')[1]) + 1 : 202400000;

    // Display the initial ID on page load
    document.getElementById('employeeId').value = `EMP-${employeeIdCounter}`;

    // Handle form submission
    document.getElementById('tab2Form').addEventListener('submit', function (event) {
        event.preventDefault();

        // Get the selected Jtitle
        const selectedJtitle = document.getElementById('Jtitle').value;

        // Generate a unique employee ID
        const employeeId = `EMP-${employeeIdCounter}`;

        // Display the generated ID in the input field
        document.getElementById('employeeId').value = employeeId;

        // Save the generated ID to local storage
        localStorage.setItem('lastGeneratedId', employeeId);

        // Increment the counter for the next ID
        employeeIdCounter++;

        // Display success message using SweetAlert2
        Swal.fire({
            icon: 'success',
            title: 'Successfully Submitted!',
            showConfirmButton: false,
            timer: 1500
        });

        // TODO: Add logic to handle the submission of Jtitle and employee ID
        // You can use selectedJtitle and employeeId in your submission logic
    });
    function submitForm() {
        // Get the selected Jtitle
        const selectedJtitle = document.getElementById('Jtitle').value;

        // Generate a unique employee ID
        const employeeId = `EMP-${employeeIdCounter}`;

        // Display the generated ID in the input field
        document.getElementById('employeeId').value = employeeId;

        // Save the generated ID to local storage
        localStorage.setItem('lastGeneratedId', employeeId);

        // Increment the counter for the next ID
        employeeIdCounter++;

        // Display success message using SweetAlert2
        Swal.fire({
            icon: 'success',
            title: 'Successfully Submitted!',
            showConfirmButton: false,
            timer: 1500
        });

        // TODO: Add logic to handle the submission of Jtitle and employee ID
        // You can use selectedJtitle and employeeId in your submission logic
    }

// Function to filter accounts by name
function filterAccounts() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("search");
    filter = input.value.toUpperCase();
    table = document.getElementById("employeeTable");  // Assuming there's a table to display employees
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];  // Assuming the name is in the first column
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

// Modify the function to submit Tab 2 to handle the filtered accounts
function submitTab2() {
    // Get the selected Jtitle
    const selectedJtitle = document.getElementById('Jtitle').value;

    // Get the filtered accounts
    var accounts = document.querySelectorAll('.account-item');

    // Loop through filtered accounts and perform actions (e.g., update Jtitle)
    accounts.forEach(account => {
        var accountId = account.querySelector('.employee-id').innerText;

        // TODO: Add logic to handle the submission of Jtitle and employee ID
        // You can use selectedJtitle and accountId in your submission logic
    });

    // Display success message using SweetAlert2
    Swal.fire({
        icon: 'success',
        title: 'Successfully Submitted!',
        showConfirmButton: false,
        timer: 1500
    });
}

function loadDataFromLocalStorage() {
    // Retrieve the data from localStorage
    const storedData = localStorage.getItem('userData');

    if (storedData) {
        // Parse the stored data (assuming it's JSON)
        const userData = JSON.parse(storedData);

        // Populate fields in Tab2 with the retrieved data
        document.getElementById('Jtitle').value = userData.Jtitle;
        // ... (populate other fields as needed)
    }
}

// Call this function when Tab2 is loaded or displayed
loadDataFromLocalStorage();

//Tab 3
//Tab 3
//Tab 3
//Tab 3

// Retrieve data from localStorage when accessing Tab3
function loadDataForTab3() {
    // Retrieve the data from localStorage
    const storedData = localStorage.getItem('userData');

    if (storedData) {
        // Parse the stored data (assuming it's JSON)
        const userData = JSON.parse(storedData);

        // Populate fields in Tab3 with the retrieved data
        document.getElementById('lastNameTab3').value = userData.lastName;
        document.getElementById('firstNameTab3').value = userData.firstName;
        document.getElementById('middleNameTab3').value = userData.middleName;
        document.getElementById('idTab3').value = userData.id;
    }
}

// Call this function when Tab3 is loaded or displayed
loadDataForTab3();

// Function to update account information
function updateAccountInfo() {
    // Implement logic to update the account information in your backend or storage

    // For demonstration purposes, show a success message
    Swal.fire({
        icon: 'success',
        title: 'Account Information Updated!',
        showConfirmButton: false,
        timer: 1500
    });
}

//Tab 4
//Tab 4
//Tab 4
//Tab 4

function filterAccountsTab4() {
        // Implement logic to filter and display accounts in Tab4 based on the search input
        // You can use the value of document.getElementById('searchTab4').value
    }

    function removeAccount() {
        // Implement logic to remove the account and associated QR code from the database
        // You can use the values of document.getElementById('employeeIdTab4').value and document.getElementById('roleTab4').value

        // Display success message using SweetAlert2
        Swal.fire({
            icon: 'success',
            title: 'Account Removed Successfully!',
            showConfirmButton: false,
            timer: 1500
        });

        // Clear input fields after removal
        document.getElementById('employeeIdTab4').value = '';
        document.getElementById('roleTab4').value = '';
    }

    document.getElementById('cancelButtonTab4').addEventListener('click', function () {
    // Show a confirmation popup
    Swal.fire({
        title: 'Cancelled Removal',
        text: 'The removal process has been cancelled.',
        icon: 'info',
        confirmButtonColor: 'green',
        confirmButtonText: 'OK'
    });

    // Clear all fields in Tab4
    clearTab4Fields();
});

// Add this function to clear all fields in Tab4
function clearTab4Fields() {
    // Clear Employee ID and Role fields
    document.getElementById('employeeIdTab4').value = '';
    document.getElementById('roleTab4').value = '';

    // Additional fields can be cleared in a similar manner if needed
}

    </script>
</body>
</html>
