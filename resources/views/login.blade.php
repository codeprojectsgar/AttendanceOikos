<!doctype html>
<html lang="en">
    <head>
        <title>Login</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            *{
                padding:0;
                margin:0;
                box-sizing: border-box;
                font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }
            body{
                min-height:100vh;
                display:flex;
                background-color:skyblue;
            }
            .log-container{
                position:relative;
                flex-grow:2;
                border-radius:0em 1.3em 1.3em 0em; /*top left top right bottom left bottom right*/
                background-color:white;
                display:flex;
                flex-direction:column;
                box-shadow: 3vh 0 20px rgb(33,33,33,0.7);
            }
            .log-container .logo-header{
                align-self:center;
            }
            .form-container{
                align-self:center;
                width:60%;
            }
            label{
                font-size:1.2em;
                transform:translateY(10px);
            }
            .logo-container{
                flex-grow:5;
                display:flex;
                justify-content:end;
                align-items:center;
            }
            .input-group{
                margin-bottom:20px;
                height:2.4rem;
                border:none;
                box-shadow: 10px 0 20px rgba(33, 33, 33, 0.247);
            }
            p{
                font-size:1.1rem;
            }
            button{
                width:6rem;
                height:2.5rem;
                border:none;
                background-color:#59a3cd;
                color:white;
                border-radius:10px;
                opacity:100%;
                transition:opacity 250ms ease-in-out;
            }
            button:hover{
                opacity:50%;
            }
        </style>
    </head>
    <body>
        <div class="log-container">
            <br><br>
            <div class="logo-header">
                <img src="" alt="Some image">
            </div>
            <br><br><br><br><br><br><br>
            <div class="form-container">
                <center>
                    <h1>Login</h1>
                </center>
                <br>
                <form id="login-form" autocomplete="off">
                    <label for="email" >Email</label>
                    <input type="text" id="email" class="input-group">
                    <label for="password" >Password</label>
                    <input type="password" id="password" class="input-group">
                    <br>
                    <center>
                        <p>Forgot Password?<a href="/forgot"> Retrieve Account</a></p>
                    </center>
                    <br>
                    <center>
                        <button onclick="submitForm()">SUBMIT</button>
                    </center>
                </form>
            </div>
        </div>
        <div class="logo-container">
            For the logo
        </div>
        <!-- Optional JavaScript -->
        <script>
            function submitForm(){

            }
        </script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>