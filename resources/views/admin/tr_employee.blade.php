<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "/assets/Oikos Logo.png">
    <link rel="stylesheet" href = "/CSS/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- implemented sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Oikos Admin: Employee Time Record</title>
    <style>
        .time-record,
        .tr-label {
            display: inline-block;
        }
        .Emp-From{
            display: inline-block;
            
        }
        .Emp-To{
            display: inline-block;
            padding: 1em;
            padding-left: 270px;
           
        }
        .Emp-Role{
            display: inline-block;
            padding-left: 270px;
            
        }
        .Emp-Name{
            display: inline-block;
            padding-left: 270px;
            
        }
        .Date-Field-From{
            display: inline;
            
            
        }
        .Date-Field-To{
            display: inline;
            padding-left: 90px;
           
        }
        .Date-Field-Role{
            display: inline;
            padding-left: 40px;
            
        }
        .Date-Field-Name{
            display: inline;
            padding-left: 40px;
           
        }
        .Role-Form{
            display: inline;
            padding-left: 40px;
            
        }
        .Name-Form{
            display: inline;
            height: 40px;
            padding-left: 40px;
            padding-right: 70px;
        }
        .Apply-Filter{
            display: inline;
            box-sizing: border-box; width: 220px; height: 40px;
            border-radius: 3px;
            padding: 10px 20px;
            font-size: 15px;
            color: white;
            background-color: #51558F;
            box-shadow: none;
        }

        .container{
            align-content: center;
            width: 1600px; 
            margin: 50px auto;
            background-color: white;
            padding: 10px 20px;
            padding-bottom: 35px;
            border-radius: 8px;
        }
        .Employment-logs-container{
            align-content: center;
            width: 1600px;
            height: 600px; 
            margin: 50px auto;
            background-color: white;
            padding: 10px 20px;
            padding-bottom: 35px;
            border-radius: 8px;
        }
        .Attendance-Container {
            display: grid;
            grid-template-columns: repeat(4, 360px);
            gap: 0px;
            max-width: 1500px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            
        }
        .Attendance-Item {
            font-size: 20px;
            font-weight: bold;
            border: 1px solid #ddd;
            padding-top: 7%;
            height: 70px; 
            text-align: center;
        }
        .info-Container {
            display: grid;
            grid-template-columns: repeat(3, 34.3%);
            gap: 0px; 
            max-width: 350px; 
            background-color: #fff;
            border-radius: 8px;
            height: 30px;
        }
        .info-Item {
            font-size: 14px;
            height: 70px;
            font-weight: bold;
            padding-top: 7%;
            border: 1px solid #ddd;
            text-align: center;
        }
        .info-Item-2 {
            font-size: 14px;
            height: 70px;
            padding-top: 7%; 
            border: 1px solid #ddd;
            text-align: center;
        }
        .Morning-Attendance {
            display: grid;
            grid-template-columns: repeat(2, 51.5%);
            gap: 0px; 
            max-width: 350px; 
            background-color: #fff;
            border-radius: 8px;
            height: 30px;
        }
        .Morning-Item {
            font-size: 14px;
            height: 70px;
            font-weight: bold;
            padding-top: 7%;
            border: 1px solid #ddd;
            text-align: center;
        }
        .Morning-Item-2 {
            font-size: 14px;
            height: 70px;
            padding-top: 7%;
            border: 1px solid #ddd;
            text-align: center;
        }
        .Afternoon-Attendance {
            display: grid;
            grid-template-columns: repeat(2, 51.5%);
            gap: 0px; 
            max-width: 350px; 
            background-color: #fff;
            border-radius: 8px;
            height: 30px;
        }
        .Afternoon-Item {
            font-size: 14px;
            height: 70px;
            font-weight: bold;
            padding-top: 7%;
            border: 1px solid #ddd;
            text-align: center;
        }
        .Afternoon-Item-2 {
            font-size: 14px;
            height: 70px;
            padding-top: 7%;
            border: 1px solid #ddd;
            text-align: center;
        }
        .Evening-Attendance {
            display: grid;
            grid-template-columns: repeat(2, 51.5%);
            gap: 0px; 
            max-width: 350px; 
            background-color: #fff;
            border-radius: 8px;
            height: 30px;
        }
        .Evening-Item {
            font-size: 14px;
            height: 70px;
            font-weight: bold;
            padding-top: 7%;
            border: 1px solid #ddd;
            text-align: center;
        }
        .Evening-Item-2 {
            font-size: 14px;
            height: 70px;
            font-weight: bold;
            padding-top: 7%;
            border: 1px solid #ddd;
            text-align: center;
        }
        .PageNum{
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }
        
    </style>
