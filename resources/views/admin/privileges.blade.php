<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/Oikos Logo.png">
    <link rel="stylesheet" href="/CSS/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- implemented sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <script src="https://cdn.rawgit.com/neocotic/qrious/4.0.2/qrious.min.js"></script>
    

    <title>Oikos Admin: Privileges</title>

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        .tabs {
            width: 20%;
            border-radius: 2%;
            background-color: #23195a;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            padding: 20px 10px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
            position: absolute;
            top: 30%;
            left: 10%;
        }

        #header {
            z-index: 0;
            position: absolute;
            top: 1%;
            left: 1%;
            color: rgba(0, 0, 0, 0.479);
        }

        .TBG {
            height: 120%;
            width: 100%;
            background-color: #000000; 
            position: absolute;
            left: center;
            z-index: 1; 
            opacity: 0.15;        
        }

        .PBG {
            height: 70%;
            width: 70%;
            border-radius: 2%;
            background-color: #ffffff;
            color: #23195a;
            padding: 20px 10px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
            position: relative; 
            top: 10%;
            z-index: 2; 
            text-align: center;
        }

        .user-pic {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            position: absolute;
            top: 10%;
            left: 8%;
        }

        .user-pic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .buttons-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: absolute; 
            top: 60%; 
            left: 6%; 
        }

        .button {
            padding: 10%;
            width: 190%;
            background-color: #ffffff;
            color: rgb(0, 0, 0);
            text-align: center;
            cursor: pointer;
            font-weight: bold;
        }

        .button:hover {
            background-color: #7723d8;
            color: rgb(255, 255, 255);
            border-radius: 20px;
        }

        #UN1{
            position: absolute;
            top: 30%;
            left: 9.5%;
            font-weight: bold; 
        }

        #UNRole{
            position: absolute;
            top: 35%;
            left: 9%;
        }

        .vertical-line {
            width: 2px;
            height: 100%;
            background-color: #23195a;
            position: absolute;
            top: 0;
            left: 25%;
            transform: translateX(-50%);
            opacity: 0.15;
        }

        .upload-button-container {
            position: absolute; 
            top: 2%; 
            left: 28%; 
        }

        .upload-button {
            display: inline-block;
            position: relative;
            cursor: pointer;
            overflow: hidden;
            margin-top: 20px;
        }

        .upload-button input {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 300%;
            cursor: pointer;
            opacity: 0;
        }

        .upload-button i {
            font-size: 500%;
            color: #23195a;
        }

        #Tab1Header{
            position: absolute;
            top: 5%;
            left: 55%;
            font-weight: bold;
        }

        #AddPicText{
            position: absolute;
            top: 3%;
            left: 26%;
            font-weight: bold;
            font-size: 50%;
        }

        .input-field {
            margin-bottom: 1%;   
        }

        .input-field label {
            display: inline-block;
            width: 12%;
            text-align: right;
        }

        .input-field input {
            width: 25%;  /* Adjust the width as needed */
            padding: 12px;
            border: 2px solid #23195a;
            border-radius: 12px;
            box-sizing: border-box;
            margin-top: 8px;  /* Adjust the margin-top as needed */
        }

        .create-inputs{
            margin-top: 10%;
            margin-left: -6%;
            height: 100%;
            width: 100%;
            font-weight: bold;
        }

        .create-inputs2{
            margin-top: -28.5%;
            margin-left: 30%;
            height: 100%;
            width: 100%;
            font-weight: bold;
        }

        .input-field select {
            width: 25%;  /* Adjust the width as needed */
            padding: 12px;
            border: 2px solid #23195a;
            border-radius: 12px;
            box-sizing: border-box;
            margin-top: 8px;  /* Adjust the margin-top as needed */
            flex: 1;
            font-weight: bold;
        }

        button {
            background-color: #140d75;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 1%;
            margin-left: 12%;
            cursor: pointer;
            border-radius: 12px;            
        }

        button:hover {
            background-color: #0a0735;
        }

        #cancelButton {
            background-color: rgb(168, 14, 14);
        }

        #cancelButton:Hover {
            background-color: rgb(97, 17, 17);
        }

        #createAccountButton{
            background-color: rgb(11, 156, 84);
            margin-left: 5%;
            margin-top: 10%;
        }

        #createAccountButton:Hover{
            background-color: rgb(16, 90, 53);
        }
        
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
                    <div class="button" onclick="openTab('Tab1')">Create</div>
                    <div class="button" onclick="openTab('Tab2')">Role</div>
                    <div class="button" onclick="openTab('Tab3')">Update</div>
                    <div class="button" onclick="openTab('Tab4')">Remove Account</div>
                </div>
                <div class="vertical-line"></div>
                <p id = "AddPicText">Upload a Profile Picture:</p>
                <div id="Tab1" class="tab-content">
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

        function generateQRCode() {
            // Check if QR code is already generated
            var qrGenerated = sessionStorage.getItem('qrGenerated');

            if (!qrGenerated) {
                // Generate QR code logic using qrious library
                generateQR();

                // Display a success message
                Swal.fire({
                    icon: 'success',
                    title: 'QR Code Successfully Generated!',
                    showConfirmButton: false,
                    timer: 1500
                });

                // Update button text and disable the button
                var generateQRButton = document.getElementById('generateQRButton');
                generateQRButton.innerText = 'Generated';
                generateQRButton.disabled = true;

                // Save the QR generation status to sessionStorage
                sessionStorage.setItem('qrGenerated', true);
            }
        }

        // Function to generate QR code using qrious library
        function generateQR() {
            // Get the input data (you can customize this based on your form data)
            var email = document.getElementById('email').value;

            // Generate QR code using qrious
            var qr = new QRious({
                element: document.getElementById('qrcode'),
                value: email,
                size: 300
            });
        }

        function openTab(tabName) {
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
            Swal.fire({
                title: 'Are you sure you want to create this account?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: 'green',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, create account'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Call the function to submit data to the database
                    submitCreateAccount();
                }
            });
        });

        function showSuccessPopup() {
            Swal.fire({
                title: 'Account Created Successfully!',
                icon: 'success',
                confirmButtonColor: 'green',
                confirmButtonText: 'OK'
            });
        }

        function submitCreateAccount() {
            // Implement logic to handle the submission of the create account form
            // For demonstration purposes, let's show the success popup after a delay
            setTimeout(function () {
                showSuccessPopup();
            }, 1000);
        }

        document.getElementById('cancelButton').addEventListener('click', function () {
            // Clear all input fields
            document.querySelectorAll('.input-field input').forEach(input => {
                input.value = '';
            });
        });
    </script>
</body>
</html>
