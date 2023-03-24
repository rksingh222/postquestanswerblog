<!--https://formspree.io/forms/xvonkbkg/integration -->
<?php  session_start();  
   include("path.php");
   include(ROOT_PATH . "middleware.php");
   usersOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Yeon+Sung&display=swap');

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Yeon Sung', cursive;
        font-weight: 400;
    }

    body {
        width: 100%;
        height: 100vh;
    }


    .fixedtype {
        position: fixed;
        top: 0;
        width: 100%;
        background-color: white;
    }

    ul {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }

    .bar {
        display: none;
        color: black;
    }

    .logo {
        flex: 1;
        color: #67727e;
        padding-top: 20px;
        padding-left: 40px;
        padding-bottom: 20px;
        font-size: 22px;
    }

    .navbar-links a {
        display: block;
        text-decoration: none;
        color: #67727e;
    }

    .navbar-links {
        color: #67727e;
        font-size: 22px;
        padding: 20px;
        list-style-type: none;
        cursor: pointer;
    }

    .activecolor {
        background-color: #022D36;
    }

    .activelink {
        color: white;
    }


    .container {

        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        padding: 20px 100px;
    }

    .container::after {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: url('./bg.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        z-index: -1;
        filter: blur(50px);
    }

    .contact-box {
        width: 1000px;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        justify-content: center;
        align-items: center;
        text-align: center;
        background-color: #fff;
        box-shadow: 0px 0px 19px 5px rgba(0, 0, 0, 0.19);
    }

    .left {
        height: 100%;
        background: url('./bg.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;

    }

    .right {
        padding: 25px 40px;
    }

    h2 {
        position: relative;
        padding-bottom: 10px;
        margin-bottom: 10px;
    }

    h2:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        height: 4px;
        width: 50px;
        background-color: black;
        border-radius: 2px;
    }

    .field {
        width: 100%;
        padding: 0.5rem 1rem;
        outline: none;
        border: 2px solid rgba(0, 0, 0, 0);
        background-color: rgba(230, 230, 230, 0.6);
        font-size: 1.1rem;
        margin-bottom: 22px;
        transition: 0.3s;
    }

    .field:hover {
        background-color: rgba(0, 0, 0, 0.1);
    }

    .field:focus {
        background-color: #fff;
        border: 2px solid rgba(30, 85, 250, 0.47);
    }

    .area {
        min-height: 150px;
    }

    .btn {
        width: 100%;
        padding: 0.5rem 1rem;
        background-color: black;
        color: white;
        cursor: pointer;
        outline: none;
        border: none;
        transition: 0.3s;
        font-size: 1.1rem;
    }

    .btn:hover {
        background-color: #67727e;
    }


    @media screen and (max-width:800px) {

        .container {
            margin-top: 80px;
            padding: 20px;
        }

        .contact-box {
            width: 100%;
            grid-template-columns: repeat(1, 1fr);
        }

        .left {
            height: 200px;
            background: url('./bg.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        ul {
            flex-wrap: wrap;
        }

        .bar {
            font-size: 24px;
            padding-top: 24px;
            padding-right: 40px;
            display: block;
            color: #67727e;
        }

        .navbar-links {
            display: none;
            width: 100%;
            text-align: center;
        }

        .active {
            display: block;
        }
    }
    </style>
</head>

<body>
    <div class="fixedtype">
        <ul>
            <li class="logo">Post Question</li>
            <li class="bar"><i class="fa fa-bars"></i></li>
            <li class="navbar-links"><a href="home.php">Home</a></li>
            <li class="navbar-links"><a href="adminblogpage.php">Post</a></li>
            <li class="navbar-links"><a href="about.php">About</a></li>
            <li class="navbar-links activecolor"><a style="color:white" href="home.php">Contact</a></li>
            <li class="navbar-links"><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="contact-box">
            <div class="left"></div>
            <div class="right">
                <form action="https://formspree.io/f/xvonkbkg" method="POST">
                    <h2>Contact Us</h2>
                    <input type="text" class="field" placeholder="Your Name" name="Name">
                    <input type="email" class="field" placeholder="Your Email" name="email">
                    <input type="text" class="field" placeholder="Your Phone" name="phone">
                    <textarea class="field area" placeholder="Message" name="message"></textarea>
                    <button class="btn" value="submit">send</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        var bar = document.getElementsByClassName('bar')[0];
        var leftnavbaractive = document.getElementsByClassName('navbar-links');
        bar.addEventListener("click", () => {
            for (var i = 0; i < leftnavbaractive.length; i++) {
                leftnavbaractive[i].classList.toggle('active');
            }
        })
    </script>
</body>

</html>