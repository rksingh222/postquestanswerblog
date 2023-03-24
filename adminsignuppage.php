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

    * {
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

    }

    .lastNameLabel,
    .firstNameLabel,
    .passwordLabel,
    .emailLabel {
        flex: 1;
        text-align: center;
        color: #67727e;
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
        right: 10px;
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

    .error {
        color: white;
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

    .signupbutton {
        cursor: pointer;
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

    .signupbutton:active {
        border-color: #333333;
        border-radius: 10px;
        background-color: white;
        color: #333333;
    }

    .loginbutton {
        border: none;
        font-family: 'Yeon Sung', cursive;
        font-weight: 400;
        font-size: 20px;
        color: white;
        background-color: transparent;
        cursor: pointer;
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

        .lastNameLabel,
        .firstNameLabel,
        .passwordLabel,
        .emailLabel {
            flex: 1;
        }

        .lastNameBox,
        .firstNameBox,
        .passwordBox,
        .emailBox {
            flex: 1,
        }

        .lastNameInputCentering,
        .firstNameInputCentering,
        .passwordInputCentering,
        .emailInputCentering {
            margin: auto;
            width: 320px;
            position: relative;
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

        .lastNameLabel,
        .firstNameLabel,
        .passwordLabel,
        .emailLabel {
            flex: 1;
        }

        .lastNameBox,
        .firstNameBox,
        .passwordBox,
        .emailBox {
            flex: 1,
        }

        .lastNameInputCentering,
        .firstNameInputCentering,
        .passwordInputCentering,
        .emailInputCentering {
            margin: auto;
            width: 240px;
            position: relative;
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
        .signupmargin{
            margin-bottom: 20px;
        }
    }
    </style>
</head>

<body>
    <div class="container">
        <form action="adminsignuppage.php" method="post">
            <div class="row">
                <label class="firstNameLabel">FirstName</label>
                <div class="firstNameBox">
                    <div class="firstNameInputCentering">
                        <input class="firstNameInput" name="firstname" value="<?php echo $firstname ?>" type="text"
                            placeholder="FirstName...">
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
                        <input class="lastNameInput" name="lastname" type="text" value="<?php echo $lastname ?>"
                            placeholder="LastName...">
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
                        <input class="emailInput" name="email" type="email" value="<?php echo $email ?>"
                            placeholder="Email...">
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
                        <input class="passwordInput" name="password" type="password" value="<?php echo $password ?>"
                            placeholder="Password...">
                        <span class="showpassword" onclick="passworddecrypt()">show</span>
                        <?php if (!(empty($errors)) && !(empty($errors['password']))): ?>
                        <span class="<?php echo $errorclass ?>"><?php echo $errors['password'] ?></span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="buttoncenterdiv">
                <button class="signupbutton" name="signup">Signup</button>
            </div>
            <div class="spacewidth">
                <div class="space">
                    <hr class="horizontalLine">
                    <span>Or</span>
                    <hr class="horizontalLine">
                </div>
            </div>


            <div class="buttoncenterdiv signupmargin">
                <button class="loginbutton" name="loginfromsignup">Already Signed Up then Login</button>
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