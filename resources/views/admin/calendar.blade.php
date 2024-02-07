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
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Oikos Admin: Calendar</title>


    <style>
        body {
            background-color: #f6f6f6;
        }

        .select_cover{
            display: flex;
            justify-content: center;
            align-items: center;
            float: left;
            margin-top: 3em;
            margin-left: 3em;
            border-radius: 50px;
            height: 45rem;
            width: 60rem;
            background-color: white;
            padding: auto;
            text-align: center;
        }


        .delete_cover{
            padding-top:10rem;
            justify-content: center;
            align-items: center;
            float: left;
            margin-top: 3em;
            margin-left: 3em;
            border-radius: 50px;
            height: 45rem;
            width: 60rem;
            background-color: white;
            padding: auto;
            text-align: center;
            
        }
        .delete_cover button{
            height:5.5rem;
            width:11rem;
            font-size:2.5rem;
            border-radius:20px;
            margin:2.5rem;
           
        }

        .delete_cover .yes{
            background-color:green;
            color:white;
            transition-duration: .5s;
        }

        .delete_cover .yes:hover{
            
            height:5.8rem;
            width:11.2rem;
            background-color:white;
            color:green ;
            transition-duration: .5s;
        }

        .delete_cover .no{
            background-color:red;
            color:white;
            transition-duration: .5s;
        }

        .delete_cover .no:hover{
            
            height:5.8rem;
            width:11.2rem;
            background-color:white;
            color:red ;
            transition-duration: .5s;
        }

        .c_container {
            float: right;
            height: 52rem;
            width: 35rem;
            margin-top:-5rem;
            margin-right: 0rem;
            background: white;
            border-radius: 20px;
        }

        #calendar {
            height: 28.5em;
            width: 30.5rem;
            margin: 2rem;
            background-color: white;
        }

        .events_summ {
            padding: 2rem;
            display: flex;
            justify-content: space-between;
        }

        .circle {
            height: 1rem;
            width: 1rem;
            background-color: red;
            border-radius: 100%;
            white-space: nowrap;
        }

        h3 {
            margin: 0%;
        }
        .button_cont{
            width:auto;
           
        }
        .option{
        margin-right: 20em; /* Adjust the margin as needed */
        display: inline-block;
        height:4rem;
        font-size:1.2rem;
        width:12rem;
        border-radius:10px;
        cursor: pointer;
        background-color:#23255D;
        color:white;
        transition-duration:0.2s;
        ;
}
        .option:hover{
            background-color:white;
            color:#23255D;
}
        
        .chosen{
            float: left;
            margin-top:3em;
            margin-left:3em;
            border-radius:50px;
            height: 45rem;
            width: 60rem;
            background-color: white;
            text-align: center;

        }
        
        .chosen h1{
            margin-top:1rem;

        }       
        .chosen h2 {
        margin-top: 1rem; /* Adjust margin as needed */
        padding-top:1rem;
        white-space: normal;
        }
        
        .content{
            margin-left:2rem;
           
            text-align:left;
            white-space: normal;
            
            
        }
        
        .content2{
            margin-left:2rem;
           
            text-align:left;
            white-space: normal;
            
            
        }
        .content2 input{
            
            border-radius:5px;
            height:1.5rem;
            font-size:20px;
            border: 1px solid #DDDDDD;
            color:black;
        }

        .content2 button{
            float:right;
            margin-top:0.5rem;
            margin-right:5rem;
            height:3rem;
            width:6rem;
            border-radius:10px;
            background-color:green;
            color:white;
            border-style: 1px solid #DDDDDD ;
            cursor:pointer;
            transition-duration: .7s;
            
        }
        .content2 button:hover{
            transition-duration: .7s;
            color:green;
            background-color:white;
        }

        .content span{
            font-weight:lighter;
            border-bottom: 1px solid; 
            
            width: 52.4rem; /* Set width to auto to extend up to the very right */
            padding-bottom: 2px;
            display:inline-block
            


        }
        .message{
            height:14rem;
            width:54rem;
            background-color:#f2f2f2;
            overflow:auto;
            border-radius:20px ;
        }
        
        .flex-container {
        display: flex;
        }

        
        
    </style>
