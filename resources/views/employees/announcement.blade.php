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
    <title>Oikos Student: Announcement</title>
    <style>
        .container{
            margin-top:1em;
            padding:1em;
            background-color:white;
            display:flex;
            flex-direction:column;
            border-radius: 5px;
        }
        #container-title{
            font-weight: 400;
            border-bottom:1px solid #dedede;
            color:#323468;
        }
        #post{
            width:11em;
            height:2em;
            padding: .2rem;
            font-size:1.2rem;
            letter-spacing: 1px;
            color:white;
            background-color:#323468;
            border:none;
            border-radius:15px;
            opacity:100%;
            transition:opacity 150ms ease-in-out;
        }
        #post:hover{
            opacity:75%;
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
    <div class="modal-mask">
        
    </div>
    <div class="main-content">
        <h1>Announcements</h1>
        <button id="post">+ Add Annoucement</button>
        <div class="container">
            <div class="post-header">
                <h3 id=container-title>Annoucement Logs</h3>
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