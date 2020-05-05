

<!DOCTYPE html>
<html>
<head>
	<script language="javascript">
function check()
{
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
	
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		// e1=e.indexOf('.');
		// e2=e.indexOf('.',e1+1);
		// n=e.length;

		if(f1>0 && f2<0) //&& e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
}
check();
</script>
<title>Login/Registration Form </title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Simple Login and Signup Form web template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.9.1.min.js"></script>
<!--// js -->
<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
 <link href="//fonts.googleapis.com/css?family=Questrial" rel="stylesheet">

 <style type="text/css">
 option{
color: black;
}
.username1{

padding: 0.7em 1em;
    margin: 1em 0em 1em 0;
    color: #fff;
    width: 90.5%;
    background: transparent;
    border: 1px solid #d9d9ce;
    font-size: 0.85em;
    outline: none;
    letter-spacing: 1px;

}
</style>

</head>
<body class="bg agileinfo">
   <h1 class="agile_head text-center">Login/Registration Form </h1>
   <div class="w3layouts_main wrap">
    <!--Horizontal Tab-->
        <div id="parentHorizontalTab_agile">
            <ul class="resp-tabs-list hor_1">
                <li>LogIn</li>
                <li>SignUp</li>
                <li>Facilty Login </a></li>
            </ul>
            <div class="resp-tabs-container hor_1">
               <div class="w3_agile_login">
                    <form action="verify.php" method="post" class="agile_form" >
					  <p>username</p>
					  <input type="text" name="user1" required="required" class="username1">
					  <p>Password</p>
					  <input type="password" name="password1" required="required" class="password" /> 
					  <div class="check">
				            <label class="checkbox w3"><input type="checkbox" name="checkbox" required="required" ><i> </i>I accept the terms and conditions</label>
					 </div>			
					  <input type="submit" value="LogIn" class="agileinfo" />
					</form>
					 <div class="login_w3ls">
				        <a href="#">Forgot Password</a>
					 </div>
                    
                </div>
                <div class="agile_its_registration">
                    <form   action ="main.php"method="post" class="agile_form" name="form1" onSubmit="return check();">
					  <p>Username</p>
					  <input type="text" name="user1" required="required" />
					  <p>name</p>
					  <input type="text" name="name" required="required" />
					  <p>branch</p>
					  <select name="branch" required="required" class="username1">
	
	                        <option value="Automobile engineering"> Automobile engineering</option>
	                        <option value="Civil engineering"> Civil engineering</option>
	                        <option value="Computer engineering"> Computer engineering</option>
	                        <option value="Electrical engineering"> Electrical engineering</option>
	                        <option value="Electronic And Communication"> Electronic And Communication</option>
	                        <option value="Mechanical engineering"> Mechanical engineering</option>
	                        <option value=" Information Technology"> Information Technology</option>
	
                      </select><br>
                      <p>Semester</p>
                      <select name="semester" required="required" class="username1">
	
	                   <option value="1"> 1</option>
	                   <option value="2"> 2</option>
	                   <option value="3"> 3</option>
	                   <option value="4"> 4</option>
	                   <option value="5"> 5</option>
	                   <option value="6"> 6</option>
	                   <option value="7"> 7</option>
	                   <option value="8"> 8</option>
	
                      </select><br>
					  <p>Email</p>
					  <input type="text" name="email" required="required" />
					  <p>Password</p>
					  <input type="password" name="password1" required="required">
					  <p>Phone No</p>
					  <input type="text" name="mobileno" required="required" class="username1"><br>
         	  			<div class="check w3_agileits">
							<label class="checkbox w3"><input type="checkbox" name="checkbox" required="required" ><i> </i>I accept the terms and conditions</label>
						</div>
					   <input type="submit" value="Signup"/>
                                                <a href="C:\xampp\htdocs\elearning\student.html">
					   <input type="reset" value="Reset" />
					</form> 
				</div>
 				<div class="w3_agile_login">
                    <form action="fverify.php" method="post" class="agile_form" >
					  <!-- <p>Facultyname</p>
					  <input type="text" name="user1" required="required" /> -->
					  <p>Email</p>
					  <input type="text" name="email1" required="required" class="username1">
					  <p>Password</p>
					  <input type="password" name="password1" required="required" class="password" /> 
					  <div class="check">
							<label class="checkbox w3l"><input type="checkbox" name="checkbox" required="required"><i> </i>I accept the terms and conditions</label>
					 </div>
					  <input type="submit" value="LogIn" class="agileinfo" />
					</form>
					 <div class="login_w3ls">
				        <a href="#">Forgot Password</a>
					 </div>
                    
                </div>

            </div>
        </div>
		 
    </div>
	<!-- <div class="agileits_w3layouts_copyright text-center">
			<p>© 2019 Registration/Login Form. All rights reserved | Designed by <a>Team Code maker</a></p>
	</div> -->

<script src="js/easyResponsiveTabs.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	//Horizontal Tab
	$('#parentHorizontalTab_agile').easyResponsiveTabs({
		type: 'default', //Types: default, vertical, accordion
		width: 'auto', //auto or any width like 600px
		fit: true, // 100% fit in a container
		tabidentify: 'hor_1', // The tab groups identifier
		activate: function(event) { // Callback function if tab is switched
			var $tab = $(this);
			var $info = $('#nested-tabInfo');
			var $name = $('span', $info);
			$name.text($tab.text());
			$info.show();
		}
	});
});
</script> --><!--
<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}
		function validatePassword(){
			var pass2=document.getElementById("password2").value;
			var pass1=document.getElementById("password1").value;
			if(pass1!=pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');	 
				//empty string means no validation error
		}

</script>
</body>
</html>