</head>
<body>
    
    @include('component.admin.sidenav')
   
    <div class="main-content">
        <h1>Calendar</h1>
        <div class="button_cont">
        <button class="option"style="margin-right: 2em;"> ADD EVENT</button>
        <button class="option "style="margin-right: 2em;"> DELETE EVENT</button>
        <button class="option" style="margin-right: 2em;"> EDIT EVENT</button>
        </div>

        <!--cover-->
        <div class="select_cover" style="display:none;" >
            <h1 style="font-size:4rem; color:#d9d9d9;">SELECT DATE</h1>
            
        </div>
        <!--DELETING-->
        <div class="delete_cover"style="display:none;" >
            <h1 style="font-size:3rem;">ARE YOU SURE TO DELETE?</h1>
            <br>
            <h1 style="font-size:2.9rem;">TITLE</h1><br>
            <h2 style="font-size:2.5rem; font-weight: lighter;">(DATE)</h2>
            <button class="yes">YES</button>
            <button class="no"> NO</button>


        </div>

        <div class="chosen" >
            <h1> Day of the Week</h1>
            
            <h2>01/01/2001</h2>

            <!--This is Viewiing-->
        <div class="content" style="display:none;" >
        <h2> Title: <span>This is the Sample of a title</span></h2>
        <h2> Subject: <span style = "width: 50rem;">This is the Sample of a Subject</span></h2>
            <div class="flex-container">
                <h2 > Duration:<span style="width: 22.1rem; margin-bottom:0em"> Thiasdasdasd</span> </h2>
                <h2> Venue:  <span style="width: 22.1rem;">This</span></h2>
            </div>
        <h2> Theme: <span style = "width: 50.5rem;">Galaga</span></h2>
       
        <h2> Message:</h2>
        <div class="message">

            
        </div> 
        </div>
        <!-- Input Event-->

        <div class="content2" id="edit"style="display:none;" >
            <form>
            <h2> Title: <input type="text" id="title" name="title" style="width:50rem;" ></h2>
            <h2> Subject: <input type="text" id="subject" name="subject"  style="width:47.7rem;"></h2>
                <div class="flex-container">
                    <h2 > Duration:<input type="text" id="duration" name="duration" style="width:20rem;"></h2>
                    <h2 style="margin-left:1.8rem;"> Venue:  <input type="text" id="venue" name="venue" style="width:20.2rem;"></h2>
                </div>
            <h2> Theme: <input type="text" id="theme" name="theme" style="width:48.2rem;"></h2>
           
            <h2> Message:</h2>
            <div class="message" style=" background-color:white;">
                <textarea id="w3review" name="w3review" rows="10" cols="76" style="font-size:20px; border-radius:20px;max-height:12.5rem;border: 1px solid #DDDDDD; color:black; "></textarea>
            </div>

            <button>POST</button>
            </form>
        </div>
        <!-- Add-->
        <div class="content2" id="add" >
            <form>
            <h2> Title: <input type="text" id="title" name="title" style="width:50rem;" ></h2>
            <h2> Subject: <input type="text" id="subject" name="subject"  style="width:47.7rem;"></h2>
                <div class="flex-container">
                    <h2 > Duration:<input type="text" id="duration" name="duration" style="width:20rem;"></h2>
                    <h2 style="margin-left:1.8rem;"> Venue:  <input type="text" id="venue" name="venue" style="width:20.2rem;"></h2>
                </div>
            <h2> Theme: <input type="text" id="theme" name="theme" style="width:48.2rem;"></h2>
           
            <h2> Message:</h2>
            <div class="message" style=" background-color:white;">
                <textarea id="w3review" name="w3review" rows="10" cols="76" style="font-size:20px; border-radius:20px;max-height:12.5rem;border: 1px solid #DDDDDD; color:black; "></textarea>
            </div>

            <button>POST</button>
            </form>
        </div>

        

    </div>
    





        <div class="c_container">
            <div id='calendar'></div>
            <h2 style="padding-left:2rem; color:#9f9f9f;">Upcoming events</h2>
            <div class="events_summ">
                <div class="circle"></div>
                <h3>Sample Event title </h3>
                <p>1/1/2021</p>
                
                
            </div>
        </div>
    </div>


    <script>



        document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth'
        });
        calendar.render();
        });



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