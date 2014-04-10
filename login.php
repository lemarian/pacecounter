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
                                    <input id="username" name="uname" required type="text" placeholder='username'/>
                                </p>
                                <p> 
                                    <input id="password" name="upass" required type="password" placeholder='password'/> 
                                </p>
                          
                                <p class="login button"> 
                                    <input type="submit" value="Login" class='btn red full-width' /> 
								</p>
                                
                                <p>
                                    <a href='#' class='pc-link'  onclick='toogleLogin("register")'  >Register</a>
                                </p>
                            </form>
                        </div>

                        <div id="registerForm" class="pc-box form" style='display:none'>
                       
                            <form  action="system/signupHandler.php" method="post"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <input id="usernamesignup" name="uname" required type="text" placeholder="username" />
                                </p>
                                <p> 
                                    <input id="emailsignup" name="uemail" required type="email"  placeholder="email"/> 
                                </p>
                                <p> 
                                    <input id="passwordsignup" name="upass" required type="password"  placeholder="new password"/>
                                </p>
                                <p> 
                                    <input id="passwordsignup_confirm" name="confirm_password" required type="password"  placeholder="confirm password" />
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"  class='btn red full-width' /> 
								</p>
                                <p>
                                    <a href='#' class='pc-link' onclick='toogleLogin("login")' >Sign in</a>
                                </p>
                               
                            </form>
                        </div>
						
                    </div>
</body>


<script>
    

    function toogleLogin(cases)
    {
        document.getElementById('loginForm').style.display='none';
        document.getElementById('registerForm').style.display='none';

        switch (cases)
        {
            case "login":
                document.getElementById('loginForm').style.display='block';
            break;

            case "register":
                document.getElementById('registerForm').style.display='block';
            break;

            default:
            console.log('Bad Case' + cases);
        }
    }
</script>

</html>