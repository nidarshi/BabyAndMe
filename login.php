<?php
include('login_controller.php'); // Includes Login Script
    if(isset($_SESSION['login_user'])){

    header("location: guardian_dashboard.php"); // Redirecting To Profile Page
    }
?>

<!doctype html>

<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">

<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Login Page</title>

    <link rel="shortcut icon" href="https://demo.learncodeweb.com/favicon.ico">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
            
    <style>

            table {
              width:100%;
            }
            td {
              width: 33.333% ;
            }
            img{
                width:40px;
                height:40px;
            }
            .head{

                    padding-left: 15px;
                    padding-right:  15px;
                    font-family:   Candara;
                    color:#41beec;

            }
            .heada {
              color:#757575;
              text-decoration: none;
            }
            .heada:hover {
             color:#41beec;
             text-decoration: none;
            }


          .card-body{
              background-color: #ffffff;
          }
          .card{
              box-shadow: 12px 12px 12px #b3b3b3;
          }
          input[type=text],input[type=password]{
              border:0;
              outline: 0;
              border-radius:0;
              background: transparent;
              border-bottom: 1px solid black;
              width:80%;
          }
        </style>
</head>

<body>
	<header>
 		<div class="head">
                    <br>
			<table >
				
				<tr>
					<td style="text-align:left; font-size: 18px;"><b><p>Welcome</p></b></td>
					<td style="text-align:center; "><img src="images/babyandme.png"></td>
                                        <td style="text-align:right;"><b><a href="signup.php" class="heada">SignUp&nbsp;&nbsp;</a><spam style="color: black;">|</spam><a href="login.php" class="heada">&nbsp;&nbsp;&nbsp;&nbsp;Login&nbsp;&nbsp;&nbsp;&nbsp;</a></b></td>
				</tr>
			</table>
		</div>
            <br>
	</header>
    
    
   	<div class="container" >

		<div class="card">
                        <div class="card-header"><i class="fa fa-user icon"></i> <strong>User Login</strong> </div>

			<div class="card-body">
				
				<div class="col-sm-12" >

                                    <form method="get" action ="guardian_dashboard.php">

						<div class="form-group">

							<label>User Name <span class="text-danger">*</span></label>

							<input type="text"  class="form-control" name="username" id="username" placeholder="User Name" required>

						</div>
						
						<div class="form-group">

							<label>Password <span class="text-danger">*</span></label>

							<input type="password"  class="form-control" name="password" id="password" placeholder="Password" required>

						</div>

						<div class="form-group" align="center">
                                                       <br> 
							<button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary" style="width: 400px;"> Login</button>
                                                       <br> 
                                                        <a href="#">Forget Password ?</a>
						</div>

					</form>

				</div>

			</div>

		</div>

	</div>
  <footer>
      <div>
          <br>
          <hr>
        <p style="text-align:center;">@ copyright 2020</p>
      </div>
  </footer>
</body>

</html>