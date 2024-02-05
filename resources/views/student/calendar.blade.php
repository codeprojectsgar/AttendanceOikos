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
    @include('component.student.sidenav')
    <div class="main-content">
        <div class="Calendar1">
            <h1 id = "CalendarHeader" >Calendar</h1>
                <div class="DateClickedBG"></div>
                <button onclick="openAddNotesPopup()" class="button notesb">+ Add Notes</button>
                <div class="DateClicked">
                    <div id="selectedMonth"></div>
                    <div class="DateClickedText"></div>
                </div>
                
                <div class="calendarBGS"></div>
                <div class="calendarBG">
                    <div class="calendar3D">
                    </div>
                    <div class="Upcoming">
                        <p>Upcoming Events:</p>                        
                    </div>
                    <div class="AEvents">                        
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

function updateCalendar(date) {
    const currentDate = date || new Date();
    const year = currentDate.getFullYear();
    const month = currentDate.getMonth();

    const firstDay = new Date(year, month, 1);
    const lastDay = new Date(year, month + 1, 0);

    document.getElementById('month-year').textContent = `${getMonthName(month)} ${year}`;
    document.getElementById('selectedMonth').textContent = getMonthName(month);

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
            document.querySelector('.DateClickedText').textContent = `${dayNumber}`;
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

function openAddNotesPopup() {
            Swal.fire({
                title: 'Add Notes',
                html: '<input type="date" id="eventDate" placeholder="Event Date" class="swal2-input">' +
                    '<input type="text" id="eventDescription" placeholder="Event Description" class="swal2-input">' +
                    '<input type="color" id="textColorPicker" placeholder="Text Color" class="swal2-input">',
                confirmButtonText: 'Add',
                preConfirm: () => {
                    const eventDate = document.getElementById('eventDate').value;
                    const eventDescription = document.getElementById('eventDescription').value;
                    const textColor = document.getElementById('textColorPicker').value;
                    if (!eventDate || !eventDescription) {
                        Swal.showValidationMessage('Please fill in all fields');
                    }
                    return { eventDate, eventDescription, textColor };
                }
            }).then(result => {
                if (result.isConfirmed) {
                    const { eventDate, eventDescription, textColor } = result.value;
                    // Update the upcoming events section with the new event
                    updateUpcomingEvents(eventDate, eventDescription, textColor);
                    // Clear the input fields
                    document.getElementById('eventDate').value = '';
                    document.getElementById('eventDescription').value = '';
                    document.getElementById('textColorPicker').value = '#000000'; // Set default color
                }
            });
        }

        function updateUpcomingEvents(eventDate, eventDescription, textColor) {
            // Create a new event element
            const eventElement = document.createElement('div');
            eventElement.className = 'upcoming-event';
            eventElement.innerHTML = `<p style="color:${textColor}">${eventDate}: ${eventDescription}</p>`;

            // Append the new event to the Upcoming Events section
            const upcomingEventsSection = document.querySelector('.AEvents');
            upcomingEventsSection.appendChild(eventElement);
        }

    </script>


</body>
</html>