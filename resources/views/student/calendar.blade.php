<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "/assets/Oikos Logo.png">
    <link rel="stylesheet" href = "/CSS/calendar.css">
    <link rel="stylesheet" href = "/CSS/student.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Importing full calendar--> 
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Oikos Student: Calendar</title>
</head>
<body>
    @include('component.student.sidenav')
    <div class="main-content">
        <div class="Calendar1">
            
        </div>
    </div>

    <!-- JavaScript From Pareng GPT -->

    <script>
        let btn = document.querySelector('#btn');
        let sidebar = document.querySelector('.sidebar');

        btn.onclick = function () {
            sidebar.classList.toggle('active');
        }
        const calendar = document.querySelector('.Calendar1');
        let fullCalendar= new FullCalendar.Calendar(calendar,{
            intialView:'timeGridWeek',
            selectable:true,
            dateClick:function (info){
                console.log(info);
            }
        });
        fullCalendar.render();
    </script>


</body>
</html>