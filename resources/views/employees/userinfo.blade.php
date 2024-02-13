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
    <title>Oikos Employee: User Info</title>
    <style>
        .container{
            margin-top:1em;
            padding:1em;
            display:flex;
        }
        .side-nav{
            background-color:white;
            border-radius:5px;
            display:flex;
            flex-direction:column;
            width:15%;
            min-height:55em;
        }
        .fa-chevron-right{
            opacity:0;
        }
        .fa-chevron-right.show-arrow{
            opacity:1;
        }
        .selector{
            color:#323468;
            padding:1.2em;
            display:flex;
            justify-content: space-evenly;
            border-bottom:1px solid #c4c4c4;
        }
        .selector:hover{
            border-left:5px solid #323468;
            cursor:pointer;
        }
        .selector.active-div{
            border-left:5px solid #323468;
        }
        .employee-container,.family-container,.experience-container ,.reference-container, .education-container{
            margin-left:1em;
            position:absolute;
            visibility:hidden;
            width:85%;
            padding:1em;
            background-color:white;
            opacity:0;
            border-radius:5px;
            transition: opacity 400ms ease-in-out;
        }
        .field-group{
            margin-top:2em;
            display:flex;
        }
        #container-title{
            font-weight: 400;
            border-bottom:1px solid #dedede;
            color:#323468;
        }
        .input-group{
            padding:.8em;
            width:25%;
            display:flex;
            flex-direction:column;
        }
        .input-group-special{
            padding:.8em;
            width:50%;
            display:flex;
            flex-direction:column;
        }
        .input-group-single{
            padding:.8em;
            width:75%;
            display:flex;
            flex-direction:column;
        }
        .input-group .input-field,.input-group-special .input-field,.input-group-single .input-field{
            border:none; 
            font-size:1rem;
            border-bottom:1px solid #dedede;
        }
        .show{
            position:relative;
            opacity: 1;
            visibility:visible;
        }
        label{
            margin-top:.5em;
            color:#c4c4c4;
        }
    </style>
