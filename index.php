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
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    html {
        min-height: 100%;
        position: relative;
    }

    .container {
        width: 100%;
        height: 100%;
    }

    .container::after {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 100%;
        background: url('./bg.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        z-index: -1;
        filter: blur(10px);
    }


    form {
        margin-top: 180px;
    }

    .row {
        display: flex;
        margin-bottom: 30px;
        flex-direction: row;
    }

    .passwordLabel,
    .emailLabel {
        flex: 1;
        color: #67727e;
        font-family: 'Yeon Sung', cursive;
        font-weight: 400;
        font-size: 20px;
        display: block;
    }

    .passwordBox,
    .emailBox {
        flex: 3;
    }

    .passwordInputCentering,
    .emailInputCentering {
        margin: auto;
        width: 350px;
        position: relative;
    }

    .passwordInputCentering .showpassword {
        position: absolute;
        right: 10px;
        top: 20px;
        color: #333333;
        font-family: 'Yeon Sung', cursive;
        font-weight: 400;
        font-size: 20px;
        cursor: pointer;
    }

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
        transition: all 0.2s;
        width: 100%;
    }

    .passwordInput:hover,
    .emailInput:hover {
        cursor: pointer;
        background-color: #eeeeee;
    }


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

    .error {
        color: white;
        padding: 1em;
        font-family: 'Yeon Sung', cursive;
        width: 100%;
        font-weight: 400;
        font-size: 20px;
    }

    .invalid {
        width: 1290px;
        display: none;
        margin-bottom: 20px;
        text-align: center;
    }

    .visible {
        display: block;
    }

    .spacewidth {
        width: 1400px;
    }

    .space {
        width: 500px;
        margin: auto;
        display: flex;
        flex-direction: row;
        margin-top: 30px;
        margin-bottom: 30px;
        align-items: center;
    }

    .space .horizontalLine {
        color: white;
        background-color: white;
        height: 3px;
        flex: 3;
    }

    .space span {
        text-align: center;
        flex: 1;
        color: white;
    }

    .signupbutton {
        border: none;
        font-family: 'Yeon Sung', cursive;
        font-weight: 400;
        font-size: 20px;
        color: white;
        background-color: transparent;
        cursor: pointer;
    }

    @media screen and (max-width: 4000px) {
        .row {
            justify-content: center;
            align-items: center;
        }

        .passwordLabel,
        .emailLabel {
            text-align: center;
        }
    }

    @media screen and (max-width: 800px) {
        form {
            margin-top: 80px;
        }

        .row {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            flex-direction: column;
            height: 150px;
        }

        .passwordLabel,
        .emailLabel {
            flex: 1;
        }

        .passwordBox,
        .emailBox {
            flex: 1;
            width: 100%;
        }


        .passwordInputCentering,
        .emailInputCentering {
            margin: auto;
            width: 320px;
            position: relative;
        }

        

        .invalid {
            width: 100%;
            display: none;
            margin-bottom: 20px;
            text-align: center;
        }

        .visible {
            display: block;
        }

        .buttoncenterdiv {
            width: 100%;
            text-align: center;
        }

        .spacewidth {
            width: 100%;
        }

        .space {
            width: 420px;
            margin: auto;
            display: flex;
            flex-direction: row;
            margin-top: 30px;
            margin-bottom: 30px;
            align-items: center;
        }

        .space .horizontalLine {
            color: white;
            background-color: white;
            height: 3px;
            flex: 3;
        }

        .space span {
            text-align: center;
            flex: 1;
            color: white;
        }
        
    }
    @media screen and (max-width: 400px) {
        form {
            margin-top: 80px;
        }

        .row {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            flex-direction: column;
            height: 150px;
        }

        .passwordLabel,
        .emailLabel {
            flex: 1;
        }

        .passwordBox,
        .emailBox {
           
            flex: 1;
            width: 100%;
        }

        .passwordInputCentering,
        .emailInputCentering {
            
            margin: auto;
            width: 220px;
            position: relative;
        }

        .invalid {
            width: 100%;
            display: none;
            margin-bottom: 20px;
            text-align: center;
        }

        .visible {
            display: block;
        }

        .buttoncenterdiv {
            width: 100%;
            text-align: center;
        }

        .spacewidth {
            width: 100%;
        }

        .space {
            width: 240px;
            margin: auto;
            display: flex;
            flex-direction: row;
            margin-top: 30px;
            margin-bottom: 30px;
            align-items: center;
        }

        .space .horizontalLine {
            color: white;
            background-color: white;
            height: 3px;
            flex: 3;
        }

        .space span {
            text-align: center;
            flex: 1;
            color: white;
        }
    }
    </style>
</head>

<body>
    <div class="container">
        <form action="index.php" method="post">
            <div class="row">
                <label class="emailLabel">Email</label>
                <div class="emailBox">
                    <div class="emailInputCentering">
                        <input class="emailInput" type="email" name="email" value="<?php echo $email ?>"
                            placeholder="Email...">
                        <?php if (!(empty($errors)) && !(empty($errors['email']))): ?>
                        <span class="<?php echo $errorclass ?>">
                            <?php echo $errors['email'] ?>
                        </span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <label class="passwordLabel">Password</label>
                <div class="passwordBox">
                    <div class="passwordInputCentering">
                        <input class="passwordInput" type="password" name="password" value="<?php echo $password ?>"
                            placeholder="Password...">
                        <span class="showpassword" onclick="passworddecrypt()">show</span>
                        <?php if (!(empty($errors)) && !(empty($errors['password']))): ?>
                        <span class="<?php echo $errorclass ?>">
                            <?php echo $errors['password'] ?>
                        </span>
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
                    <hr class="horizontalLine">
                    <span>Or</span>
                    <hr class="horizontalLine">
                </div>
            </div>


            <div class="buttoncenterdiv">
                <button class="signupbutton" name="signupfrormlogin">SignUp first To Login</button>
            </div>

        </form>
    </div>
    <script>
    function passworddecrypt() {
        var password = document.getElementsByClassName('passwordInput');
        if (password[0].type == "password") {
            password[0].type = "text";
        } else {
            password[0].type = "password";
        }
    }
    </script>
</body>

</html>