<html>
<head>
<title>Schedulr-Login</title>


<link rel="stylesheet" type="text/css" href="theme/css/style.css" />

</head>
<body>



<div class="container loginPage">

    <div class='logo-wrapper'>
    <div class="logo-icon">P</div>
    <div class='logo-text'>Pace <strong>Counter</strong></div>

</div>

<div class='punch-line'>
        ... For your <strong> daily </strong> milestones.

</div>

                        <div id="loginForm" class="pc-box form">
                            <form  action="system/loginHandler.php" method='post'> 
                                <h1>Log in</h1> 
                                <p> 
                                    <input id="username" name="username" required type="text"/>
                                </p>
                                <p> 
                                    <input id="password" name="password" required type="password"/> 
                                </p>
                          
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                
                            </form>
                        </div>

                        <div id="registerForm" class="pc-box form">
                       
                            <form  action="system/signupHandler.php" method="post"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="username" required type="text"  />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="email" required type="email"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="password" required type="password"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="confirm_password" required type="password" />
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                               
                            </form>
                        </div>
						
                    </div>
</body>



</html>