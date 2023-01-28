<?php include("path.php"); ?>
<?php include(ROOT_PATH . "user.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Yeon+Sung&display=swap');

        html {
            height: 100%;
        }

        body {
            background-image: url('./study.jpg');
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        form{
            margin-top: 180px;
        }

        .row{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 30px;
            
        }
        .passwordLabel,.emailLabel{
            flex: 1;
            text-align: center;
            color: white;
            font-family: 'Yeon Sung', cursive;
            font-weight: 400;
            font-size: 20px;
            display: block;
            
        }
        .passwordBox,.emailBox{
            flex: 3;
        }
        
        .passwordInputCentering,.emailInputCentering{
            margin: auto;
            width: 350px;
            position: relative;
        }
        .passwordInputCentering .showpassword{
            position: absolute;
            right: -40px;
            top: 20px;
            color: #333333;
            font-family: 'Yeon Sung', cursive;
            font-weight: 400;
            font-size: 20px;
            cursor: pointer;
        }

        .passwordInput , .emailInput{
            background-color: #dddddd;
            color: #666666;
            padding: 1em;
            border-radius: 10px;
            border: 2px solid transparent;
            outline: none;
            font-family: 'Yeon Sung', cursive;
            font-weight: 400;
            font-size: 20px;
            line-height: 1.4;
            width: 100%;
            transition: all 0.2s;
        }

        .passwordInput:hover , .emailInput:hover{
            cursor: pointer;
            background-color: #eeeeee;
        }

        
        .passwordInput:focus , .emailInput:focus {
            cursor: text;
            color: #333333;
            background-color: white;
            border-color: #333333;
        }
        .buttoncenterdiv{
            width: 1400px;
            text-align: center;
        }
        .loginbutton{
            border-radius: 10px;
            border: 2px solid transparent;
            outline: none;
            padding: 1rem;
            background-color: #dddddd;
            color: #666666;
            font-family: 'Yeon Sung', cursive;
            font-weight: 400;
            font-size: 20px;
            transition: all 0.2s;
        }
        .loginbutton:active{
            border-color: #333333;
            border-radius: 10px;
            background-color: white;
            color: #333333;
        }

        .error{
            color: white;
            padding: 1em;
            font-family: 'Yeon Sung', cursive;
            width: 100%;
            font-weight: 400;
            font-size: 20px;
        }
        .invalid{
            width: 1290px;
            display: none;
            margin-bottom: 20px;
            text-align: right;
        }
        .visible{
            display: block;
        }

        .spacewidth{
            width: 1400px;
        }
        .space{
            width: 500px;
            margin: auto;
            display: flex;
            flex-direction: row;
            margin-top: 30px;
            margin-bottom: 30px;
            align-items: center;
        }
        .space .horizontalLine{
            color: white;
            background-color: white;
            height: 3px;
            flex:3;
        }    
        .space span{
            text-align: center;
            flex: 1;
            color: white;
        }
        .signupbutton{
            border: none;
            font-family: 'Yeon Sung', cursive;
            font-weight: 400;
            font-size: 20px;
            color: white;
            background-color: transparent;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <form action="adminloginpage.php" method="post">
        <div class="row">
            <label class="emailLabel">Email</label>
            <div class="emailBox">
                <div class="emailInputCentering">
                    <input class="emailInput" type="email" name="email" value="<?php echo $email ?>" placeholder="Email...">
                    <?php if (!(empty($errors)) && !(empty($errors['email']))): ?> 
                    <span class="<?php echo $errorclass ?>"><?php echo $errors['email'] ?></span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <label class="passwordLabel">Password</label>
            <div class="passwordBox">
                <div class="passwordInputCentering">
                    <input class="passwordInput" type="password" name="password" value="<?php echo $password ?>"  placeholder="Password...">
                    <span class="showpassword" onclick="passworddecrypt()">show</span>
                    <?php if (!(empty($errors)) && !(empty($errors['password']))): ?> 
                    <span class="<?php echo $errorclass ?>"><?php echo $errors['password'] ?></span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php if (!(empty($errors)) && !(empty($errors['emailandpasswordinvalid']))): ?> 
        <div class="invalid <?php echo $errors['emailandpasswordinvalid'] ?>">
            <span class="error">invalid username or password</span>
        </div>
        <?php endif; ?>
        <div class="buttoncenterdiv">
            <button class="loginbutton" name="login">Login</button>
        </div>

        <div class="spacewidth">
            <div class="space">
                <hr class="horizontalLine" >
                <span>Or</span>
                <hr class="horizontalLine" >
            </div>
        </div>
        
        
        <div class="buttoncenterdiv">
            <button class="signupbutton" name="signupfrormlogin">SignUp first To Login</button>
        </div>
      
    </form>
    <script>
        function passworddecrypt(){
            var password = document.getElementsByClassName('passwordInput');
            if(password[0].type == "password"){
                password[0].type= "text";
            }
            else{
                password[0].type="password";
            }
        }
    </script>
</body>

</html>


