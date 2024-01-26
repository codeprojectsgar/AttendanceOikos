<!doctype html>
<html lang="en">
  <head>
    <title>Forgot Password</title>
    <!-- Required meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            height: 100vh;
            display: flex;
            
        }
        .boxbg {
        border-radius: 0em 0.8em 0.8em 0em;
        background: repeating-linear-gradient(#d0d0e1, gray);
        padding: 12px;
        width: 28em;
        height: 100%; 
        box-shadow: 2vh 0 20px rgba(33, 33, 33, 0.7);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        }
        .bgbox {
        background-image: repeating-linear-gradient(to right, #072136, rgb(194, 199, 228));
        height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        left: 0;
        z-index: -1;

        }
        img {
            transform: translateX(22rem);
            width: 45em;
            aspect-ratio: 16/9;
        }
        h1 {
        font-family: sans-serif;  
        font-weight: bold; 
        color: black;
        font-size: 1.5rem;  
        margin-bottom: 2em; 
        }
        
        label {
        font-family: sans-serif;  
        font-weight: bold; 
        color: black;    
        font-size: 1rem;
        transform: translateY(1.5em) translateX(4.8em);
        align-self: flex-start;
        }
        
        #EI, #PI {
            border-radius: 25px;
            border: 2px solid gray;
            padding: 20px; 
            width: 300px;
            height: 15px;
            margin-top: 1em;
        }       
        #fpass{
        font-family: sans-serif;  
        font-weight: bold; 
        font-size: 12px; 
        color: black;    
        margin-left: 235px;
        margin-top: 20px;
        }
        
        #create{
        font-family: sans-serif;  
        font-weight: bold; 
        font-size: 18px; 
        color: black;    
        margin-left: 150px;
        margin-top: 20px;
        }
        
        .OL{
        margin-left: 35px; 
        margin-top: 20px;
        position: absolute;
        width: 300px;
        height: 150px;
        }
        
        .sbutton{
        border-radius: 25px;
        background-color: #336699; 
        color: white; 
        padding: 5px 20px; 
        cursor: pointer;
        font-weight: bold;
        margin-top: 3em;
        }
    </style>
</head>
  <body>

    <div class="boxbg">
        <h1>Forgot Password</h1>
			<label for="EI">Email:</label>
				<input type="text" id="EI"/>
			<label for="PI">Verification Code:</label>
				<input type="text" id="PI"/>
        <button onclick="submitForm()" class="button sbutton">SUBMIT</button>
    </div>
    <div class="bgbox">
        <img src = "/assets/Oikos BG.png" alt = "Image">
    </div>

    <!-- Optional JavaScript -->
    <script>
        const csrf = document.querySelector("meta[name = 'csrf-token']")
        function submitForm(){
            let x = document.querySelector("#EI")

            let y = document.querySelector("#PI")
            fetch("/submitcode", {
                method:'POST', 
                headers:{'Content-Type':'application/json', 'X-CSRF-Token': csrf.content},
                body: JSON.stringify({'email': x.value, 'code': y.value})
            })
            .then(response => response.json())
            .then(data => {
                console.log(data)
            })
            .catch(error => {
                console.log('ErrorSubmittingCode', error)
            })
        }
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>