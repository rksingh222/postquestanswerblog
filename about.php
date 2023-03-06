<?php session_start(); 
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
    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: 'Yeon Sung', cursive;
            font-weight: 400;
        }
        body{
            background-color: #dee0e3;
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
        .activelink{
            color: white;
        }

        .heading{
           
            text-align: center;
            margin-top: 100px;
        }
        .heading h1{
            font-size: 50px;
            color: #36455c;
            margin-bottom: 10px;
        }
        .heading p{
            font-size: 20px;
            color: #666;
            margin-bottom: 50px;
        }
        .about-us{
            display: flex;
            align-items: center;
            width: 85%;
            margin: auto;
        }
        .about-us img{
            flex: 50%;
            max-width: 50%;
            height: auto;
        }
        .content{
            padding: 35px;
        }
        .content h2{
            color: #36455c;
            font-size: 24px;
            margin: 15px 0px;
        }
        .content p{
            color: #666;
            font-size: 18px;
            line-height: 1.5;
            margin: 15px 0px;
        }
        .read-more-btn{
            display: inline-block;
            color: #fff;
            background-color: #0084ff;
            border: none;
            border-radius: 5px;
            padding: 12px 20px;
            font-size: 18px;
            cursor: pointer;
            transition: 0.2s;
        }
        .read-more-btn:hover{
            background-color: #006dd6;
        }

        @media screen and (max-width:768px) {
            .about-us{
                flex-direction: column;
            }
            .about-us img{
                flex: 0 100%;
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
            <li class="navbar-links activecolor"><a style="color:white" href="#">About</a></li>
            <li class="navbar-links"><a href="contact.php">Contact</a></li>
            <li class="navbar-links"><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="heading">
        <h1>About Us</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint, tenetur.</p>
    </div>
    <section class="about-us">
        <img src="./bg.jpg">
        <div class="content">
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, repellendus!</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                Accusamus rerum doloremque laborum deserunt inventore nostrum 
                adipisci veniam molestias, omnis animi architecto reprehenderit 
                repudiandae enim et quos rem fugiat molestiae iste! Deserunt hic 
                similique quia saepe doloribus porro corrupti necessitatibus iste!</p>
                <button class="read-more-btn">Read More</button>
        </div>
    </section>
</body>
</html>