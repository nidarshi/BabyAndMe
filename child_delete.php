<!doctype html>

<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">
  
<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Sign Up Page</title>
<link rel="shortcut icon" href="https://demo.learncodeweb.com/favicon.ico">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>
<style>
    table {
 
  width:100%;
}
td {
  width: 33.333% ;
}
img{
	width:60px;
	height:60px;
	
}
.head{
	margin-top:25px;
	height:100px;
	color:#034596;
        text-transform: capitalize;
}
.content{
        color:#034500;
        height:400px;

}
</style>
<script>
function DateFunction() {
  document.getElementById("dob").value = "";
}
</script>

<body>
	<header>
        <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Home Page</title>

		<div class="head">
			<table >
				
				<tr>
					<td style="text-align:left;"><p>&nbsp;&nbsp;&nbsp;&nbsp;Welcome</p></td>
					<td style="text-align:center;"><img src="images/babyandme.png"></td>
					<td style="text-align:right;"><a href="">SignUp&nbsp;&nbsp;</a>|<a href="">&nbsp;&nbsp;&nbsp;&nbsp;Login&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
				</tr>
			</table>
		</div>
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

							<label>Full Name<span class="text-danger">*</span></label>

							<input type="text" name="fname" id="fname" class="form-control" placeholder="Enter full name" required>
                                                       
						</div>
                                            	<div class="form-group">

							<label>Date of Birth<span class="text-danger">*</span></label>

							<input type="date" name="dob" id="dob" class="form-control" placeholder="Enter Date of Birth" required>
                                                       
						</div>
						<div class="form-group">

							<label>Profile Picture <span class="text-danger">*</span></label>

							<input type="file" name="image" accept="images/* id="image class="form-control" required>
                                                    
						</div>
						

						<div class="form-group" >
                                                        <button type="reset" name="clear" value="submit" id="clear" class="btn btn-danger"><i class="fa fa-fw fa-plus-circle"></i>Clear</button>
							<button style="float:right" type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i> Register</button>
                                                        
						</div>

					</form>

				</div>

			</div>

		</div>

	</div>

  <footer>
        <p style="text-align:center;">@ copyright 2020</p>
  </footer>
</body>

</html>

