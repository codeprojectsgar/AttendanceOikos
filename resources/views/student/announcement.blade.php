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
    <title>Oikos Student: Announcement</title>
</head>
<body>
        @include('component.student.sidenav')
        <div class="main-content">
        <h1>Announcement</h1>
        <div class="container">
            <div class="announcement-logs">
                <div class="header">Announcement Logs
                    <div class="search">
                        <input type="text" id="search-bar" size="30" placeholder="Search...">
                    </div>
                </div>
                <ul id="announcement-list">
                    <a href="">
                        <li class="announcement">
                            <div class="sender-icon"><img src="../assets/emp_ph.jpg" alt="user icon" class="sender-img"></div>
                            <div class="announcement-header"><h3>Welcome</h3><br>Announcement to New Students</div>
                            <div class="announcement-details">19/01/23<br>By: Anna</div>
                        </li>
                    </a>
                    <a href="">
                        <li class="announcement">
                            <div class="sender-icon"><img src="../assets/pfp.jpg" alt="user icon" class="sender-img"></div>
                            <div class="announcement-header"><h3>Reporting</h3><br>Math 101</div>
                            <div class="announcement-details">05/01/23<br>By: Cy Yu Tech</div>
                        </li>
                    </a>
                    <a href="">
                        <li class="announcement">
                            <div class="sender-icon"><img src="../assets/pfp.jpg" alt="user icon" class="sender-img"></div>
                            <div class="announcement-header"><h3>Long Quiz</h3><br>Gen Math</div>
                            <div class="announcement-details">03/01/23<br>By: Kaela</div>
                        </li>
                    </a>
                    <a href="">
                        <li class="announcement">
                            <div class="sender-icon"><img src="../assets/emp_ph.jpg" alt="user icon" class="sender-img"></div>
                            <div class="announcement-header"><h3>Short Quiz</h3><br>Purposive Communication</div>
                            <div class="announcement-details">03/01/23<br>By: Anna</div>
                        </li>
                    </a>
                </ul>
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