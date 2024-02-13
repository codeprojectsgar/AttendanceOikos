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
    <title>Oikos Admin: Student Time Record</title>
    <style>
        .time-record,
        .tr-label {
            display: inline;
        }

        .section-header {
			margin: 20px;
			background-color: #323468;
			border-radius: 5px;
			height: 100px;

			header {
                padding-top: 25px;
				margin: 20px;
				display: flex;
				justify-content: space-between;

            }

            header .searchbox {
					display: flex;
					padding: 10px;
					background-color: #ffffff;
                    border: 1px solid #bbc3c9;
					border-radius: 5px;
					width: 25%;

                }
					
            .searchbox .icon {
						color: #bbc3c9;
						margin: 0 5px;
					}

					input.search-text {
                        border: none;
						background-color: inherit;
						font-size: 1em;
						font-weight: 600;
						outline: none;						
					}
				
			
		}
	
.section-header {
	header .app-list-options {
		display: flex;
		justify-items: center;
		align-items: center;

		.sort-dropdown {
			display: flex;
            background-color: #ffffff;
			border-radius: 5px;
			padding: 12px;
			color: black;
			font-size: 1em;
			font-weight: 600;
			.by,
			i {
				color: black;
				margin-left: 5px;
			}
			.drop select{
                border:none;
			}

            .GradeLevelDropdown{

                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 160px;
                overflow: auto;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .GradeLevelDropdown select{

            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;

            }
		}

		.icon {
			margin: 0 10px;
			padding: 10px;
			border-radius: 5px;
			box-shadow: 0px 1px 1px 1px rgba(181, 181, 181, 0.38);
			position: relative;
			color:#bbc3c9;
			
			&:first-child {				
				border-top-right-radius: 0;
				border-bottom-right-radius: 0;
			}
			
			&:last-child {				
				border-top-left-radius: 0;
				border-bottom-left-radius: 0;
			}
			
			&.selected {
				background-color: lighten(#565d68, 50%);
				color: lighten(#565d68, 20%);
			}
		}

		.display-group {
			display: flex;
			.icon {
				margin-right:0;
				margin-left: 0;
			}
		}
	}
}

.section-content{

    margin: 20px;
			background-color: #ffffff;
			border-radius: 5px;
			height: 500px;

}

.section-content .student-group{
            display:flex;
            flex-direction:column;
            margin-top:2em;
            padding:1em;
            background-color:white;
            width:100%;
        }

        .student-group .table-header{
            display:flex;
            justify-content: space-between;
        }
        .table-header .field-group{
            display:flex;
            justify-content: space-between;
            padding:.3em;
            width:15%;
            border-radius:10px;
            border:1px solid black;
        }
        .table-header .field-group{
            display:flex;
            justify-content: space-between;
            width:15%;
            border-radius:10px;
            border:1px solid black;
            transition:border 150ms ease-in-out;
        }
        .table-header .field-group input{
            border:none;
            width:90%;
        }
        .table-header .field-group input:focus{
            outline:none;
        } 
        #count{
            height:30px;
            width:30px;
            font-weight:lighter;
            font-size:1rem;
            color:white;
            display:flex;
            align-items:center;
            justify-content: center;
            border-radius:50%;
            background-color:#ff3131;
        }
        .attendance-type {
            padding: 10px;
        }

        .attendance-type th,
        .attendance-type td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        .attendance-type th {
            background-color: #323468;
            color: #fff;
        }

        .attendance-type tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .attendance-type tr:hover {
            background-color: #f1f1f1;
        }
        .fc{
            width:100%;
            height:50em;
        }
        .list{
            margin-top:1em;
            display:flex;
            flex-direction:column;
        }
        .list .data{
            display:flex;
            justify-content:flex-start;
            align-items: center;
            margin-top:.5em;
        }
        .list .data .point{
            height:.8em;
            width:.8em;
            border-radius:50%;
        }
        .list .data .date{
            margin-left:.5em;
        }
        .list .data .date{
            margin-left:.5em;
        }
        .list .data .event{
            margin-left:5em;
            color:#606360;
        }



    </style>
</head>
<body>
    @include('component.admin.sidenav')
   

    <div class="main-content">
        <h1 class="time-record"><a href = "/admin/Time_Record"  style = "color: rgba(100, 100, 100, 0.700); text-decoration: none;">Time Record ></a></h1>
        <h1 class="tr-label" style = "margin-left: 0.3em;">Student Logs</h1>
        <div class="container">

            <section class="section-header">

					<header>
                        
						<div class="searchbox">
							<input type="text" name="search" placeholder="Name of Student" class="search-text"> </input>
						</div>

						<div class="app-list-options">
							<div class="sort-dropdown" style="margin-right:20px;"> By <span class="by"> Grade Level </span> <i class="fa fa-sort-amount-desc" aria-hidden="true"></i>
                            <div class="drop"> <i class="fa fa-caret-down" aria-hidden="true"></i> </div>

                            
                            </div>
                            
                            <div class="sort-dropdown" style="margin-right:20px;"> By <span class="by"> Section </span> <i class="fa fa-sort-amount-desc" aria-hidden="true"></i>
								<div class="drop"> <i class="fa fa-caret-down" aria-hidden="true"></i> </div>
							</div>

                            <div class="sort-dropdown" style="margin-right:20px;"> Date <span class="by"> From </span> <i class="fa fa-calendar" aria-hidden="true"></i>
							</div>

                            <div class="sort-dropdown" style="margin-right:20px;"> Date <span class="by"> To </span> <i class="fa fa-calendar" aria-hidden="true"></i>
							</div>

                            <button class="sort-dropdown" style="background-color:#5C5EB3; margin-right:20px; color:white;"> Apply Filter
                            </button>
							
						</div>

					</header>

            </section>

            <section class="section-content">

            <div class="student-group">
                <div class="table-header">
                   
                </div>
                <div class="log-body">
                <table style = "width: 100%;" class="attendance-type">
                    <thead>
                        <tr>
                            <th colspan="4"></th>
                            <th colspan="2">Morning Attendance</th>
                            <th colspan="2">Afternoon Attendance</th>
                            <th colspan="2">Evening Attendance</th>
                        </tr>
                        <tr>
                            <th>Student Name</th>
                            <th>Grade & Section</th>
                            <th>Section</th>
                            <th>Date</th>
                            <th>In</th>
                            <th>Out</th>
                            <th>In</th>
                            <th>Out</th>
                            <th>In</th>
                            <th>Out</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>3</td>
                            <td>Honesty</td>
                            <td>2024-01-30</td>
                            <td>09:00 AM</td>
                            <td>01:00 PM</td>
                            <td>06:00 PM</td>
                            <td></td>
                            <td></td>
                            <td></td>
                   
                        </tr>
                        <tr>
                            <td>Miles Davis</td>
                            <td>2</td>
                            <td>Orange</td>
                            <td>2024-01-30</td>
                            <td>09:00 AM</td>
                            <td>01:00 PM</td>
                            <td>06:00 PM</td>
                            <td></td>
                            <td></td>
                            <td></td>
                      
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>

            </section>

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

    <script>
    function myFunction() {
    document.getElementById("displayGradeLevel").classList.toggle("show");
    }

    window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("GradeLevelDropdown");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
        }
        }
    }
    }
    </script>


</body>
</html>