</head>
<body>
    @include('component.admin.sidenav')
   

    <div class="main-content">
        <h1 class="time-record"><a href = "/admin/Time_Record"  style = "color: rgba(100, 100, 100, 0.700); text-decoration: none;">Time Record></a></h1>
        <h1 class="tr-label" style = "margin-left: 0.3em;">Employee Logs</h1>
        <div class="container">  
            <div class = "log-container">
            <h5 class = "Emp-From"> From: </h5>  
            <h5 class = "Emp-To"> To: </h5>
            <h5 class = "Emp-Role"> Role: </h5>
            <h5 class = "Emp-Name"> Name: </h5>
            </div>
                <div class = "Date-Field-From">
                <input type = "date" style = "color: rgba(100, 100, 100, 0.700); text-decoration: none; height: 40px; width: 220px; font-size: 20px; "></input>
                </div>
                <div class = "Date-Field-To">
                <input type = "date" style = "color: rgba(100, 100, 100, 0.700); text-decoration: none; height: 40px; width: 220px; font-size: 20px;"></input>
                </div>
        <div class = "Date-Field-Role">
                <form class = "Role-Form">
                    <select name = "Roles" style = "color: rgba(100, 100, 100, 0.700); text-decoration: none;width: 220px; height: 40px; border-radius: 3px; font-size: 20px;">
                            <option value = "Teacher">Teacher</option>
                            <option value = "IT">IT</option>
                            <option value = "Staff">Staff</option>
                    </select>
            </form>
        </div>
        <div class = "Date-Field-Name">
            <form class = "Name-Form">
                   <input type ="text" name = "fname" placeholder="Amelia Watson" style = "width: 300px; height: 40px; border-radius: 3px; font-size: 20px; padding-left: 5px;">
            </form>
        </div>
        <button class = "Apply-Filter">
            Apply Filter
        </button>
    </div>
    <div class = "Employment-logs-container" style = "padding:20px; font-size:40px;"><h4>Employee Logs</h4>
    <div class="Attendance-Container">
    <div class="Attendance-Item"></div>
        <div class="Attendance-Item">Morning Attendance</div>
        <div class="Attendance-Item">Afternoon Attendance</div>
        <div class="Attendance-Item">Evening Attendance</div>
        <div class="info-Container">
        <div class="info-Item">Employee Name</div>
        <div class="info-Item">Role</div>
        <div class="info-Item">Date</div>
        <div class="info-Item-2">Amelia Watson</div>
        <div class="info-Item-2">Teacher</div>
        <div class="info-Item-2">January 03, 2024</div>
        <div class="info-Item-2"></div>
        <div class="info-Item-2"></div>
        <div class="info-Item-2">January 04, 2024</div>
        <div class="info-Item-2"></div>
        <div class="info-Item-2"></div>
        <div class="info-Item-2">January 05, 2024</div>
        
    </div>
    <div class="Morning-Attendance">
        <div class="Morning-Item">In</div>
        <div class="Morning-Item">Out</div>
        <div class="Morning-Item-2">7:44 am</div>
        <div class="Morning-Item-2"></div>
        <div class="Morning-Item-2">7:44 am</div>
        <div class="Morning-Item-2"></div>
        <div class="Morning-Item-2">7:44 am</div>
        <div class="Morning-Item-2"></div>
    </div>
        
    <div class="Afternoon-Attendance">
        <div class="Afternoon-Item">In</div>
        <div class="Afternoon-Item">Out</div>
        <div class="Afternoon-Item-2"></div>
        <div class="Afternoon-Item-2">5:00 pm</div>
        <div class="Afternoon-Item-2"></div>
        <div class="Afternoon-Item-2">5:00 pm</div>
        <div class="Afternoon-Item-2"></div>
        <div class="Afternoon-Item-2">5:00 pm</div>
        
    </div>
    <div class="Evening-Attendance">
        <div class="Evening-Item">In</div>
        <div class="Evening-Item">Out</div>
        <div class="Evening-Item-2"></div>
        <div class="Evening-Item-2"></div>
        <div class="Evening-Item-2"></div>
        <div class="Evening-Item-2"></div>
        <div class="Evening-Item-2"></div>
        <div class="Evening-Item-2"></div>
    </div>
    
    </div>
    <div class ="PageNum">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        1> >>
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
                cancelButtonText:'No',
                showConfirmButton: true,
                confirmButtonColor: 'green',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Reload the page
                    window.location.href='/admin/logout';
                }
            });
        }

    </script>


</body>
</html>