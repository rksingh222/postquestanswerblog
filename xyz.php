<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .progresscontainer{
        height: 60px;
        width: 1400px;
        display: flex;
        align-items: center;
        justify-content: center;

     }
    .progress{
            position: relative;
            width: 400px;
            height: 30px;
            background:  white;
            border: 1px solid black;
            border-radius: 18px;
        }
        .progress_fill{
            width: 0px;
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
    <form  onsubmit="return test(this)">
        <input type="text">
        <input type="submit"  name="login">
        <div class="progresscontainer">
            <div class="progress">
                <div class="progress_fill"></div>
                <span class="progress_text"></span>
            </div>
            </div>
    </form>
   
    <script>
        function test(form){
           console.log('test');
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
                form.action="xyzpost.php";
                form.method="post";
                return true;
            }
        }, 500);
         return false;
        }
    </script>
</body>
</html>