<!doctype html>
<html lang="en">
  <head>
    <title>Reset Password</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>

    *{
      font-family: sans-serif;
    }

body {
      background-color: green;
      margin: 0;
      padding: 0;
      display:flex;
    }

    .cont1 {
      position: relative;
      height: 100vh;
      width: 69vh;
      border-top-right-radius: 40px 40px;
      border-bottom-right-radius: 40px 40px;
      background-color: #E6E6E6;
      float: left;
      box-shadow: 6vh 0 20px rgba(33, 33, 33, 0.67);
      display:flex;
      flex-direction: column;
      align-items: center;
    }
    .logo{
      font-size:30px;
    }
    .form{
      margin-top:24%;
      font-size: 40px;

    }
    
    .form-group{
      font-size:1.5rem;
      width:100%;

    }
    input{
      width:100%;
      border-radius:20px;
      border-style:none;
      background-color: #ECECEC;

    }
        .textbox-email{
    width: 60%;
    max-width: 400px;
    padding: 10px 20px;
    border: none;
    box-shadow: 0 0 6px rgba(0, 0, 0, 0.2);
    border-radius: 0%;
    font-size: 14px;
    color: #a1a1a1;
    justify-content: left;
    display: flex;
    margin: 10%;
  }
  .input-cont{
    margin-top:1%;
    width:75%;
    

  }
  label{
    transform:translateY(15px);
  }
  </style>
  </head>
  <body>
    <div class="cont1">
      <br><br>
    <div class="logo">Put logo here</div>

    <div class="form">
      <b> Reset Password</b>
      
    </div>
    <br>
    <form class="input-cont">
      <div class="form-group">
        <label for="email">Email address</label>
        
        <input type="email"style="height:2.4rem;">
      </div>
      <br>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" style="height:2.4rem;">
      </div>
      <center>
        <br><br>
      <button type="submit" class="btn btn-primary" style="border-radius:20px; font-size:1.5rem; background-color:#59A3CD;"><b>SUBMIT</b></button>
      </center>
    </form>



    </div>
    

      


    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>