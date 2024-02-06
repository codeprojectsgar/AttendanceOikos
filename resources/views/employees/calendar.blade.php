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
    <title>Oikos Student: User Info</title>
    <style>
        .container{
            margin-top:.5em;
            padding:1em;
            background-color:white;
            display:flex;
            flex-direction:column;
        }
        #container-title{
            font-weight: 400;
            border-bottom:1px solid #dedede;
            color:#323468;
        }
    </style>
</head>
<body>
    @include('component.employee.sidenav')
    <div class="main-content">
        <h1>Calendar</h1>
        <div class="container">
            <h3 id=container-title>Employee Details</h3>
            <div class="field-group">
                <input type="text">
                <input type="text">
                <input type="text">
            </div>
            <div class="field-group">

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