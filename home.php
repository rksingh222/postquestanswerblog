<?php include("path.php"); ?>
<?php include(ROOT_PATH . "post.php"); ?>
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
            box-sizing: border-box;
            margin: 0;
            padding: 0;
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



        body {
            background-image: url('./school.jpg');
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }


        .main-section {

            border: 2px solid #e0e0e0;
            width: 1000px;
            margin: auto;
            margin-top: 100px;
        }

        .question-section {
            
            border: 2px solid #e0e0e0;
            width: 960px;
            margin: auto;
            margin-top: 20px;
            margin-bottom: 20px;

        }

        h4 {
            color: black;
            font-size: 20px;
            padding: 20px;
            font-weight: bold;
            font-size: 20px;
        }

        .options {
            display: flex;
            flex-direction: row;
            padding-left: 20px;
            padding-right: 20px;
        }

        .options div {
            flex: 25%;
        }

        span {
            cursor: pointer;
            border-radius: 50%;
            padding: 10px;
            background: #67727e;
        }

        .column-wise {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .activecolor {
            background-color: #022D36;
        }
        .activelink{
            color: white;
        }


        @media screen and (max-width: 600px) {
            ul {
                flex-wrap: wrap;
            }

            .bar {
                font-size: 24px;
                padding-top: 24px;
                padding-right: 40px;
                display: block;
            }

            .navbar-links {
                display: none;
                width: 100%;
                text-align: center;
                background-color: white;
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
            <li class="navbar-links activecolor"><a style="color:white" href="home.php">Home</a></li>
            <li class="navbar-links"><a href="adminblogpage.php">Post</a></li>
            <li class="navbar-links"><a href="about.php">About</a></li>
            <li class="navbar-links"><a href="contact.php">Contact</a></li>
        </ul>
    </div>

    <div class="main-section">
        <?php foreach ($posts as $post) : ?>
        <div class="question-section">
            <h4><?php echo $post['question_id'] ?>&nbsp;&nbsp;<?php echo $post['question'] ?></h4>
            <div class="options">
                <div>
                    <div class="column-wise"><span>A</span>
                        <h3 style="padding-left: 15px;"><?php echo $post['option1'] ?></h3>
                    </div>
                </div>
                <div>
                    <div class="column-wise"><span>B</span>
                        <h3 style="padding-left: 15px;"><?php echo $post['option2'] ?></h3>
                    </div>
                </div>
                <div>
                    <div class="column-wise"><span>C</span>
                        <h3 style="padding-left: 15px;"><?php echo $post['option3'] ?></h3>
                    </div>
                </div>
                <div>
                    <div class="column-wise"><span>D</span>
                        <h3 style="padding-left: 15px;"><?php echo $post['option4'] ?></h3>
                    </div>
                </div>
            </div>
            <h4><?php echo $post['answer'] ?></h4>
        </div>
        <?php endforeach ; ?>
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