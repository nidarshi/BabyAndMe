          <html>
		  <head>
                      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		      <script>
            $(document).ready(function(){
                $('#password,#password-confirm').on('keyup',function(){
                    if($('#password').val()===$('#password-confirm').val() ){
                      
                        $('#message').html('Password Verified').css('color','green');
                    }else{
                      
                        $('#message').html('Enter the same password').css('color','red');
                    
                    }
                });
      });
    
    </script>
	</head>
	<body>
	<form>
            <label for="password" class="required control-label">Password</label><br>
            <input type="password" value="<?php echo isset($_POST["password"]) ? $_POST["password"] : ''; ?>"class ="form-control" name="password" id="password" required placeholder="Enter the valied Password" ><br>
            
            <label for="conpassword" class="required control-label">Confirm Password</label><br>
            <input type="password" value="<?php echo isset($_POST["password_confirmation"]) ? $_POST["password_confirmation"] : ''; ?>" class ="form-control" name="password_confirmation" id="password-confirm" required placeholder="Enter the Same Password"><br>
            
            <span id ="message">
                 <input type="text" name="message" value="" />
            </span>
                       
                
                
                
	</form>
    </body>
</html>
