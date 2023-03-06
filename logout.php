<?php 
     session_start();
     unset($_SESSION['reg_id']);
     session_destroy(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Yeon Sung', cursive;
        font-weight: 400;
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

        html{
           min-height: 100%;
           position: relative;
        }
        
        .main-container{
           width: 100%;
           height: 100%;
         
       }
       .main-container::after{
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
           filter: blur(20px);
       }

        .container{
            height: 800px;
            width: 100%;
             display: flex;
            align-items: center;
            justify-content: center;

        }
        .progress{
            position: relative;
            width: 400px;
            height: 30px;
            background:  white;
            border-radius: 18px;
        }
        .progress_fill{
            width: 50px;
            height: 100%;
            border-radius: 18px;
            background: skyblue;
        }
        .progress_text{
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 5px;
            color: black;
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
            <li class="navbar-links"><a href="contact.php">Contact</a></li>
            <li class="navbar-links activecolor"><a style="color:white" href="logout.php">Logout</a></li>
        </ul>
    </div>

    <div class="main-container">
        <div class="container">
            <div class="progress">
                <div class="progress_fill"></div>
                <span class="progress_text"></span>
            </div>
        </div>
    </div>
   
    <script>
        const progressContainer = document.getElementsByClassName('progress')[0];
        const progressBar = document.getElementsByClassName('progress_fill')[0];
        const progressText = document.getElementsByClassName('progress_text')[0]
        var handle = setInterval(()=>{
            let width = progressBar.clientWidth;
            progressBar.style.width = width + 50 + "px";
            let width1 = progressBar.clientWidth;
            let percentage = (width1 / 400) * 100;
            progressText.innerText = percentage.toString() + "%";
            if(progressContainer.clientWidth <= progressBar.clientWidth){
                clearInterval(handle);
                window.location.href = "http://localhost:8888/projectquestionblog/index.php";
            }
        }, 500);
    </script>
</body>
</html>