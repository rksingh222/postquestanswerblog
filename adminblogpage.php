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



        body {
            background-image: url('./school.jpg');
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        form {
            margin-top: 150px;
        }

        .row {
            display: flex;
            flex-direction: row;
            align-self: center;
            margin-bottom: 40px;
        }

        .questionlabel,
        .textarealabel,
        .setoptionlabel {
            text-align: center;
            flex: 1;
            color: white;
            font-family: 'Yeon Sung', cursive;
            font-weight: 400;
            font-size: 20px;
            display: block;
        }

        .questionrootdiv,
        .textareaouterspace {
            flex: 3;
        }

        .questioncenteringdiv,
        .textareacenteringdiv {
            margin: auto;
            width: 700px;
        }

        .questiontextarea,
        .textarea,
        .optiontext {
            margin: auto;
            flex: 2;
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
            width: 700px;
            height: 400px;
            transition: all 0.2s;
        }

        .questiontextarea {
            width: 700px;
            height: 80px;
        }

        .questiontextarea:hover,
        .textarea:hover {
            cursor: pointer;
            background-color: #eeeeee;
        }

        .questiontextarea:focus,
        .textarea:focus {
            cursor: text;
            color: #333333;
            background-color: white;
            border-color: #333333;
        }

        .buttoncenterdiv {
            width: 1400px;
            text-align: center;
        }

        .postquestion {
            cursor: pointer;
            border-radius: 20px;
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

        .postquestion:active {
            border-color: #333333;
            border-radius: 10px;
            background-color: white;
            color: #333333;
        }

        .option {
            flex: 3;
        }

        .row-display-option {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .optiontext {
            width: 60px;
            height: 20px;
        }

        .optiontext:focus {
            border-color: #333333;
            border-radius: 10px;
            background-color: white;
            color: #333333;
        }

        .optioncenteringdiv {
            margin: auto;
            width: 700px;
        }

        .error {
            color: #ed6468;
            padding: 1em;
            font-family: 'Yeon Sung', cursive;
            width: 100%;
            font-weight: 400;
            font-size: 20px;
        }
        .visible{
            display: none;
            color: white;
            font-family: 'Yeon Sung', cursive;
            font-size : 20px;
            font-weight: bold;
            width: 1400px;
            text-align: center;
            position: relative;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="fixedtype">
        <ul>
            <li class="logo">Post Question</li>
            <li class="bar"><i class="fa fa-bars"></i></li>
            <li class="navbar-links"><a href="home.php">Home</a></li>
            <li class="navbar-links activecolor"><a style="color:white" href="adminblogpage.php">Post</a></li>
            <li class="navbar-links"><a href="#">About</a></li>
            <li class="navbar-links"><a href="#">Contact</a></li>
        </ul>
    </div>
    <form action="adminblogpage.php" method="post">
        <?php if(!(empty($success))):  ?>
        <?php echo '<style type="text/css"> .visible{ display:block; } </style>'?>
        <?php endif; ?>
        <div class="visible">post submitted successfully</div>
        
        <div class="row">
            <label class="questionlabel">Post Question</label>
            <div class="questionrootdiv">
                <div class="questioncenteringdiv">
                    <textarea class="questiontextarea" placeholder="Enter Question..." name="question"
                        value="<?php echo $question ?>"></textarea>
                    <?php if (!(empty($errors)) && !(empty($errors['question']))): ?>
                    <span class="<?php echo $errorclass ?>">
                        <?php echo $errors['question'] ?>
                    </span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <label class="setoptionlabel">SetOption</label>
            <div class="option">
                <div class="optioncenteringdiv">
                    <div class="row-display-option">
                        <label>option1</label>
                        <input type="text" class="optiontext" name="option1" value="<?php echo $option2 ?>">
                        <label>option2</label>
                        <input type="text" class="optiontext" name="option2" value="<?php echo $option2 ?>">
                        <label>option3</label>
                        <input type="text" class="optiontext" name="option3" value="<?php echo $option3 ?>">
                        <label>option4</label>
                        <input type="text" class="optiontext" name="option4" value="<?php echo $option4 ?>">
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <label class="textarealabel">Post Answer</label>
            <div class="textareaouterspace">
                <div class="textareacenteringdiv">
                    <textarea class="textarea" placeholder="Enter Answer..." name="answer"
                        value="<?php echo $answer ?>"></textarea>
                    <?php if (!(empty($errors)) && !(empty($errors['answer']))): ?>
                    <span class="<?php echo $errorclass ?>">
                        <?php echo $errors['answer'] ?>
                    </span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="buttoncenterdiv">
            <button class="postquestion" name="postquestion">postquestion</button>
        </div>
    </form>

    <script>
        console.log('test');
        function onVisible(element, callback) {
        new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
            if(entry.intersectionRatio > 0) {
                callback(element);
                observer.disconnect();
            }
            });
        }).observe(element);
        }
        onVisible(document.querySelector(".visible"), () => {
            console.log("it's visible");
            let pos = 0;
            let id;
            var targetNode = document.querySelector(".visible");
                clearTimeout(id);
                id = setTimeout(frame, 1000);
                function frame(){
                    targetNode.style.display = 'none';
                    clearTimeout(id);
                }
        });

        /*var targetNode = document.getElementsByClassName('visible')[0];
        var observer = new MutationObserver(function () {
            console.log("inside the observer");
            if (targetNode.style.display != 'none') {
                // doSomething
                console.log("inside the if clause")
                let pos = 0;
                clearInterval(id);
                id = setInterval(frame, 5);
                function frame(){
                    if(pos == 800){
                        targetNode.style.display = 'none';
                        clearInterval(id);
                    } else{
                        pos++;
                        targetNode.style.left = pos + 'px';
                    }
                }
            }
        });
        observer.observe(targetNode, { attributes: true, childList: true });*/
    </script>
</body>

</html>