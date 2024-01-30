<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="CSS/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <div class="boxbg">
        <img src="/assets/Oikos Logo.png" alt="Some image">
        <h1>Login</h1>
			<label for="EI">Email:</label>
				<input type="text" id="EI" class="input-group"/>
                <small id="email-error"></small>
			<label for="PI">Password:</label>
				<input type="password" id="PI" class="input-group"/>
                <small id="password-error"></small>
                <small id="user-error"></small>

            <br>
            <a href="/forgot">Forgot Password?</a>

        <button onclick="handleForm()" class="button sbutton">SUBMIT</button>
    </div>
    <div class="bgbox">
        <img src = "/assets/Oikos BG.png" alt = "Image">
    </div>

    <!-- Optional JavaScript -->
    <script>
        let email_field=document.getElementById('EI');
        let pass_field=document.getElementById('PI');
        let error=document.getElementById('user-error');
        let csrf=document.querySelector("meta[name='csrf-token']")
        function submitForm(email_data,pass_data){
            fetch('/login-user', {
                method:'POST', 
                headers:{'Content-Type':'application/json', 'X-CSRF-Token': csrf.content},
                body: JSON.stringify({'email': email_data, 'password': pass_data})
            })
            .then(response => response.json())
            .then(data => {
                if(data.success && data.role===1){
                    window.location.href='/admin/dashboard'
                }
                else{
                    error.textContent="Incorrect Credentials!";
                }
            })
            .catch(error => {
                console.error('Error Loging In', error)
            })
        } 
        //This is the handleForm button event when clicked
        function handleForm(){
            let email = email_field.value;
            let password = pass_field.value;
            let email_err_field=document.getElementById('email-error')
            let pass_err_field=document.getElementById('password-error');
            if(password.length===0){
                pass_err_field.textContent="Password is required!";
            }
            if(email.length===0){
                email_err_field.textContent="Email is required!";
            }
            else{
                pass_err_field.textContent="";
                email_err_field.textContent="";
                submitForm(email,password);
            }
        }
    </script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>