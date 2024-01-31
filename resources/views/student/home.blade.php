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
    <title>Oikos Student: Home</title>


    <style>
        .container{
            display:flex;

        }
        .boxcont {
        margin-top: 4em;
        margin-left: 2em;
        background-color: #ffffff;
        height: 70vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        border-right-style: solid;
        border-right-width: 1px;
        border-top-left-radius:2em;
        border-bottom-left-radius:2em;
        overflow:hidden;
        box-shadow: 0px 10px #999999;
        
    }
    .boxcont2 {
        margin-top: -70vh;
        margin-left: 33.1em;
        overflow:hidden;
        
        background-color: #ffffff;
        height: 70vh;
        width:70em;
        display: flex;
        box-shadow: 5px 10px #999999;
        border-top-right-radius:2em;
        border-bottom-right-radius:2em;
}

    .box {
        padding: 4em;
        text-align: center;
        overflow:hidden;
        width:23em;

    }
    .cont3{
        height:5vh;
        width:50vh;
        background-color:#ececec;
        color:#9f9f9f;
        margin-left:0vh;
        border-radius:20px;
        font-size:20px;
        padding:0.5em;
        
    }
    .cont4{
        height:5vh;
        width:50vh;
        background-color:#ececec;
        margin-top:-5vh;
        color:#9f9f9f;
        font-size:20px;
        margin-left:58.5vh;
        border-radius:20px;
        padding:0.5em;
    }
    #box2 {
        padding: 4em;
        text-align: left;
        overflow:hidden;
        height:auto;
        width:70em;
        
    
        
    }
    #box3 {
        padding: 4em;
        text-align: left;
        overflow:hidden;
        height:auto;
        width:70em;
        display:none;
    
    }
    #box3 h1{
        float:left;
        margin:-1em;
        font-size:30px;

    }
    #box2 h1{
        float:left;
        margin:-1em;
        font-size:30px;

    }
    table{
        text-align:left;
    }

    .box img {
        border-radius: 100%;
        height: 22vh;
        width: 22vh;
    }

    .box .txt {
        margin-top: 0.5vh;
        font-size: 1.5rem;
    }

    .box .opt {
        margin-top: 4.5vh;
        text-align: center;
        align-items: center;
        height:2.5em;
        transform:translateX(-3em);
        width: 180%;
        font-size: 2rem;
        border:none;
        background-color: #ffffff;
        
    }
    .box .opt:not(.active):hover {
    background: linear-gradient(to right, #51558F 10%, #ffffff 10%);
    cursor: pointer;
}

.box .opt.active {
    background-color: #51558F !important;
    color: white !important;
    cursor: default;
}
    h1{
        
        font-size:0.9em;
        text-align: center;
    }
    h2{
        display:inline;
        
    }
    p{
        display:inline;
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
                <a href = "home">
                    <i class="fa-solid fa-house"></i>
                    <span class="nav-item">Home</span>
                </a>
                <span class="tooltip">Home</span>
            </li>
            <li>
                <a href = "user">
                    <i class="fa-solid fa-user"></i>
                    <span class="nav-item">User</span>
                </a>
                <span class="tooltip">User</span>
            </li>
            <li>
                <a href = "announcement">
                    <i class="fa-solid fa-bullhorn"></i>
                    <span class="nav-item">Announcement</span>
                </a>
                <span class="tooltip">Announcement</span>
            </li>
            <li>
                <a href = "calendar">
                    <i class="fa-solid fa-calendar"></i>
                    <span class="nav-item">Calendar</span>
                </a>
                <span class="tooltip">Calendar</span>
            </li>
            <li>
                <a href = "time_record">
                    <i class="fa-solid fa-clock"></i>
                    <span class="nav-item" style="height:50px;">Time Record</span>
                </a>
                <span class="tooltip">Time Record</span>
            </li>
            
            <li>
                <a onclick="logout()">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="nav-item">Logout</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="main-content">
        <h1 style="float:left; font-size:25px; margin:1rem;  letter-spacing:5px;" >HOME</h1>
        <div class="container">
            <div class="boxcont">
                <div class="box">
                    <img src="/assets/pfp.jpg">
                    <div class="txt">
                    <p>(Student Name) <br> (Student Number)</p>

                    </div>
                    <button id="student_btn" class="opt" onclick="student_info()">
                        <p>Student Information</p>
                    </button>
                    <button id="parent_btn" class="opt" style="margin-top: 0vh;" onclick="parent_info()">
                        <p>Parent Information</p>
                    </button>
                </div>
                

                
            </div>
            

            
        </div>
        <!--Student Information-->
        <div class="boxcont2">
            <div id="box2">
                <h1>Student Information</h1>
                <br>
                <br>
                <h2>Name</h2>
                <h2 style="margin-left:20em;">Year Level</h2>
                <br><br>
                <div class="cont3">
                <p>Beatrice Field</p>
                </div>
                <div class="cont4">
                <p> 1st Year High</p>
                </div>
                <br>
                <h2>Enrollment Status</h1>
                <h2 style="margin-left:14.4em;">Fetcher</h2>
                    <div class="cont4" style="margin-top:1vh;">
                    <p ><u>Service</u></p>
                    </div>
                    <div class="cont3" style="margin-top:-4.6vh;">
                    <p ><u>Service</u></p>
                    </div>
                    <br><br>
                    
                <h2>Student Number</h2><br>
                <div class="cont3" style="margin-top:1vh;">
                <p><u>202010921</u></p><br><br>
                </div>
            </div>


            <!--Parent Information-->
            <div id="box3">
                <h1>Parent Information</h1>
                <br>
                <br>
                <h2>Name</h2>
                <h2 style="margin-left:20em;">Cellphone Number</h2>
                <br><br>
                <div class="cont3">
                <p>Everest Field</p>
                </div>
                <div class="cont4">
                <p> 09155885321</p>
                </div>
                <br>
                <h2>Telephone Number</h1>
                    <br>
                <div class="cont3">
                    <p><u>N/A</u></p>
                </div>
            </div>
        </div>
    </div>

   


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Set initial state when the page loads
            document.getElementById('box2').style.display = 'block';
            document.getElementById('box3').style.display = 'none';
    
            // Highlight the "Student Information" button as active
            document.getElementById('student_btn').classList.add('active');
            document.getElementById('parent_btn').classList.remove('active');
        });
        document.addEventListener("DOMContentLoaded", function () {
    const optButtons = document.querySelectorAll(".box .opt");

    optButtons.forEach(function (button) {
      button.addEventListener("click", function () {
        // Remove active class from all buttons
        optButtons.forEach(function (btn) {
          btn.classList.remove("active");
        });

        // Add active class to the clicked button
        button.classList.add("active");
      });
    });
  });
    
        // Logout
        function logout() {
            Swal.fire({
                title: "Are you sure you want to logout??",
                showCancelButton: true,
                confirmButtonText: "Logout",
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '/student/logout';
                }
            });
        }
    
        
        function student_info() {
            document.getElementById('box2').style.display = 'block';
            document.getElementById('box3').style.display = 'none';
    
            
            document.getElementById('student_btn').classList.add('active');
            document.getElementById('parent_btn').classList.remove('active');
        }
    
       
        function parent_info() {
            document.getElementById('box2').style.display = 'none';
            document.getElementById('box3').style.display = 'block';
    
           
            document.getElementById('parent_btn').classList.add('active');
            document.getElementById('student_btn').classList.remove('active');
        }
    
        // end of logout
        let btn = document.querySelector('#btn');
        let sidebar = document.querySelector('.sidebar');
    
        btn.onclick = function () {
            sidebar.classList.toggle('active');
        }
    </script>
    
    


</body>
</html>