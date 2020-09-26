<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Header Footer</title>
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
                    width:125px;
                    height:40px;

            }
            .head{
                    margin-top:15px;
                    margin-bottom:15px;
                    font-family:Candara;
                    color:#41beec;
                    padding-left: 10px;
                    padding-right: 10px;
            }
            .heada {
              color:#757575;
              text-decoration: none;
            }
            .heada:hover {
             color:#41beec;
             text-decoration: none;
            }
            ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            border: 1px solid #e7e7e7;
            background-color:#e6e6e6;
          }

          li {
            float: left;
          }

          li a {
            display: block;
            color:  #262626;
            text-align: center;
            padding: 10px 10px;
            text-decoration: none;
          }

          li a:hover:not(.active) {
            background-color: #ddd;
            text-decoration: none;
            
          }

          li a.active {
            color: white;
            background-color: #41beec;
           text-decoration: none;
          }
          .card-body{
              background-color: #ffffff;
          }
          .card{
              box-shadow: 12px 12px 12px #b3b3b3;
          }
        </style>
    </head>
<body>
	<header>
      
		<div class="head">
			<table>
				<tr>  
					<td style="text-align:left;"><a href="design.php" ><img src="images/logo.jpg"></a></td>
					<td style="text-align:center;"></td>
                                        <td style="text-align:right;"><b><a href="" class="heada">H.A.N. Hapuarachchi&nbsp;&nbsp;&nbsp;&nbsp;</a><spam style="color: black;">|</spam><a href="login.php" class="heada">&nbsp;&nbsp;&nbsp;&nbsp;Logout&nbsp;&nbsp;&nbsp;&nbsp;</a></b></td>
				</tr>
                                
			</table>
		</div>
            <ul>
                <li><a class="active" href="#home">Home</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">About</a></li>
            </ul>
            <br> 
	</header>

    
      
   	<div class="container">

		<div class="card">

			<div class="card-header"><i class="fa fa-fw fa-plus-circle"></i> <strong>Guardians Registration</strong> </div>

			<div class="card-body">

				

				<div class="col-sm-6">

                                        <form method="post" action="register_controller.php">

						<div class="form-group">

							<label>Name With Initials<span class="text-danger">*</span></label>

							<input type="text" name="name" id="name" class="form-control" placeholder="Enter name with initials" required>
                                                       
						</div>

                                            	<div class="form-group">

							<label>Date of Birth<span class="text-danger">*</span></label>

							<input type="date" name="dob" id="dob" class="form-control" placeholder="Enter Date of Birth" required>
                                                       
						</div>
						<div class="form-group">

							<label>Email <span class="text-danger">*</span></label>

							<input type="email" name="email" id="email" class="form-control" placeholder="Enter user email" required>
                                                    
						</div>
						<div class="form-group">

							<label>NIC <span class="text-danger">*</span></label>

							<input type="text" name="nic" id="nic" class="form-control" placeholder="Enter NIC Number" required>
                                                    
						
						
						<div class="form-group">

							<label>User Name <span class="text-danger">*</span></label>

							<input type="text"  class="tel form-control" name="username" id="userphone" x-autocompletetype="tel" placeholder="Enter user name" required>
                                                      
						</div>
						
						<div class="form-group">

							<label>Password <span class="text-danger">*</span></label>

							<input type="password"  class="form-control" name="password" id="password" placeholder="Enter user password" required>
                                                    <span id ="message"></span>
						</div>
                                                                                                                                      
                                                <div class="form-group">

							<label>Confirm Password <span class="text-danger">*</span></label>

							<input type="password"  class="form-control" name="cpassword" id="cpassword"  placeholder="Confirm your password" required>
                                                   <span id ="message"></span>
			
                                               </div>
                        
						<div class="form-group" >
                                                        <button type="reset" name="clear" value="submit" id="clear" class="btn btn-danger"><i class="fa fa-fw fa-plus-circle"></i>Clear</button>
							<button style="float:right" type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle" onclick="return function()"></i> Sign Up</button>
                                                        
						</div>

					</form>

				</div>

			</div>

		</div>

	</div>
        </div>
        

    
        <footer>
            <br>
            <hr> 
        <p style="text-align:center;">@ copyright 2020</p>
        </footer>
    


</body>
</html>