</head>
<body>
    @include('component.employee.sidenav')  
    @include('component.employee.export_toaster') 
    <div class="main-content">
        <h1>User</h1>
        <div class="container">
            <div class="side-nav">
                <div class="personal selector active-div" onclick="selectInput('.personal','.personal-i','.employee-container')">
                    Personal Information 
                    <i class="personal-i fas fa-chevron-right show-arrow"></i>
                </div> 
                <div class="background selector" onclick="selectInput('.background','.background-i','.family-container')">
                    Family Background
                    <i class="background-i fas fa-chevron-right"></i>
                </div> 

                <div class="education selector" onclick="selectInput('.education','.education-i','.education-container')">
                    Education
                    <i class="education-i fas fa-chevron-right"></i>
                </div> 

                <div class="experience selector" onclick="selectInput('.experience','.experience-i','.experience-container')">
                    Work Experience
                    <i class="experience-i fas fa-chevron-right"></i>
                </div> 
                <div class="reference selector" onclick="selectInput('.reference','.reference-i','.reference-container')">
                    References
                    <i class="reference-i fas fa-chevron-right"></i>
                </div> 
            </div>
            <!-- Container for employee details -->
            <div class="employee-container show">
                <h3 id=container-title>Employee Details</h3>
                <div class="field-group">
                    <div class="input-group">
                        <input type="text" class='input-field' id='last-name' value="Lupin" readonly>
                        <label for="last-name">Last Name</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='first-name' value="Copernicus" readonly >
                        <label for="first-name">First Name</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='middle-name' value="Vincent" readonly >
                        <label for="middle-name">Midde Name</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='extension' value="III" readonly >
                        <label for="extension">Extension</label>
                    </div>
                </div>
                <div class="field-group">
                    <div class="input-group">
                        <input type="date" class='input-field' id='birthdate' value="August-20-2001" readonly >
                        <label for="birthdate">Birthdate</label>
                    </div>
                    <div class="input-group-special">
                        <input type="text" class='input-field' id='phone-number' value="09154054370" readonly >
                        <label for="phone-number">Phone Number</label>
                    </div>
                </div>
                <div class="field-group">
                    <div class="input-group-single">
                        <input type="text" class='input-field' id='address' value="1 Riyal Street CBE Town Brgy Pasong Tamo Quezon City" readonly >
                        <label for="address">Address</label>
                    </div>
                </div>
                <div class="field-group">
                    <div class="input-group">
                        <input type="text" class='input-field' id='city' value="Quezon City" readonly >
                        <label for="city">City</label>
                    </div>
                    <div class="input-group-special">
                        <input type="text" class='input-field' id='region' value="NCR" readonly >
                        <label for="region">Region</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='postal' value="1101" readonly >
                        <label for="postal">Postal Code</label>
                    </div>
                </div>
                <div class="field-group">
                    <div class="input-group">
                        <input type="text" class='input-field' id='country' value="Philppines" readonly >
                        <label for="country">Country</label>
                    </div>
                    <div class="input-group-special">
                        <input type="text" class='input-field' id='nationality' value="Russian" readonly >
                        <label for="nationality">Nationality</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='sex' value="Male" readonly >
                        <label for="sex">Sex</label>
                    </div>
                </div>
                <div class="field-group">
                    <div class="input-group-special">
                        <input type="text" class='input-field' id='email' value="lupinIII@gmail.com" readonly >
                        <label for="email">Email</label>
                    </div>
                    <div class="input-group-special">
                        <input type="text" class='input-field' id='telephone' value="N/A" readonly >
                        <label for="telephone">Telephone Number</label>
                    </div>
                </div>
            </div>
            <!-- container for family backgroud-->
            <div class="family-container ">
                <h3 id=container-title>Father's Name</h3>
                <div class="field-group">
                    <div class="input-group">
                        <input type="text" class='input-field' id='last-name' value="Lupin" readonly>
                        <label for="last-name">Last Name</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='first-name' value="Rudeus" readonly >
                        <label for="first-name">First Name</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='middle-name' value="Cooperfield" readonly >
                        <label for="middle-name">Midde Name</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='extension' value="N/A" readonly >
                        <label for="extension">Extension</label>
                    </div>
                </div>
                <br>
                <h3 id=container-title>Mother's Name</h3>
                <div class="field-group">
                    <div class="input-group">
                        <input type="text" class='input-field' id='last-name' value="Vincent" readonly>
                        <label for="last-name">Last Name</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='first-name' value="Slyphy" readonly >
                        <label for="first-name">First Name</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='middle-name' value="Sydney" readonly >
                        <label for="middle-name">Midde Name</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='extension' value="N/A" readonly >
                        <label for="extension">Extension</label>
                    </div>
                </div>
                <br>
                <h3 id=container-title>Spouse's Details</h3>
                <div class="field-group">
                    <div class="input-group">
                        <input type="text" class='input-field' id='last-name' value="Spiegel" readonly>
                        <label for="last-name">Last Name</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='first-name' value="Spike" readonly >
                        <label for="first-name">First Name</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='middle-name' value="Cole" readonly >
                        <label for="middle-name">Midde Name</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='extension' value="N/A" readonly >
                        <label for="extension">Extension</label>
                    </div>
                </div>
                <div class="field-group">
                    <div class="input-group-special">
                        <input type="text" class='input-field' id='email' value="Software Developer" readonly >
                        <label for="email">Occupation</label>
                    </div>
                    <div class="input-group-special">
                        <input type="text" class='input-field' id='telephone' value="InnovativeTech" readonly >
                        <label for="telephone">Employer / Bussiness Name</label>
                    </div>
                </div>
                <div class="field-group">
                    <div class="input-group-special">
                        <input type="text" class='input-field' id='email' value="Don Antonio Holy Spirit" readonly >
                        <label for="email">Bussiness Address</label>
                    </div>
                    <div class="input-group-special">
                        <input type="text" class='input-field' id='telephone' value="N/A" readonly >
                        <label for="telephone">Telephone No. ie:(02)00-0000</label>
                    </div>
                </div>
            </div>
            <!-- EDUCATION BACKG-->
                            <!--1st education-->
            <div class="education-container ">
                <h3 id=container-title>Educational Background</h3><br>
                <h3 style=" margin-top:1rem; margin-bottom:-1rem; text-align:center; font-weight:100;">JUNIOR HIGH</h3>
                <div class="field-group">
                    <div class="input-group">
                        <input type="text" class='input-field' id='school_one_name' value="Siena College" readonly>
                        <label for="school_one_name">School</label>
                    </div>
                    
                    <div class="input-group">
                        <input type="text" class='input-field' id='school_one_year' value="2001 - 2015" readonly >
                        <label for="year">Year</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='school_one_contact' value="Mr Joshimiy Gibbs" readonly >
                        <label for="contact">Contact Person</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='school_one_number' value="09154054370" readonly >
                        <label for="number">Phone Number</label>
                    </div>
                </div>          
                <div class="field-group">
                    <div class="input-group-single">
                        <input type="text" class='input-field' id='school_one_address' value="1 Riyal Street CBE Town Brgy Pasong Tamo Quezon City" readonly >
                        <label for="address">Address</label>
                    </div>
                </div>

                <!--2nd education-->
                <h3 style=" margin-top:1rem; margin-bottom:-1rem; text-align:center; font-weight:100;">SENIOR HIGH</h3>
                <div class="field-group">
                    <div class="input-group">
                        <input type="text" class='input-field' id='school_two_name' value="Siena College" readonly>
                        <label for="school_two_name">School</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='school_two_year' value="2001 - 2015" readonly >
                        <label for="year">Year</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='school_two_contact' value="Mr Joshimiy Gibbs" readonly >
                        <label for="contact">Contact Person</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='school_two_number' value="09154054370" readonly >
                        <label for="number">Phone Number</label>
                    </div>
                </div>
                            
                <div class="field-group">
                    <div class="input-group-single">
                        <input type="text" class='input-field' id='school_two_address' value="1 Riyal Street CBE Town Brgy Pasong Tamo Quezon City" readonly >
                        <label for="address">Address</label>
                    </div>
                </div>

                <!--3rd education-->
                <h3 style=" margin-top:1rem; margin-bottom:-1rem; text-align:center; font-weight:100;">COLLEGE</h3>
                <div class="field-group">
                    <div class="input-group">
                        <input type="text" class='input-field' id='school_three_name' value="Siena College" readonly>
                        <label for="school_three_name">School</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='school_three_year' value="2001 - 2015" readonly >
                        <label for="first-name">Year</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='school_three_contact' value="Mr Joshimiy Gibbs" readonly >
                        <label for="middle-name">Contact Person</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='school_three_number' value="09154054370" readonly >
                        <label for="extension">Phone Number</label>
                    </div>
                </div>
                            
                <div class="field-group">
                    <div class="input-group-single">
                        <input type="text" class='input-field' id='school_three_address' value="1 Riyal Street CBE Town Brgy Pasong Tamo Quezon City" readonly >
                        <label for="address">Address</label>
                    </div>
                </div>
            </div>
            <!--Work Experience-->
            <!--Company 1-->
            <div class="experience-container ">
                <h3 id=container-title>Work Experience</h3>
                <h3 style=" margin-top:1rem; margin-bottom:-1rem; text-align:center; font-weight:100;">COMPANY 1</h3>
                <div class="field-group">
                    <div class="input-group">
                        <input type="text" class='input-field' id='exp_one_company' value="Umbrella corp." readonly>
                        <label for="Company Name">Company name</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='exp_one_title' value="Assistant Researcher" readonly >
                        <label for="title/position">title/position</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='exp_one_contact' value="Mr. Alber Wesker" readonly >
                        <label for="contact">contact person </label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='exp_one_description' value="Medicine Development" readonly >
                        <label for="description">Description</label>
                    </div>
                </div>
                <!--Company 2-->
                <div class="field-group">
                    <div class="input-group">
                        <input type="text" class='input-field' id='exp_one_duration' value="1 to 3 years" readonly >
                        <label for="Duration">Duration</label>
                    </div>
                    <div class="input-group-special">
                        <input type="text" class='input-field' id='exp_one_number' value="09154054370" readonly >
                        <label for="phone-number">Phone Number4</label>
                    </div>
                </div>
                <div class="field-group">
                    <div class="input-group-single">
                        <input type="text" class='input-field' id='exp_one_address' value="4221 raccoon City" readonly >
                        <label for="address">address</label>
                    </div>
                </div>
                
                <!--Company 3-->
                <h3 style=" margin-top:1rem; margin-bottom:-1rem; text-align:center; font-weight:100;">COMPANY 2</h3>
                <div class="field-group">
                    <div class="input-group">
                        <input type="text" class='input-field' id='exp_two_company' value="Oikos" readonly>
                        <label for="Company Name">Company name</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='exp_two_title' value="Front-end Developer" readonly >
                        <label for="title/position">title/position</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='exp_two_contact' value="Jonel Rubio" readonly >
                        <label for="contact">contact person </label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='exp_two_description' value="Website Development" readonly >
                        <label for="description">Description</label>
                    </div>
                </div>
                
                <div class="field-group">
                    <div class="input-group">
                        <input type="text" class='input-field' id='exp_two_duration' value="2023 - 2024" readonly >
                        <label for="Duration">Duration</label>
                    </div>
                    <div class="input-group-special">
                        <input type="text" class='input-field' id='exp_two_number' value="09154054370" readonly >
                        <label for="phone-number">Phone Number4</label>
                    </div>
                </div>
                <div class="field-group">
                    <div class="input-group-single">
                        <input type="text" class='input-field' id='exp_two_address' value="Gotesco Grand Central 1400,  Caloocan City" readonly >
                        <label for="address">address</label>
                    </div>
                </div>

                
                <h3 style=" margin-top:1rem; margin-bottom:-1rem; text-align:center; font-weight:100;">Company 3</h3>
                <div class="field-group">
                    <div class="input-group">
                        <input type="text" class='input-field' id='exp_three_company' value="marine" readonly>
                        <label for="Company Name">Company name</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='exp_three_title' value="Front-end Developer" readonly >
                        <label for="title/position">title/position</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='exp_three_contact' value="Jonel Rubio" readonly >
                        <label for="contact">contact person </label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='exp_three_description' value="Website Development" readonly >
                        <label for="description">Description</label>
                    </div>
                </div>
                <div class="field-group">
                    <div class="input-group">
                        <input type="text" class='input-field' id='exp_three_duration' value="2023 - 2024" readonly >
                        <label for="Duration">Duration</label>
                    </div>
                    <div class="input-group-special">
                        <input type="text" class='input-field' id='exp_three_number' value="09154054370" readonly >
                        <label for="phone-number">Phone Number4</label>
                    </div>
                </div>
                <div class="field-group">
                    <div class="input-group-single">
                        <input type="text" class='input-field' id='exp_three_address' value="Gotesco Grand Central 1400,  Caloocan City" readonly >
                        <label for="address">address</label>
                    </div>
                </div>
            </div>


            

            <!--REFERENCE-->
            <!--Reference 1-->
            <div class="reference-container ">
                <h3 id=container-title>References</h3>
                <h3 style=" margin-top:1rem; margin-bottom:-1rem; text-align:center; font-weight:100;">REFERENCE 1</h3>
                <div class="field-group">
                    <div class="input-group">
                        <input type="text" class='input-field' id='reference-one-name' value="Lupin" readonly>
                        <label for="name"> Name</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='reference-one-company' value="Copernicus" readonly >
                        <label for="company">Company Name</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='reference-one-numbers' value="6546547" readonly >
                        <label for="middle-name">Contact Numbers</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='reference-one-relation' value="Boss" readonly >
                        <label for="relation">Relation</label>
                    </div>
                </div>
                <div class="field-group">
                    <div class="input-group">
                        <input type="text" class='input-field' id='reference-one-position' value="CEO" readonly >
                        <label for="position">Position</label>
                    </div>
                
                </div>
                <!--Reference 2-->
                <h3 style=" margin-top:1rem; margin-bottom:-1rem; text-align:center; font-weight:100;">REFERENCE 2</h3>
                <div class="field-group">
                    <div class="input-group">
                        <input type="text" class='input-field' id='reference-twp-name' value="amanda" readonly>
                        <label for="name"> Name</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='reference-two-company' value="Copernicus" readonly >
                        <label for="company">Company Name</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='reference-two-numbers' value="321346541325" readonly >
                        <label for="middle-name">Contact Numbers</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='reference-two-relation' value="Assistant" readonly >
                        <label for="relation">Relation</label>
                    </div>
                </div>
                <div class="field-group">
                    <div class="input-group">
                        <input type="text" class='input-field' id='reference-two-position' value="assistant head" readonly >
                        <label for="position">Position</label>
                    </div>
                
                </div>
                
                <!--Reference 3-->
                
               
                <h3 style=" margin-top:1rem; margin-bottom:-1rem; text-align:center; font-weight:100;">REFERENCE 3</h3>
                <div class="field-group">
                    <div class="input-group">
                        <input type="text" class='input-field' id='reference-three-name' value="Lupin" readonly>
                        <label for="name"> Name</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='reference-three-company' value="Umbrella" readonly >
                        <label for="company">Company Name</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='reference-three-numbers' value="0915577121" readonly >
                        <label for="middle-name">Contact Numbers</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class='input-field' id='reference-three-relation' value="Co-worker" readonly >
                        <label for="relation">Relation</label>
                    </div>
                </div>
                <div class="field-group">
                    <div class="input-group">
                        <input type="text" class='input-field' id='reference-three-position' value="medicine assistant" readonly >
                        <label for="position">Position</label>
                    </div>
                
                </div>
                
                
            </div>


        </div>
    </div>


    <script>
        let btn = document.querySelector('#btn');
        let sidebar = document.querySelector('.sidebar');

        btn.onclick = function () {
            sidebar.classList.toggle('active');
        }
        
        function selectInput(div,div_i,selectDisplay){
            let prevDisplay=document.querySelector(".show");
            let targetDisplay=document.querySelector(selectDisplay);
            let activeDiv=document.querySelector('.active-div');
            let showedDiv=document.querySelector('.show-arrow');
            let targetDiv=document.querySelector(div);
            let targetDivI=document.querySelector(div_i);
            activeDiv.classList.remove('active-div');
            showedDiv.classList.remove('show-arrow');
            targetDiv.classList.add('active-div');
            targetDivI.classList.add('show-arrow');
            prevDisplay.classList.remove('show');
            targetDisplay.classList.add('show');
        }
    </script>


</body>
</html>