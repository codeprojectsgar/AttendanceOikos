<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "/assets/Oikos Logo.png">
    <link rel="stylesheet" href = "/CSS/calendar.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Oikos Student: Calendar</title>
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
                <a href = "/students/Home">
                    <i class="fa-solid fa-house"></i>
                    <span class="nav-item">Home</span>
                </a>
                <span class="tooltip">Home</span>
            </li>
            <li>
                <a href = "/students/User-Info">
                    <i class="fa-solid fa-user"></i>
                    <span class="nav-item">User</span>
                </a>
                <span class="tooltip">User</span>
            </li>
            <li>
                <a href = "/students/Announcement">
                    <i class="fa-solid fa-bullhorn"></i>
                    <span class="nav-item">Announcement</span>
                </a>
                <span class="tooltip">Announcement</span>
            </li>
            <li>
                <a href = "/students/Calendar">
                    <i class="fa-solid fa-calendar"></i>
                    <span class="nav-item">Calendar</span>
                </a>
                <span class="tooltip">Calendar</span>
            </li>
            <li>
                <a href = "/students/Time-Logs">
                    <i class="fa-solid fa-clock"></i>
                    <span class="nav-item" style="height:50px;">Time Record</span>
                </a>
                <span class="tooltip">Time Record</span>
            </li>
            
            <li>
                <a href = "/studentlogout">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="nav-item">Logout</span>
                </a>
                <span class="tooltip">Logout</span>
            </li>
        </ul>
    </div>
     <div class="main-content">
        <div class="Calendar1">
            <h1 id = "CalendarHeader" >Calendar</h1>
                 
                <div class="DateClickedBG"></div>
                <button onclick="window.location.href = '/student/calendar'" class="button notesb">+ Add Notes</button> 
                <div class="DateClicked"></div>
                <div class="calendarBGS"></div>
                <div class="calendarBG">
                    <div class="Upcoming">
                        <p>Upcoming Events:</p>
                    </div>                                 
                    <div class="calendar">
                        <div class="header">
                            <button id= "PrevM">❮</button>
                                <h2 id="month-year"></h2>
                            <button id= "NextM">❯</button>
                        </div>
                        <div class="days-of-week">
                            <div class="day-of-week">Sun</div>
                            <div class="day-of-week">Mon</div>
                            <div class="day-of-week">Tue</div>
                            <div class="day-of-week">Wed</div>
                            <div class="day-of-week">Thu</div>
                            <div class="day-of-week">Fri</div>
                            <div class="day-of-week">Sat</div>
                        </div>                    
                    <div class="days">

                    </div>
                </div>
            </div>    
        </div>
    </div>

    <!-- JavaScript From Pareng GPT -->

    <script>
        let btn = document.querySelector('#btn');
        let sidebar = document.querySelector('.sidebar');

        btn.onclick = function () {
            sidebar.classList.toggle('active');
        }
        document.addEventListener('DOMContentLoaded', function () {
    updateCalendar();

    document.getElementById('PrevM').addEventListener('click', function () {
            console.log("Previous Month button clicked");
            previousMonth();
        });

        document.getElementById('NextM').addEventListener('click', function () {
            console.log("Next Month button clicked");
            nextMonth();
        });

});

function updateCalendar() {
    const currentDate = new Date();
    const year = currentDate.getFullYear();
    const month = currentDate.getMonth();

    const firstDay = new Date(year, month, 1);
    const lastDay = new Date(year, month + 1, 0);

    document.getElementById('month-year').textContent = `${getMonthName(month)} ${year}`;

    const daysContainer = document.querySelector('.days');
    daysContainer.innerHTML = '';

    for (let i = 0; i < firstDay.getDay(); i++) {
        const emptyDay = createEmptyDay();
        if (emptyDay !== null) {
            daysContainer.appendChild(emptyDay);
        }
    }

    for (let i = 1; i <= lastDay.getDate(); i++) {
        const day = createDay(i);
        daysContainer.appendChild(day);
    }
}


function createDay(dayNumber) {
    const day = document.createElement('div');
    day.className = 'day';
    day.textContent = dayNumber;

    // Check if the day is not empty before attaching the click event
    if (dayNumber !== null) {
        day.addEventListener('click', function () {
            // Print the clicked number in the DateClicked div
            document.querySelector('.DateClicked').textContent = `${dayNumber}`;
        });
    }

    if (dayNumber === 1) {
        day.classList.add('first-day');
    }


    return day;
}

function createEmptyDay() {
    return null;
}


function getMonthName(month) {
    const monthNames = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    ];
    return monthNames[month];
}

function previousMonth() {
    const currentMonth = document.getElementById('month-year').textContent;
    const [month, year] = currentMonth.split(' ');
    const currentDate = new Date(`${month} 1, ${year}`);
    currentDate.setMonth(currentDate.getMonth() - 1);
    updateCalendar(currentDate);
}

function nextMonth() {
    const currentMonth = document.getElementById('month-year').textContent;
    const [month, year] = currentMonth.split(' ');
    const currentDate = new Date(`${month} 1, ${year}`);
    const newDate = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 1);
    updateCalendar(newDate);
}

    </script>


</body>
</html>