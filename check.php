<?php 

if (isset($_POST["submit"])) {
    if ($_POST["user"]==""||$_POST["password"]=="") {
       header("location:postget.php?empty=19");
       exit;
    }
    if ($_POST["user"]=="ali"and $_POST["password"]=="0000") {
        header("location:check.php");
        exit;
    }
    else{
        header("location:postget.php?wrong=50");
        echo " please enter true password";
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Check</title> -->
    <h1>That Is True!!</h1>
    
</head>
<body>
    <!-- <h9>Check</h9> -->
    <style>
        h9{
            text-align: center;
            margin: 10px;
            padding: 100px;
        }
        /* *
       {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    } */
    body
    {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: lightgreen;
    } 
    
    .face
    {
    position:relative;
    width: 300px;
    height: 300px;
    border-radius: 50%;
    background: rgb(221, 192, 33);
    display: flex;
    justify-content: center;
    align-items: center;
    }

    .face::before
    {
    content: '';
    position: absolute;
    top: 180px;
    width: 150px;
    height: 70px;
    background: rgb(124, 10, 12);
    border-bottom-left-radius: 70px;
    border-bottom-right-radius: 70px;
    transition: 0.5s;
    }
    .face:hover::before
    {
    top: 210px;
    width: 150px;
    height: 20px;
    background: rgb(0, 0, 12);
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
    }

    .eyes
    {
    position: relative;
    top: -40px;
    display: flex;
    }
    .eyes .eye
    {
    position: relative;
    width: 80px;
    height: 80px;
    display: block;
    background: #fff;
    margin: 0 15px;
    border-radius: 500%;
    }
    .eyes .eye::before
    {
    content: '';
    position: absolute;
    top: 50%;
    left: 25px;
    transform: translate(-50%,-50%);
    width: 40px;
    height: 40px;
    background: #333;
    border-radius: 50%;
    }

    
            </style>
    <div class="face">
<div class="eyes">
<div class="eye"></div>
<div class="eye"></div>
</div>
</div>
<script>
document.querySelector('body').addEventListener('mousemove',eyeball);
function eyeball(){
var eye = document.querySelectorAll('.eye');
eye.forEach(function(eye){
let x = (eye.getBoundingClientRect().left) + (eye.clientWidth / 2);
let y = (eye.getBoundingClientRect().top) + (eye.clientWidth / 2);
let radian = Math.atan2(event.pageX - x, event.pageY - y);
let rot = (radian * (180 / Math.PI) * -1) + 0;
eye.style.transform = "rotate("+ rot +"deg)";
})
}
</script>
    
        
   

</body>
</html>