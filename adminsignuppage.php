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

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Yeon Sung', cursive;
        }
        :root {
            --White: hsl(0, 0%, 100%);
            /*--Grayish-Blue: hsl(211, 10%, 45%);*/
            --Grayish-Blue: #67727e;
            --light-grayish-blue: #AFB0E9;

            --Moderate-blue: #5457B6;

            --Dark-blue: #42556C;
            /*--Moderate-blue: hsl(238, 40%, 52%);*/
            /*--Very-light-gray: hsl(228, 33%, 97%);*/
            --Very-light-gray: #f5f6fa;

            --light-gray: #42556c;

            --Soft-red: #ed6468;
        }

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

        form {
            margin-top: 180px;
        }

        .row {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 30px;

        }

        .lastNameLabel,
        .firstNameLabel,
        .passwordLabel,
        .emailLabel {
            flex: 1;
            text-align: center;
            color: white;
            font-family: 'Yeon Sung', cursive;
            font-weight: 400;
            font-size: 20px;
            display: block;

        }

        .lastNameBox,
        .firstNameBox,
        .passwordBox,
        .emailBox {
            flex: 3;
        }

        .lastNameInputCentering,
        .firstNameInputCentering,
        .passwordInputCentering,
        .emailInputCentering {
            margin: auto;
            width: 350px;
            position: relative;
        }

        .passwordInputCentering .showpassword {
            position: absolute;
            right: -40px;
            top: 20px;
            color: #333333;
            font-family: 'Yeon Sung', cursive;
            font-weight: 400;
            font-size: 20px;
            cursor: pointer;
        }

        .lastNameInput,
        .firstNameInput,
        .passwordInput,
        .emailInput {
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
        .error{
            color: #ed6468;
            padding: 1em;
            font-family: 'Yeon Sung', cursive;
            width: 100%;
            font-weight: 400;
            font-size: 20px;
        }

        .lastNameInput:hover,
        .firstNameInput:hover,
        .passwordInput:hover,
        .emailInput:hover {
            cursor: pointer;
            background-color: #eeeeee;
        }


        .lastNameInput:focus,
        .firstNameInput:focus,
        .passwordInput:focus,
        .emailInput:focus {
            cursor: text;
            color: #333333;
            background-color: white;
            border-color: #333333;
        }

        .buttoncenterdiv {
            width: 1400px;
            text-align: center;
        }

        .loginbutton {
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

        .loginbutton:active {
            border-color: #333333;
            border-radius: 10px;
            background-color: white;
            color: #333333;
        }     
    </style>
</head>

<body>
    <form action="adminsignuppage.php" method="post">
        <div class="row">
            <label class="firstNameLabel">FirstName</label>
            <div class="firstNameBox">
                <div class="firstNameInputCentering">
                    <input class="firstNameInput" name="firstname" type="text" placeholder="FirstName...">
                    <?php if (!(empty($errors)) && !(empty($errors['firstname']))): ?> 
                    <span class="<?php echo $errorclass ?>"><?php echo $errors['firstname'] ?></span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <label class="lastNameLabel">LastName</label>
            <div class="lastNameBox">
                <div class="lastNameInputCentering">
                    <input class="lastNameInput" name="lastname" type="text" placeholder="LastName...">
                    <?php if (!(empty($errors)) && !(empty($errors['lastname']))): ?> 
                    <span class="<?php echo $errorclass ?>"><?php echo $errors['lastname'] ?></span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <label class="emailLabel">Email</label>
            <div class="emailBox">
                <div class="emailInputCentering">
                    <input class="emailInput" name="email" type="email" placeholder="Email...">
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
                    <input class="passwordInput" name="password" type="password" placeholder="Password...">
                    <span class="showpassword" onclick="passworddecrypt()">show</span>
                    <?php if (!(empty($errors)) && !(empty($errors['password']))): ?> 
                    <span class="<?php echo $errorclass ?>"><?php echo $errors['password'] ?></span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="buttoncenterdiv">
            <button class="loginbutton" name="signup">Signup</button>
        </div>
        
    </form>
    <script>
        function passworddecrypt() {
            var password = document.getElementsByClassName('passwordInput');
            if (password[0].type == "password") {
                password[0].type = "text";
            }
            else {
                password[0].type = "password";
            }
        }
       
    </script>
</body>

</html>